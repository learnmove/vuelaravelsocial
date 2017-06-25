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

Route::group(['prefix'=>'blog'],function(){

// myblog
	Route::group(['as'=>'myblog::'],function(){
		
	
			Route::get('/myblog',['as'=>'article-list',function () {
				    return view('blog.article-list');
				}] );


				Route::get('/myblog/article', ['as'=>'article',function () {
				    return view('blog.article');
				}]);


			});
	// other people

	// public

	Route::get('/latest-article', function () {
	    return view('blog.latest-article');
	})->name('latest-article');


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
	Route::get('register',function(){
		return view('member.register');
	})
	->name('register');
	;
	Route::get('login',function(){
		return view('member.login');
	})
	->name('login')
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