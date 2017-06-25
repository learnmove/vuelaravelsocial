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
              @if(Session::has('errors'))
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}} </li>
                @endforeach
              </ul>
            </div>
            @endif
          <form action="{{route('Postlogin')}}" method="post">
            {{csrf_field()}}

            <div class="form-group" >
            <label>帳號</label>
            <input type="text" 
            value="{{old('account')}}"
             placeholder="craigchang30248" class="form-control" maxlength="100" name="account"  >
            </div>
        <div class="form-group" >
            <label>密碼</label>
            <input type="password" 
            value="{{old('password')}}"
             placeholder="5位中英數字以上" class="form-control" maxlength="20" name="password">
            </div>
            <button class="btn btn-primary" type="submit">來企登入嘍!</button>
          </form>


        </div>
@stop   