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
    		$article['article_site']=md5(uniqid());
         	$article=new BlogArticle($article);

    	Auth::user()->blog_article()->save($article);
    	return redirect()->back();

    }
}
