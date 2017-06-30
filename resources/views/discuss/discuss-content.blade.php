@extends('discuss.partials.layout')
@section('css')

    <link rel="stylesheet"  href="{{asset('css/discuss-content.css')}}">
@stop
@section('discuss-block')

      <div class="article-block">
        <div class="self-container">
          <div class="article-top">
            <div class="article-title">

            {{$article->title}}
            </div>
            <div class="article-author-block">
            <span>作者:</span>
            <span class="article-time">
            {{$article->user->designer}}
              
            </span>
            </div>
            <div class="article-time-block">
            <span>時間:</span>
            <span class="article-time">
{{$article->created_at}}              
            </span>
            </div>

          </div>

          <div class="article-content">
      {!!$article->content!!}
            
          </div>
          <div class="article-comment-block">
          @foreach($replies as $reply)
        <div class="comment">

            <div class="wrap-comment-user">

                <div class="comment-avatar">
                <img class="img-responsive img-circle" src="{{asset('user/avatars/'.$reply->discussReplytUser->avatar)}}">
                </div>
              <div class="comment-name-content-wrapper">
                  <div class="comment-name-block">
          
              <div class="comment-name">
                {{$reply->discussReplytUser->designer}}
              </div>
              <!-- <img class="thumb" src="./image/thumb.png"> -->

              </div>
                 <div class="comment-content">  {{$reply->content}}
              </div>
              </div>
              

             

            </div>
                          <div class="comment-time">
                {{$reply->created_at}}
              </div>
            </div>
            @endforeach()

          </div>
<form class="form-fixed" method="post" action="{{route('discuss::post-reply',['article_id'=>$article->id])}} " >
{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">評論</label>
    <input type="text" class="form-control" placeholder="輸入文字" name="content">
  </div>
  <button class="btn btn-primary">送出</button>
</form>
@stop