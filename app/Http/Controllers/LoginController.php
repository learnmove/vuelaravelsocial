<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    //
	public function getLogin(){
		return view('member.login');
	}

	public function postLogin(Request $rq){
			$this->validate($rq,[
			'account'=>'required|unique:users|max:255',
			'password'=>'min:5|max:255|required',
		
			],
			[
				'account.required'=>'你沒有填寫帳號',
				'password.required'=>'你沒有填寫密碼',
				'password.min'=>'密碼至少5個字',

			]
			);
		if (Auth::attempt(['account'=>$rq->input('account'),'password'=>$rq->input('password')])) {
			return redirect()->route('index');
			# code...
		}else{
			return redirect()->back()->withErrors(['帳號密碼錯誤'])->withInput($rq->all());
		}
	}

	public function logout(){
		Auth::logout();
		return redirect()->route('login');
	}

}
