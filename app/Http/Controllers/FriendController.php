<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;
class FriendController extends Controller
{
    //
    public function getIndex($user_account){
    		$user=$this->getUser($user_account);
    		$friends=$user->friends();

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
    	return redirect()->back();
    }

    public function acceptFriend($friend_id){
    	$friend=User::find($friend_id);
    	Auth::user()->acceptFriendRequest($friend);
    	return redirect()->back();
    }
}
