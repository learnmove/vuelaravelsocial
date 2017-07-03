<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DiscussArticle;  
use App\DiscussArticleTag;
use App\DiscussArticleReply;
use Auth;
use DB;
use DOMDocument;
class DiscussController extends Controller
{
    //
    public function getDiscussList($category_id=null){
    	if($category_id){
    		$articles=DiscussArticleTag::with(['article'])->where('id',$category_id)->first()->article()->with(['user','tag'])->orderBy('created_at','desc')->paginate(15);

    	}else{
    		$articles=DiscussArticle::with(['user','tag','replies'])->orderBy('created_at','desc')->paginate(15);
    	}
    	
    	$tags=$this->getTags();
		return view('discuss.discuss-list',compact('articles','tags'));
    }
    public function getDiscussArticle($id,$category=null){
    	$article=DiscussArticle::find($id);
    	$replies=DiscussArticleReply::with('discussReplytUser')->where('article_id',$article->id)->get();
    	$tags=$this->getTags();
		return view('discuss.discuss-content',compact('article','replies','tags'));

    }
    public function getTags(){
		return DiscussArticleTag::all();
    }
    public function postDiscussArticle(Request $rq){
    	$this->validate($rq,[
    			'title'=>'required',
    			'content'=>'required',

    		]);
    	if(!Auth::check()){
    		$rq['user_id']=1;
    	}
    	$rq['image']=str_replace('http','https',$rq['image']);
    	$rq['content']=clean($rq->input('content'));
    	$article=new DiscussArticle($rq->except('category'));
    	$article->save();
    	$article->tag()->attach($rq->input('category'));
    	return redirect()->back();
    }

    // 自動加class
   // public function add_responsive_class($content){

   //      $content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");
   //      $document = new DOMDocument();
   //      libxml_use_internal_errors(false);
   //      $document->loadHTML(utf8_decode($content));

   //      $imgs = $document->getElementsByTagName('img');
   //      foreach ($imgs as $img) {           
   //         $img->setAttribute('class','img-responsive');
   //      }

   //      $html = $document->saveHTML();
   //      return $html;   }
// }
    public function postDiscussArticleReply(Request $rq ,$article_id){
    		$this->validate($rq,[
    			'content'=>'required',
    		]);
    	if(!Auth::check()){
    		$rq['user_id']=1;
    	}
    	$rq['article_id']=$article_id;
    	DiscussArticleReply::create($rq->all());
    	return redirect()->back();
    }
}
