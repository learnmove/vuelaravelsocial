<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\BlogArticleReply;
class BlogArticleReplyController extends Controller
{
    //
 	public function postReply($user,$article_id,Request $rq){

 		if(Auth::check()){
 		$rq['user_id']=Auth::user()->id;
 		}
 		$rq['user_id']=1;	
 		$rq['blog_article_id']=$article_id;
 		$rq->input('private')=='on'?$rq['private']=true:$rq['private']=false;
 		BlogArticleReply::create($rq->all());
 		return redirect()->back();
 	}   
}
