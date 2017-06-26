<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Illuminate\Http\Request;
use App\BlogArticle;
use Auth;
use Session;
class BlogController extends Controller
{


    //
    public function getBlog($user){
    	$stuff=$this->getBlogStuff($user);
    	$articles=BlogArticle::where('user_id',$stuff['user_id'])->orderBy('created_at','desc')->paginate(5);
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
		with('articles_latest',$stuff['articles_latest'])
		;

		
    
    }
    public function getDecryptArticle(Request $rq,$user,$article_id){
    	$decrypt=$rq->input('decrypt');
    	$article=BlogArticle::find($article_id);
    	$article_site=$article->article_site;
    	if($article->secret==$decrypt){
    		Session::put($article->title, true);
    		return redirect()->route('blog::article',['user'=>$user,'article_id'=>$article_site]);
    	}else{
    		return redirect()->back();
    	}
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
			$user_id)->orderBy('created_at','desc')->take(11)->pluck('title','article_site');
    	DB::table('blog')->where('user_id',$user_id)->increment('visited_count');
    	$blog=$useraccount->blog;

    	return ['blog'=>$blog,'avatar'=>$avatar,'user_id'=>$user_id,'articles_latest'=>$articles_latest];
    }

}
