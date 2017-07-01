<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GalleryArticle;
use Auth;
use App\User;
use Image;
use App\GalleryReply;
class GalleryController extends Controller
{
    //
    public function getGallery(){
$articles=$this->getArticles();

    return view('index',compact('articles'));
    }
    public function getArticles(){
    	return GalleryArticle::with(['user','ownReply.user'])->orderBy('created_at','desc')->paginate(15);
    }
    public function postPhotoArticle(Request $rq){

 		$useraccount='';

    	if(Auth::check()){
 		$rq['user_id']=Auth::user()->id;
 		$useraccount=Auth::user()->account;
 		}else{
 		$rq['user_id']=1;	
 		$useraccount=User::find(1)->account;

 		}
if ($rq->hasFile('little_image')) {


		$store_path=public_path('/user/gallery/'.$useraccount);
		if(!file_exists($store_path)){
    				mkdir($store_path);
    			}
			$little_image=$rq->file('little_image');
			$filename=uniqid().'.'.$little_image->getClientOriginalExtension();

			Image::make($little_image)->resize(350,null, function ($constraint) {
    $constraint->aspectRatio();
})->save( public_path('/user/gallery/'.$useraccount.'/'.$filename ));
	
		$rq['image_xs']=$filename;
		}else{
 		dd('no');

		}


 		$rq['image']=str_replace('http','https',$rq->input('image'));
 		GalleryArticle::create($rq->except('_token','little_image'));
 		return redirect()->back();


    }
    public function	postReply(Request $rq){
    	if(Auth::check()){
 		$rq['user_id']=Auth::user()->id;
 		}else{
 		$rq['user_id']=1;	

 		}
    	GalleryReply::create($rq->all());
       $user=User::find($rq['user_id']);
    	return response()->json([$user]);
    }
}
