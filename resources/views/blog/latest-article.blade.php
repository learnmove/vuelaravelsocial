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
              本週熱門日記
            </div>
            <div class="hotest-article-block">
              <div class="hot-box">
                <div class="hot-user-info">
                  <div class="hot-avatar">
                    <img class="" src="https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/558052_419906758090863_1617995322_n.jpg?oh=fa7828b5be124422906af68fb4be8192&oe=59E13F44">
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
                    <img class="" src="https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/5999_419906794757526_386435983_n.jpg?oh=08ad35578ef7f02f31d123cf50642c88&oe=59DAA20F">
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
          <ul class="pagination">
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
</ul>
           <div class="latest-article-block hotest-article-block">
              <div class="hot-box">
                <div class="hot-user-info">
                  <div class="hot-avatar">
                    <img class="" src="https://web.archive.org/web/20120518083318im_/http://st.aio.com.tw/photo/ai00740205_KSRs4epSgM.jpg">
                  </div>
                  <div class="hot-user-account">  tzarevitch</div>
                  <div class="hot-user-name"> 小美冰淇淋</div>
                  <div class="hot-user-article-title"> 為何外國人就生氣了</div>
                  <div class="hot-user-article-degree-block">
                    人氣值
                    <span class="degree">33</span>
                  </div>
                </div>
              </div>
              <div class="hot-box">
                <div class="hot-user-info">
                  <div class="hot-avatar">
                    <img class="" src="https://web.archive.org/web/20120518083318im_/http://st.aio.com.tw/photo/ai00454009_0_KSZ0uiuRfq_0637500.jpg">
                  </div>
                  <div class="hot-user-account">  tzarevitch</div>
                  <div class="hot-user-name"> 小美冰淇淋</div>
                  <div class="hot-user-article-title"> 為何外國人就生為何外國人就生氣了氣了</div>
                  <div class="hot-user-article-degree-block">
                    人氣值
                    <span class="degree">33</span>
                  </div>
                </div>
              </div>
               <div class="hot-box">
              <div class="hot-user-info">
                <div class="hot-avatar">
                  <img class="" src="https://web.archive.org/web/20120518083318im_/http://st.aio.com.tw/photo/ai00194258_KT2qugcqUE.jpg">
                </div>
                <div class="hot-user-account">  tzarevitch</div>
                <div class="hot-user-name"> 小美冰淇淋</div>
                <div class="hot-user-article-title"> 為何外國人就生氣了</div>
                <div class="hot-user-article-degree-block">
                  人氣值
                  <span class="degree">33</span>
                </div>
              </div>
            </div>
                 <div class="hot-box">
              <div class="hot-user-info">
                <div class="hot-avatar">
                  <img class="" src="https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/10968345_932211060132205_8070272856367345994_n.jpg?oh=86c989821e19db0bc9467ab0dc24fbde&oe=59C73E60">
                </div>
                <div class="hot-user-account">  tzarevitch</div>
                <div class="hot-user-name"> 小美冰淇淋</div>
                <div class="hot-user-article-title"> 為何外國人就生氣了</div>
                <div class="hot-user-article-degree-block">
                  人氣值
                  <span class="degree">33</span>
                </div>
              </div>
            </div>
                             <div class="hot-box">
              <div class="hot-user-info">
                <div class="hot-avatar">
                  <img class="" src="https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/10313471_1429681537293082_5471867040777899136_n.jpg?oh=2215690e57a909ea7c46459767e94028&oe=59D29A00">
                </div>
                <div class="hot-user-account">  tzarevitch</div>
                <div class="hot-user-name"> 小美冰淇淋</div>
                <div class="hot-user-article-title"> 為何外國人就生氣了</div>
                <div class="hot-user-article-degree-block">
                  人氣值
                  <span class="degree">33</span>
                </div>
              </div>
            </div>                 <div class="hot-box">
              <div class="hot-user-info">
                <div class="hot-avatar">
                  <img class="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROJpVMhGuzhv8MXtrcT4cJtTs-jZ57X-h6FEcaATPVQN3rCiUwZA">
                </div>
                <div class="hot-user-account">  tzarevitch</div>
                <div class="hot-user-name"> 小美冰淇淋</div>
                <div class="hot-user-article-title"> 為何外國人就生氣了</div>
                <div class="hot-user-article-degree-block">
                  人氣值
                  <span class="degree">33</span>
                </div>
              </div>
            </div>                 <div class="hot-box">
              <div class="hot-user-info">
                <div class="hot-avatar">
                  <img class="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROJpVMhGuzhv8MXtrcT4cJtTs-jZ57X-h6FEcaATPVQN3rCiUwZA">
                </div>
                <div class="hot-user-account">  tzarevitch</div>
                <div class="hot-user-name"> 小美冰淇淋</div>
                <div class="hot-user-article-title"> 為何外國人就生氣了</div>
                <div class="hot-user-article-degree-block">
                  人氣值
                  <span class="degree">33</span>
                </div>
              </div>
            </div>                 <div class="hot-box">
              <div class="hot-user-info">
                <div class="hot-avatar">
                  <img class="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROJpVMhGuzhv8MXtrcT4cJtTs-jZ57X-h6FEcaATPVQN3rCiUwZA">
                </div>
                <div class="hot-user-account">  tzarevitch</div>
                <div class="hot-user-name"> 小美冰淇淋</div>
                <div class="hot-user-article-title"> 為何外國人就生氣了</div>
                <div class="hot-user-article-degree-block">
                  人氣值
                  <span class="degree">33</span>
                </div>
              </div>
            </div>
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