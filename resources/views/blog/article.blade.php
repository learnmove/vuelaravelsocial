@extends('blog.partials.layout')
@section('children-css')
<link rel="stylesheet" type="text/css" href="{{asset('css/myblog-article.css')}} ">
@stop
@section('article-block')
<div class="left-side box">
  @if(!$article->secret||Session::get($article->title)==true||Auth::check()&&Auth::user()->account==$user)
  <div class="article border article-preference">
    <div class="article-top">
      <div class=" article-title  ">
        {{$article->title}}
      </div>
      <div class="date">{{$article->created_at->format('Y-m-d')}}</div>
    </div>
    <div class="article-short-content">
      @if(file_exists(asset('user/blog_article_image/'.$user.'/'.$article->image)))
      <img class="content-img" src="{{asset('user/blog_article_image/'.$user.'/'.$article->image)}}
      ">
      @endif
      {!!$article->content!!}
    </div>
    <div class="post-info">
      <span class="post-time">{{$article->created_at->format('g:i A')}}</span>
      <span class="reply-count">Reply({{count($replies)}})</span>
      <i class="fa fa-eye" aria-hidden="true"></i>
      <span class="photo-watch-count">{{$article->watch_count}}</span>
    </div>
    
  </div>
  @else
  <div class="article border article-preference">
    <div class="article-top">
      <div class=" article-title  ">
        {{$article->title}}
      </div>
      <div class="date">{{$article->created_at->format('Y-m-d')}}</div>
    </div>
    
    <span>密碼提示：</span><span>{{$article->hint}} </span>
    <div>
      <form action="{{route('blog::decrypt',[$user,$article->id])}}" method="get" >
        
        <input type="text" name="decrypt">
        <input type="submit" class="btn btn-primary btn-xs" value="解密">
      </form>
      
    </div>
    <div class="post-info">
      <span class="post-time">{{$article->created_at->format('g:i A')}}</span>
      <span class="reply-count">Reply({{count($replies)}} )</span>
      <i class="fa fa-eye" aria-hidden="true"></i>
      <span class="photo-watch-count">{{$article->watch_count}}</span>
    </div>
    
  </div>
  
  @endif
</div>
@if(!$article->secret||Session::get($article->title)==true)
<div class="article-comment-block article-preference">
  <div class="article-commnet-items">
  @foreach($replies as $reply)
    <div class="article-commnet-item">
      <div class="article-commnet-avatar">
      <a href="{{route('blog::article-list',['user'=>$reply->user->account])}}">
        <img class="img-circle" src="{{asset('user/avatars/'.$reply->user->avatar)}} ">
      </a>
        
      </div>
      <div class="article-commnet-info">
        <div class="article-commnet-user-name">
        <a href="" style="color:inherit;">{{$reply->user->designer}}</a>
        </div>
        <div class="article-commnet-content">
        @if(!$reply->private||Auth::check()&&Auth::user()->id==$reply->user_id||Auth::check()&&Auth::user()->account==$user)
        {{$reply->content}}

        @else
          <i class="fa fa-lock" style="color:yellow;" aria-hidden="true"></i>屬於兩個人之間的秘密<i class="fa fa-smile-o" aria-hidden="true"></i>
         @endif
        </div>
        <div class="reply-time">
        {{$reply->created_at}}
          
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<button type="button" class="btn btn-primary reply-btn btn-lg " data-toggle="modal" data-target=".reply-target">關心</button>
<div class="modal fade reply-target" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form method="post" action="{{route('blog::reply',['user'=>$user,'article_id'=>$article->id])}} ">
      {{csrf_field()}}
        <div class="form-group">
          <label for="comment"><i class="fa fa-heart" aria-hidden="true"></i>
          關心他/她</label>
          <textarea class="my-textarea  form-control"  maxlength="2000"
          placeholder="內容2000個字以內"
          name="content" rows="" id="comment"  wrap="hard"></textarea>
          <!-- cols="23" -->
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="private" checked="false"><i class="fa fa-heartbeat" style="color:red;" aria-hidden="true"></i>
屬於你與他/她的秘密
          </label>
        </div>
        <button class="btn btn-primary">  送出</button>
      </form>
    </div>
  </div>
</div>
@if(Auth::check()&&Auth::user()->account==$user)
<button type="button" class="btn btn-primary btn-lg post-button" data-toggle="modal" data-target=".bs-example-modal-lg">寫日記</button>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form>
        <div class="form-group">
          <label for="post-title">日記標題
          </label>
          <input type="text" placeholder="標題16個字以內" maxlength="16" name="title" id="" class="post-title form-control"></div>
          
          <div class="form-group">
            <label for="comment">日記內容</label>
            <textarea class="my-textarea"  maxlength="2000"
            placeholder="內容2000個字以內"
            name="content" rows="" id="comment"  wrap="hard"></textarea>
            <!-- cols="23" -->
          </div>
          <img src="  " id="img-upload">
          <label>選一張有記念性的圖片</label>
          <input type="file" id="imginput" name="image" accept="image/jpeg,image/gif" id="">
          <button class="btn btn-primary">  送出</button>
        </form>
      </div>
    </div>
  </div>
  @endif
  @endif
  @stop