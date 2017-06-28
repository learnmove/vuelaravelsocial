<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogArticle;
use Auth;
use Image;
use Storage;
use Cache;
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
    		$account=Auth::user()->account;
    		$store_path=public_path('/user/blog_article_image/'.$account.'/');
    		$article=$rq->all();
    		if($rq->hasFile('image')){
    			$image=$rq->file('image');
    			$filename=\Carbon\Carbon::now()->format('Y-m-d').uniqid().'.'.$image->getClientOriginalExtension();
    			if(!file_exists($store_path)){
    				mkdir($store_path);
    			}
    			Image::make($image)->resize(390,null, function ($constraint) {
    $constraint->aspectRatio();
})->save( $store_path.$filename );
    		$article['image']=$filename;

    		}
    		$article['article_site']=md5(uniqid());
    		$article['content']=clean(nl2br($article['content']));
         	$article=new BlogArticle($article);

    	Auth::user()->blog_article()->save($article);
    	return redirect()->back();

    }

    public function getLatestArticle(){

    $articles=BlogArticle::with('user')->orderBy('created_at','desc')->limit(100)->paginate(24);
    $popularArticle=$this->getPopularArticle();
          return view('blog.latest-article',compact(['popularArticle','articles']));
          // 試用compact

    }
      public function getPopularArticle(){
        $popularArticle = Cache::remember('popularArticle', 1440, function() {
    return BlogArticle::where('fashioned_out',0)->orderBy('watch_count','desc')->limit(3)->get();
});
            

      return $popularArticle;
    }
}


