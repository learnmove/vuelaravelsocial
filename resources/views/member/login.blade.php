@extends('partials.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css/register.css')}}">

@stop
        <!-- content -->
@section('content')
         <div class="self-container"> 
            <div class="top"> 
             登入
            <span class="sign-top">☺ </span>
            </div>
          <form>
            

            <div class="form-group" >
            <label>帳號</label>
            <input type="text" placeholder="craigchang30248" class="form-control" maxlength="20" name="account">
            </div>
        <div class="form-group" >
            <label>密碼</label>
            <input type="password" placeholder="5位中英數字以上" class="form-control" maxlength="20" name="password">
            </div>
            <button class="btn btn-primary" type="submit">來企登入嘍!</button>
          </form>


        </div>
@stop   