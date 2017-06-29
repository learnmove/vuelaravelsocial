<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Mood;
class MoodController extends Controller
{
    //
     public function postMood(Request $rq){
		if(Auth::check()){
 		$rq['user_id']=Auth::user()->id;
 		}else{
 		$rq['user_id']=1;	
 		}

     	$mood=new Mood([
     		'user_id'=>$rq['user_id'],
     		'content'=>$rq->input('content')
     		]);
     	$mood->save();
     	return redirect()->back();

     }
}
