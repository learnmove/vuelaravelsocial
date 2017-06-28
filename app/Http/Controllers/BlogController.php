<?php

namespace App\Http\Controllers;
use App\User;
use DB;
use Illuminate\Http\Request;
use App\BlogArticle;
use Auth;
use Session;
use Cookie;
use App\Blog;
use App\BlogArticleReply;
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
		with('visiters',$stuff['visiters'])->
		with('articles_latest',$stuff['articles_latest'])->
        with('recent_replies',$stuff['recent_replies']);
		;
    }
    public function getBlogArticle($user,$article_site){


        $stuff=$this->getBlogStuff($user);
    	$article=BlogArticle::where('article_site',$article_site)
    	->first()
    	;
        $replies= $this->getArticleReply($article->id);


          if(!Cookie::has(md5('visited'.$article_site))){
       $article->watch_count++;
            $article->save();
        Cookie::queue(md5('visited'.$article_site), 'shit', 720);
}
    		return view('blog.article')->
		with('blog',$stuff['blog'])->
		with('user',$user)->
		with('avatar',$stuff['avatar'])->
		with('visiters',$stuff['visiters'])->
		with('article',$article)->
		with('articles_latest',$stuff['articles_latest'])->
        with('replies',$replies)->
        with('recent_replies',$stuff['recent_replies']);


		
    
    }
    public function getDecryptArticle(Request $rq,$user,$article_id){
    	$decrypt=$rq->input('decrypt');
    	$article=BlogArticle::find($article_id);
    	$article_site=$article->article_site;
    	if($article->secret==$decrypt){
    		Session::flash($article->title, true);
    		return redirect()->route('blog::article',['user'=>$user,'article_id'=>$article_site]);
    	}else{
    		return redirect()->back();
    	}
    }





    public function getBlogStuff($user){



        
    	$useraccount=User::where('account',$user)->first();

    	$visiters=$useraccount->getLatestVisiter();

    	$user_id=$useraccount->id;
    $recent_replies=$this->getRecenetReply($user_id);
         if(Auth::check()&&$user_id!=Auth::user()->id){
            $useraccount->visitersOfMine()->attach(Auth::user()->id);
        }
    	if($useraccount->avatar){

    		$avatar=$useraccount->avatar;
    	}else{
    		$avatar='user.jpg';
    	}
		$articles_latest=BlogArticle::where('user_id',
			$user_id)->orderBy('created_at','desc')->select('title','hint','article_site')->limit(9)->get();

          if(!Cookie::has(md5('visited'.$user.'blog'))){
         DB::table('blog')->where('user_id',$user_id)->increment('visited_count');
        Cookie::queue(md5('visited'.$user.'blog'), 'shit', 720);

    }
 
    	$blog=$useraccount->blog;
    	return ['blog'=>$blog,'avatar'=>$avatar,'user_id'=>$user_id,'articles_latest'=>$articles_latest,'visiters'=>$visiters,'recent_replies'=>$recent_replies];
    }
    public function getArticleReply($article_id){
        $replies=BlogArticleReply::with('user')->where('blog_article_id',$article_id)->get();

        return $replies;

    }
    public function getRecenetReply($user_id){

        return   $recent_replies=BlogArticleReply::with(['user','article'])->where('blog_user_id',$user_id)->orderBy('created_at','desc')->limit('9')->get();

    }




    public function getChangeBlogStyle(){
        return view('blog.styleblog');
    }
     public function postChangeBlogStyle(Request $rq){
        $user=Auth::user();
        $blog=Blog::where('user_id',$user->id);
        $blog->update($rq->except('_token'));
       return redirect()->route('blog::article-list',['user'=>$user->account]);

}
}