
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand brand logo-area" href="{{route('index')}}">
  <img class="logobird" src="{{asset('image/logo.png')}}">
          <span class="logobird-span">戀戀風塵 L' avion </span>
          </a>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav bottom-design-border">
            <li class=" bottom-border"><a href="{{route('index')}}"><i class="fa fa-users" aria-hidden="true"></i>
            畫作拍賣區</a></li>
            <li class="active bottom-border"><a href="{{route('discuss::list')}} "><i class="fa fa-comments" aria-hidden="true"></i>
            討論區</a></li>
            <li class="bottom-border"><a href="{{route('stream-video')}} "><i class="fa fa-paint-brush" aria-hidden="true"></i>
            創作直播區</a></li>
            <li class="bottom-border"><a href="{{route('latest-article')}} "><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            陌生人日記</a></li>
            <li class="bottom-border"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-smile-o" aria-hidden="true"></i>
              公益區
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="bottom-border"><a href="./latest-article.html">Page 1-1</a></li>
                <li class="bottom-border"><a href="./my-friends.html">Page 1-2</a></li>
                <li class="bottom-border"><a href="./myblog-article.html">Page 1-3</a></li>
              </ul></li>
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <!--  <li class="bottom-border "> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-smile-o" aria-hidden="true"></i>
                我的中心
                <span class="caret"></span></a>
                <ul class="dropdown-menu ">
                  <li class="bottom-border"><a href="#">Page 1-1</a></li>
                  <li class="bottom-border"><a href="#">Page 1-2</a></li>
                  <li class="bottom-border"><a href="#">Page 1-3</a></li>
                </ul></li> -->
             

      {{--  --}}
      @if(Auth::check())
           <li class="bottom-border"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-smile-o" aria-hidden="true"></i>
              屬於我的
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
               <li class="bottom-border">
                 {{Auth::user()->account}}
               </li>
                <li class="bottom-border"><a href="{{route('blog::article-list',Auth::user()->account)}}">我的日記</a></li>
                <li class="bottom-border"><a href="{{route('friend::my')}}">我的朋友</a></li>
                <li class="bottom-border"><a href="./myblog-article.html">我的作品</a></li>
              </ul></li>
                 <li class="bottom-border"><a href="{{route('logout')}} ">登出</a></li>
              </ul></li>
              @else
                 <li class="bottom-border"><a href="{{route('login')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                登入</a></li>
                <li class="bottom-border"><a href="{{route('register')}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                註冊</a></li>
      @endif


              </ul>
            </div>
          </div>
        </nav>
        <!-- searchbar -->
        <div class="searchbar-block">
          <div class="container">
            <div class="col-md-2 ">
            ad
              
              
            </div>
            <div class="col-md-8">
              
              <div class="hot-keyword">
                <h3></h3>
                <ul>
                  
                  <li>
                    <div class="hotkey-title">熱門關鍵字：</div>
                  </li>
                  <li>
                    <div class="now-hot ">正韓洋裝</div>
                  </li>
                  <li>
                    <div class="now-hot ">hello kitty</div>
                  </li>
                  <li>
                    <div class="now-hot">加大尺碼</div>
                  </li>
                  <li>
                    <div class="now-hot ">nike運動鞋</div>
                  </li>
                  <li>
                    <div class="now-hot cancel-li">new balance</div>
                  </li>
                  <li>
                    <div class="now-hot cancel-li">畢業禮物</div>
                  </li>
                  <li>
                    <div class="now-hot cancel-li">卡娜赫拉</div>
                  </li>
                  <li>
                    <div class="now-hot cancel-li">蕾絲洋裝</div>
                  </li>
                </ul>
                
              </div>
              <div class="searchbar-main">
                <div class="form-group">
                  <input class="form-control searchbar" type="text" name="" id="">
                  
                </div>
                <div class="search-icon">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </div>
                <div class="search-button">
                  <button class="btn btn-primary strenth-button ">搜寶</button>
                </div>
              </div>
            </div>
            <div class="col-md-2 ">2</div>
          </div>
        </div>
  