<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogArticle;
use Auth;
class BlogArticleController extends Controller
{
    //
    public function postArticle(Request $rq){
    		$this->validate($rq,[
    			'title'=>'required|max:16',
    			'content'=>'required|max:2000'
    			],[
    			'title.required'=>'沒填寫標題',
    			'content.required'=>'沒填寫標內容',
    			'content.max'=>'內容最多2000字'

    			]);

    		$article=$rq->all();
    		if($rq->hasFile('image')){
    			$image=$rq->file('image');
    			$filename=\Carbon\Carbon::now()->format('Y-m-d').uniqid().'.'.$image->getClientOriginalExtension();

    		}
    		$article['article_site']=md5(uniqid());
    		$article['content']=clean(nl2br($article['content']));
         	$article=new BlogArticle($article);

    	Auth::user()->blog_article()->save($article);
    	return redirect()->back();

    }
}


