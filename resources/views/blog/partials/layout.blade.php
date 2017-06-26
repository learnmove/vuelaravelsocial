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
                      @foreach($articles_latest as $key=>$value)
                      <li><a href="{{route('blog::article',[$user,$key])}} ">
  {{$value}}
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
                  <div class="comment-item">
                    <a href="#" class="comment-article-title">Re: 勇氣十足的苗栗煙火慶雙十</a>
                    <div class="comment-user-block">
                      <span>  , by</span>
                      <span class="comment-user">ealed</span>
                    </div>
                  </div>
                </div>
                <div class="block-background who-come-block border">
                  <div class="top-tab-preference who-come-top links-top-background">
                    誰來我家
                  </div>
                  <div class="who-come-grid">
                    <ul>
                      <li>
                        <img class="img-circle" src="https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/17626447_1452973721391230_1381565239478675306_n.jpg?oh=c15dd6e06572cf92bb757a4e15e845a6&oe=59C9BEEE"  >
                      </li>
                      <li>
                        <img class="img-circle" src="https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/18199268_1866004786994086_4490798884680127052_n.jpg?oh=dda32eabbfb049ed115211e503870348&oe=599BB26F"  >
                      </li>
                      <li>
                        <img class="img-circle" src="https://web.archive.org/web/20130513032753im_/http://l.yimg.com/e/cover/els718620_60.jpg?16"  >
                      </li>
                      <li>
                        <img class="img-circle" src="https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/14184568_1110549169035631_23306978654507606_n.jpg?oh=f132424f61fde3648aa47a287c52b2f4&oe=59E9F754"  >
                      </li>
                      <li>
                        <img class="img-circle" src="https://web.archive.org/web/20130513032753im_/http://l.yimg.com/e/cover/els718620_60.jpg?16"  >
                      </li>
                      <li>
                        <img class="img-circle" src="https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/5999_419906794757526_386435983_n.jpg?oh=08ad35578ef7f02f31d123cf50642c88&oe=59DAA20F"  >
                      </li>
                      <li>
                        <img class="img-circle" src="https://web.archive.org/web/20130513032753im_/http://l.yimg.com/e/cover/els718620_60.jpg?16"  >
                      </li>
                      <li>
                        <img class="img-circle" src="https://web.archive.org/web/20130513032753im_/http://l.yimg.com/e/cover/els718620_60.jpg?16"  >
                      </li>
                      <li>
                        <img class="img-circle" src="https://web.archive.org/web/20130513032753im_/http://l.yimg.com/e/cover/els718620_60.jpg?16"  >
                      </li>
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