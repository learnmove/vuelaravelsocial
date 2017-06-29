@extends('partials.layout')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/css/latest-article.css')}}">
@stop
@section('content')
        <!-- latest-article -->
        <div class="wrap">
          
          <div class="container">
              <div class="speak"> 
                 <div class="alert alert-warning">
              <img src="{{asset('image/speaker.png')}}" style="width:30px;height:30px;">
              把心情喊出來
            </div>

          <marquee nowarp behavior=" " direction="" scrollAmount="10">
          <div class="speak-items"> 
          @foreach($moods as $mood)
<div class="speak-item">  
<a href="{{route('blog::article-list',['user'=>$mood->user->account])}} ">
  <img class="img-circle" src="  http://des13.cc/star/media/k2/items/cache/eefd4fe8f589e64e0e66a4f2937ae4ae_L.jpg"><span class="speak-name">{{$mood->user->designer}} </span>說:<span class="speak-content"> {{$mood->content}}
</span>
  
</a>
      
</div>
@endforeach
          </div>
          </marquee>
              </div>
            <div class="alert alert-danger">


            <img src="{{asset('image/hot.png')}}" style="width:30px;height:30px;">
              本日熱門日記
            </div>
            <div class="hotest-article-block">
              @foreach($popularArticles as $popularArticle)
             
               <div class="hot-box">
                <a href="
                {{route('blog::article',
                ['user'=>$popularArticle->user->account,
                'article_site'=>$popularArticle->article_site
                ])
                }} ">
              <div class="hot-user-info">
                <div class="hot-avatar">
                  <img class="" src="{{asset('image/image2.jpg')}}">
                </div>

                <div class="hot-user-account"> {{$popularArticle->user->designer}}</div>
                <div class="hot-user-article-title">{{$popularArticle->title}}</div>
                <div class="hot-user-article-degree-block">
                  人氣值
                  <span class="degree">{{$popularArticle->watch_count}} </span>
                </div>
                <div class="hot-sign">
                  <i class="fa fa-free-code-camp" aria-hidden="true"></i>
                </div>
              </div>
              </a> 
            </div>
          @endforeach

          </div>
          <div class="alert alert-info ">
          <img src="{{asset('image/new.png')}}" style="width:30px;height:30px;">
          
            最新日記
          </div>
        {{$articles->links()}}
           <div class="latest-article-block hotest-article-block">

           @foreach($articles as $article)
         
                      <div class="hot-box">
                        <a href="{{route('blog::article',['user'=>$article->user->account,'article_site'=>$article->article_site])}} ">
              <div class="hot-user-info">
                <div class="hot-avatar">
                
                  
 <img class="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROJpVMhGuzhv8MXtrcT4cJtTs-jZ57X-h6FEcaATPVQN3rCiUwZA">

                 
                </div>
                <div class="hot-user-account"> 
                {{$article->user->account}}
                 </div>
                <div class="hot-user-name"> {{$article->user->designer}}</div>
                <div class="hot-user-article-title"> {{$article->title}}</div>
                <div class="hot-user-article-degree-block">
                  人氣值
                  <span class="degree">{{$article->watch_count}}</span>
                </div>
              </div>
                </a>

            </div>
@endforeach



          </div>
        </div>
        
      </div>
      @if(Auth::check())
      <button type="button" class="btn btn-primary btn-lg post-button" data-toggle="modal" data-target=".bs-example-modal-lg">吶喊</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action="{{route('blog::postMood')}}" method="post">  
      {{csrf_field()}}
    <div class="form-group">
      
      <input type="text" class="form-control" maxlength="20" name="content" id="" class="post-title" placeholder="吶喊出來你今天的心情吧/20字">
      </div>

</div>
<button class="btn btn-primary">  送出</button>
      </form>
    </div>
  </div>
</div>
@endif

@stop