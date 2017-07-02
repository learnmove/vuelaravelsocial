@extends('partials.layout')
@section('meta')
  <meta property="og:url"           content="{{Request::url()}}" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="{{$article->title}}" />
  <meta property="og:description"   content="{{$article->description}}" />
  <meta property="og:image"         content="{{$article->image}}" />
@stop
@section('content')

<img class="img-responsive" style="width:100%;" src="{{$article->image}} ">

<div class="container">	


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.9&appId=570657736656960";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 

  <!-- Your share button code -->
  <div class="fb-share-button" 
  data-href="{{Request::url()}}" data-layout="box_count"
   data-size="small" 
   data-mobile-iframe="true">
   <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">分享</a>
   </div>
 <div >作者:<span class="Author">{{$designer}} </span></div>
          <div > 畫名:<span class="Title">{{$article->title}} </span></div>
          <div>敘述:<span  class="Description">{{$article->description}} </span></div>
          <div >故事:<div class="Content"> {{$article->content}}</div></div>
          <div >價格:<div class="Price">$ {{$article->price}}</div></div>

</div>

@stop
