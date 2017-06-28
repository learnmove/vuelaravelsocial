<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');


Route::group(['as'=>'blog::','prefix'=>'blog'],function(){
	Route::get('/latest-article', function () {
    return view('blog.latest-article');
    })->name('latest-article');

// protect Auth
			Route::group(['middleware'=>'auth'],function(){

					Route::post('/{user}/post','BlogArticleController@postArticle')->name('post_article');
			// style blog
					Route::get('{user}/custom','BlogController@getChangeBlogStyle')
					->name('custom-get')
					;
				Route::post('{user}/custom','BlogController@postChangeBlogStyle')
					->name('custom-edit');
			});



		Route::get('/{user}','BlogController@getBlog')->name('article-list');
		Route::get('/{user}/{article_id}','BlogController@getBlogArticle')->name('article');
		Route::get('/{user}/{article_id}/decrypt','BlogController@getDecryptArticle')->name('decrypt');


			// 
			// reply article
			Route::post('/{user}/{article_id}/reply','BlogArticleReplyController@postReply')->name('reply');


			// 
		Route::get('/',function(){
			return redirect()->route('blog::latest-article');
		});


		});


	


// discuss
Route::group(['prefix'=>'discuss','as'=>'discuss::'],function(){
		Route::get('/list',[
			'as'=>'list', 
			function(){
		return view('discuss.discuss-list');
	}
	]);
		Route::get('/article',[
			'as'=>'article', 
			function(){
		return view('discuss.discuss-content');
	}
	]);



	
});
// stream-video
Route::get('stream-video',function(){
	return view('video.stream-video-grid');
})->name('stream-video');

// guest register login
Route::group(['middleware'=>'guest'],function(){
	Route::get('register','RegisterController@GetRegister')
	->name('register');
	;
	Route::post('register','RegisterController@PostRegister')
	->name('post-register');
	;


	Route::get('login','LoginController@getLogin')
	->name('login')
	;
	Route::post('login','LoginController@postLogin')
	->name('Postlogin')
	;

});
// friend
Route::group(['prefix'=>'friend','as'=>'friend::'],
	function(){
		Route::get('my',['as'=>'my',function(){
			return view('friend.my-friends');
		}]);
		Route::get('invite',['as'=>'invite',function(){
			return view('friend.my-friends-invite');
		}]);
});

Route::group(['middleware'=>'auth'],function(){
		Route::get('logout','LoginController@logout')
	->name('logout')
	;
});