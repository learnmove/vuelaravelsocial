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

          <marquee nowarp behavior=" " direction="">
          <div class="speak-items"> 
<div class="speak-item">  
      <img class="img-circle" src="  http://des13.cc/star/media/k2/items/cache/eefd4fe8f589e64e0e66a4f2937ae4ae_L.jpg"><span class="speak-name">小公主</span>說:<span class="speak-content"> 怎麼都是這張照
</span>
</div>

   
   


          </div>

    

          </marquee>
    

              </div>
            <div class="alert alert-danger">


            <img src="{{asset('image/hot.png')}}" style="width:30px;height:30px;">
              本日熱門日記
            </div>
            <div class="hotest-article-block">
              <div class="hot-box">
                <div class="hot-user-info">
                  <div class="hot-avatar">
                    <img class="" src="{{asset('user/origin-avatars/dddd.jpg')}}">
                  </div>
                  <div class="hot-user-account">  tzarevitch</div>
                  <div class="hot-user-name"> 小美冰淇淋</div>
                  <div class="hot-user-article-title"> 為何外國人就生氣了為何外國人就生氣了</div>
                  <div class="hot-user-article-degree-block">
                    人氣值
                    <span class="degree">33</span>
                  </div>
                  <div class="hot-sign">
                    <i class="fa fa-free-code-camp" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
              <div class="hot-box">
                <div class="hot-user-info">
                  <div class="hot-avatar">
                    <img class="" src="{{asset('user/origin-avatars/abcd.jpg')}} ">
                  </div>
                  <div class="hot-user-account">  tzarevitch</div>
                  <div class="hot-user-name"> 小美冰淇淋</div>
                  <div class="hot-user-article-title"> 為何外國人就生為何外國人就生氣了氣了</div>
                  <div class="hot-user-article-degree-block">
                    人氣值
                    <span class="degree">33</span>
                  </div>
                  <div class="hot-sign">
                    <i class="fa fa-free-code-camp" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
               <div class="hot-box">
              <div class="hot-user-info">
                <div class="hot-avatar">
                  <img class="" src="{{asset('image/image2.jpg')}}">
                </div>

                <div class="hot-user-account"> Craig-David</div>
                <div class="hot-user-article-title"> 這一年當兵的日子</div>
                <div class="hot-user-article-degree-block">
                  人氣值
                  <span class="degree">8538</span>
                </div>
                <div class="hot-sign">
                  <i class="fa fa-free-code-camp" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="alert alert-info ">
          <img src="{{asset('image/new.png')}}" style="width:30px;height:30px;">
          
            最新日記
          </div>
        {{$articles->links()}}
           <div class="latest-article-block hotest-article-block">

           @foreach($articles as $article)
                      <div class="hot-box">
              <div class="hot-user-info">
                <div class="hot-avatar">
                <a href="{{route('blog::article',['user'=>$article->user->account,'article_site'=>$article->article_site])}} ">
                  
 <img class="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROJpVMhGuzhv8MXtrcT4cJtTs-jZ57X-h6FEcaATPVQN3rCiUwZA">
                  
                </a>
                 
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
            </div>
@endforeach



          </div>
        </div>
        
      </div>
      <button type="button" class="btn btn-primary btn-lg post-button" data-toggle="modal" data-target=".bs-example-modal-lg">吶喊</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form>  

    <div class="form-group">
  
      <input type="text" class="form-control" maxlength="20" name="title" id="" class="post-title" placeholder="吶喊出來你今天的心情吧/20字">
      </div>

</div>
<button class="btn btn-primary">  送出</button>
      </form>
    </div>
  </div>
</div>

@stop