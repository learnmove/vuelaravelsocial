<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Status;
class FriendController extends Controller
{
    //
    public function getIndex($user_account){
    		$user=$this->getUser($user_account);

    		$friends=$user->friends();
    		$friends->load('Write_status');
    	return view('friend.my-friends',compact('user','friends'));
    }
    public function getViewFriend(){
    		$user=$this->getUser();
    	return view('friend.my-friends',compact('user','friends'));
    }
    public function getInvitePage($user_account){

    		$user=$this->getUser($user_account);
    		$requests=Auth::user()->friendRequests();
			return view('friend.my-friends-invite',compact('user','requests'));

    }


    public function getUser($user_account){
    		return User::with('friendOfMine')->where('account',$user_account)->first();
    }
    public function addFriend($invited_account){
    	$invited_user=User::where('account',$invited_account)->first();
    	Auth::user()->addFriend($invited_user);
    	return response()->json(['已邀請']);
    }

    public function acceptFriend($friend_id){
    	$friend=User::find($friend_id);
    	Auth::user()->acceptFriendRequest($friend);
    	return response()->json(['已接受']);
    	
    }
    public function postStatus(Request $rq){
    	$this->validate($rq,['content'=>'required|max:49'],['content.required'=>'請填寫狀態','content.max'=>'超過49字']);
    	$user_id=$rq['user_id']=Auth::user()->id;
    	Status::updateOrCreate(['user_id'=>$user_id],['content'=>$rq->input('content')]);
    	return redirect()->back();

    }
}
