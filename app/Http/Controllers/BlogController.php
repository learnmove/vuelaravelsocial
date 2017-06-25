<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function getBlog($user){

    	$useraccount=User::where('account',$user)->first();
    	$avatar=$useraccount->avatar;
    	DB::table('blog')->where('user_id',$useraccount->id)->increment('visited_count');
    	$blog=$useraccount->blog;
		return view('blog.article-list')->
		with('blog',$blog)->
		with('user',$user)->
		with('avatar',$avatar);
    }

}
