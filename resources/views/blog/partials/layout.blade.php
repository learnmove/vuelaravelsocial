@extends('partials.layout')
@section('title')
{{$blog->blog_title}}
@stop
@section('css')
   <link rel="stylesheet" type="text/css" href="{{asset('css/myblog.css?v='.rand())}}">
   @if($blog->css!=$user)
   <link rel="stylesheet" type="text/css" href="{{asset('css/blog/office/dark2/custom-blog.css')}}">
   @else
   <link rel="stylesheet" type="text/css" href="{{asset('user/css/'.$user.'/custom-blog.css')}}">
   @endif
   @yield('children-css')
@stop

      <!-- blog-content -->
@section('content')
      <div class="self-container all-preference">
        <div class="jumbotron jumbotron-preference">
          <img class="self-banner" src="{{asset('user/banners/abcdefg.jpg')}} ">
          <div class="jumbotron-text">
              <h1 class="self-blog-title">{{$blog->banner_title}}</h1>
          <p class="self-blog-description">{{$blog->banner_text}} </p>

          </div>
        
        </div>
        <div class="bottom-background">
          <div class="content-block">
            <div class="article-block  ">
              @yield('article-block')
            </div>
            <div class="links-block">
              
              <div class="right-side  box">
                <div class="block-background user-info-block border">
                  <div class="top-tab-preference account links-top-background">
                    {{$user}}'s home
                  </div>
                  
                  <div class="avatar">
                    <div class="imgbox">
                      <img src="{{asset('user/avatars/'.$avatar)}}">
                    </div>
                  </div>
                  <ul class="many-link-site">
                    <li><a href=" ">Mypage</a></li>
                    <li><a href="">photo</a></li>
                    <li><a href="{{route('blog::article-list',[$user])}}">blog</a></li>
                    <li><a href="">Friend</a></li>
                    <li><a href="" class="btn btn-primary btn-xs add-friend"><i class="fa fa-user-plus" aria-hidden="true"></i>加入好友</a></li>
                  </ul>
                </div>
                <div class="block-background recent-article-block border ">
                  <div class="top-tab-preference links-top-background">
                    Recent Articles
                  </div>
                  <div class="recent-article-title">
                    <ul>

                      @foreach($articles_latest as $article_latest)
                      <li><a href="{{route('blog::article',[$user,$article_latest->article_site])}} ">
                        @if($article_latest->hint)
                      <i class="fa fa-lock" style="color:yellow;" aria-hidden="true"></i>

                        @endif
                          {{$article_latest->title}}
                      </a>
                      </li>
                    @endforeach
                    </ul>
                  </div>
                </div>
                <div class="block-background recent-comments-block border ">
                  <div class="top-tab-preference recent-comments-top links-top-background">
                    Recent comment
                  </div>

                  @foreach($recent_replies as $recent_replies)
                  <div class="comment-item">
                    <a href="{{route('blog::article',['user'=>$user,'article_site'=>$recent_replies->article->article_site])}} " class="comment-article-title">{{$recent_replies->article->title}}</a>
                    <div class="comment-user-block">
                      <span>  , by</span>
                      <span class="comment-user">{{$recent_replies->user->designer}}</span>
                    </div>
                  </div>
                  @endforeach

                </div>
                <div class="block-background who-come-block border">
                  <div class="top-tab-preference who-come-top links-top-background">
                    誰來我家
                  </div>
                  <div class="who-come-grid">
                    <ul>
                              @foreach($visiters as $visiter)
                     
                      <li>
                      <a href="{{route('blog::article-list',['user'=>$visiter->account])}} ">
                        
                        <img class="img-circle" src="{{asset('user/avatars/'.$visiter->avatar)}} "  >

                      </a>
                      </li>
                      @endforeach  
                      
                    </ul>
                  </div>
                </div>
                <div class="block-background come-count-block border">
                  {{-- <div class="today-block">
                    今日人氣<span>15</span>
                  </div> --}}
                  <div class="total-block">
                    累積人氣<span>  {{$blog->visited_count}}</span>
                  </div>
                </div>
                <div class="mp3-block">
                <marquee class="marquee-mp3" behavior=" " direction="">
                  胡歌-一吻天荒
                </marquee>
                  <audio id="mp3-player"  autoplay loop controls >
                    <source src="{{$blog->music}}" type="audio/mpeg">
                    Your browser does not support the audio element.
                  </audio>
                </div>
              </div>
            </div>
          </div>
        </div>
  
          <!-- image enlarge -->
           <div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color:white;">Close</span></button>
        </div>
        <div class="modal-body">
          <img src="" class="enlargeImageModalSource" style="width: 100%;">
        </div>
      </div>
    </div>
</div>
        </div>

      </div>

@stop
      <!-- autoplay -->

      <!-- uploadimage -->
    @section('javascript')
    <script type="text/javascript">
      

    </script>
      <script>
      function readUrl(input){
      if(input.files&&input.files[0]){
      var reader=new FileReader();
      reader.onload=function(e){
      $('#img-upload').attr('src',e.target.result);
      }
      reader.readAsDataURL(input.files[0]); //讀取到的檔變dataUrl
      }
      }
      $("#imginput").change(function(){
      readUrl(this);
      });
// enlarge img
$(function() {
      $('.content-img').on('click', function() {
      $('.enlargeImageModalSource').attr('src', $(this).attr('src'));
      $('#enlargeImageModal').modal('show');
    });
});



      </script>
@stop
  <!-- 11字 -->