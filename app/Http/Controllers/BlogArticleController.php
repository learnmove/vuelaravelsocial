<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogArticle;
use Auth;
class BlogArticleController extends Controller
{
    //
    public function postArticle(Request $rq){
    		$article=$rq->all();

    		if($rq->hasFile('image')){
    			$image=$rq->file('image');
    			$filename=\Carbon\Carbon::now()->format('Y-m-d').uniqid().'.'.$image->getClientOriginalExtension();
    			dd($filename);
    		}
    		$article['article_site']=md5(uniqid());
    		$article['content']=clean(nl2br($article['content']));
         	$article=new BlogArticle($article);

    	Auth::user()->blog_article()->save($article);
    	return redirect()->back();

    }
}


