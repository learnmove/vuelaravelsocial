@extends('partials.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css/my-friends.css')}}">
@stop
@section('content')
        <!-- content -->
        <div class="self-container "> 
              @if(Session::has('errors'))
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}} </li>
                @endforeach
              </ul>
            </div>
            @endif
     <ul class="nav nav-tabs">
  <li class="active"><a href="{{route('friend::user-friend',[$user->account])}} ">好友名單</a></li>
  @if(Auth::check()&&Auth::user()->account==$user->account)
  <li class=""><a href="{{route('friend::invite',['user_account'=>$user->account])}}" >朋友邀情</a></li>
@endif
</ul>
            <div class="top"> 
             好友名單
            <span class="friend-count">({{$friends->count()}})  </span>
            </div>
            <div class="list ">  
            <table class="table table-hover">
            <thead>
              <tr>
                <th>暱稱</th>
                <th>狀態</th>

              </tr>
            </thead>
            <tbody class=""> 
             <tr>
               <td class="friend-block">
                 <a href="{{route('blog::article-list',['user'=>$user->account])}} ">
                     <div class="avatar"> 
            
                 <img class="img-circle" src="{{asset('user/avatars/'.$user->avatar)}} ">
                 </div>
                 <div class="friend-name">  
                {{$user->designer}}
                 </div>
                   
                 </a>
               
               </td>
               <td class="status"> 
               
                <div class="status-content">  
                {{$user->Write_status->content}}

                </div>
              </td>
             </tr>
            @foreach($friends as $friend )
             <tr>
               <td class="friend-block">
                 <a href="{{route('blog::article-list',['user'=>$friend->account])}} ">
                     <div class="avatar"> 
            
                 <img class="img-circle" src="{{asset('user/avatars/'.$friend->avatar)}} ">
                 </div>
                 <div class="friend-name">  
                {{$friend->designer}}
                 </div>
                   
                 </a>
               
               </td>
               <td class="status"> 
               
                <div class="status-content">  
                {{$friend->Write_status->content}}

                </div>
              </td>
             </tr>
            @endforeach
             
            </tbody>
             </table>
            </div>


        </div>
        @if(auth::check()&&Auth::user()->account==$user->account)
             <button type="button" class="btn btn-primary btn-lg post-button" data-toggle="modal" data-target=".bs-example-modal-lg">狀態</button>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <form action="{{route('friend::post-status')}}" method="post">
              {{csrf_field()}}
                <div class="form-group">
                
                  <input placeholder="48字內" maxlength="48" rows="1" name="content" id="" class="post-title form-control">  </div>
                  <button class="btn btn-primary">  送出</button>
                </form>
              </div>
            </div>
          </div>
          @endif
  @stop