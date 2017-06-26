<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Illuminate\Http\Request;
use App\BlogArticle;
class BlogController extends Controller
{

    //
    public function getBlog($user){
    	$stuff=$this->getBlogStuff($user);
    	$articles=BlogArticle::where('user_id',$stuff['user_id'])->paginate(3);
		return view('blog.article-list')->
		with('blog',$stuff['blog'])->
		with('user',$user)->
		with('avatar',$stuff['avatar'])->
		with('articles',$articles)->
		with('articles_latest',$stuff['articles_latest']);
		;
    }
    public function getBlogArticle($user,$article_site){



        $stuff=$this->getBlogStuff($user);
    	$article=BlogArticle::where('article_site',$article_site)
    	->where('user_id',$stuff['user_id'])->first()
    	;
    	$article->watch_count++;
    	$article->save();
    		return view('blog.article')->
		with('blog',$stuff['blog'])->
		with('user',$user)->
		with('avatar',$stuff['avatar'])->
		with('article',$article)->
		with('articles_latest',$stuff['articles_latest']);

		
    
    }





    public function getBlogStuff($user){

    	$useraccount=User::where('account',$user)->first();
    	$user_id=$useraccount->id;
    	if($useraccount->avatar){

    		$avatar=$useraccount->avatar;
    	}else{
    		$avatar='user.jpg';
    	}
		$articles_latest=BlogArticle::where('user_id',
			$user_id)->take(10)->pluck('title','article_site')->all();
    	
    	DB::table('blog')->where('user_id',$user_id)->increment('visited_count');
    	$blog=$useraccount->blog;
    	return ['blog'=>$blog,'avatar'=>$avatar,'user_id'=>$user_id,'articles_latest'=>$articles_latest];
    }

}
