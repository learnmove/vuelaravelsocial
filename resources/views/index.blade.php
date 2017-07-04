@extends('partials.layout')

        <!-- content -->
      @section('css')
          <link rel="stylesheet" type="text/css" href="{{asset('/css/index-content.css')}}">
          @stop

      @section('meta')
  <meta property="og:url"     id="og-url"      content="" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"    id="og-title"     content="戀戀風塵設計師的平台：" />
  <meta property="og:description" id="og-description"  content="" />
  <meta property="og:image"    id="og-image"     content="" />
@stop


      @section('content')
        <div class="content">
          <div class="creator-block">
            @if(Session::has('errors'))
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}} </li>
                @endforeach
              </ul>
            </div>
            @endif
            <div class="columns">
              

         
       @foreach($articles as $article)

   <div class="article-work-item">
                <div class="photo-block">
                <a href="#"  class="photo" id="photo-{{$article->id}}">  <img class="photo content-img" id="og-photo-{{$article->id}}" src="{{asset('/user/gallery/'.$article->user->account.'/'.$article->image_xs)}}"></a>
                  

                  <div class="about-count">
                    <div class="photo-like">
                      <i class="fa fa-heart" aria-hidden="true"></i>
                      <span class="photo-like-count" id="like-count-{{$article->id}}">{{count($article->ownLike)}}</span>
                    </div>
                    <div class="watch-count-block">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                      <span class="photo-watch-count">{{$article->watch_count}}</span>
                    </div>
                  </div>
                </div>
                
                
                <div class="caption">
                  <div class="photo-title" id="photo-title-{{$article->id}}">{{$article->title}}</div>
                  <p class="photo-description text-overflow" id="photo-description-{{$article->id}}">{{$article->description}}</p>
                  <div class="price-block"> <i class="fa fa-usd" aria-hidden="true"></i><span class="price" id="photo-price-{{$article->id}}"> {{$article->price}}</span></div>
                  <div class="hover-user-info">
                    <div class="user-info">
                      
                      <div class="user-avatar ">
                        
                        <img class="img-circle  avatar" src="{{asset('user/avatars/'.$article->user->avatar)}}">
                        
                      </div>
                      
                      <div class="user-name">{{$article->user->designer}} </div>
                      
                      
                    </div>
                    <div class="user-info-2">
                      <div class="user-year "> {{$article->user->age}} 歲</div>
                      <div class="user-address ">{{$article->user->location}} </div>
                      <div class="user-zodiac  ">{{$article->user->zodiac}}</div>
                
                    </div>
                    <div class="user-info-3">
                            <div class="user-company "> {{$article->user->company}} </div>
                    </div>
                    <div class="user-function">
                      <div class="wrap-user-function">


                @if(!Route::current()->parameters())
                        @if(Auth::check()&&Auth::user()->account!=$article->user->account)
                      @if($hasFriendRequestPendingArray->contains($article->user))
                     <a href="" class="btn btn-primary"><i class="fa  fa-bell-o
" aria-hidden="true"></i>
已邀請</a>
                      @elseif($isFriendArray->contains($article->user)))
                       <a href="" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i>
好朋友</a>
                      @else

                       <a href="#" id="friend-btn-{{$article->user->account}} " class="btn btn-primary friend-btn"><i class="fa fa-user-plus" aria-hidden="true"></i>加入好友</a>
                      @endif
                    @endif
                  @endif
                        <a href="{{route('get-user-album',['user_account'=>$article->user->account])}} " class="btn btn-primary"><i class="fa fa-address-book" aria-hidden="true"></i>
                        個人相簿</a>
                               <a href="{{route('blog::article-list',['user_account'=>$article->user->account])}} " class="btn btn-primary"><i class="fa fa-address-book" aria-hidden="true"></i>
                        個人日記</a>
                      </div>
                    </div>
                    
                  </div>
                  <div class="short-comment-block">
                    <a href="#" class="message-count"  id="comment-{{$article->id}}">{{count($article->ownReply)}}則留言</a>
                    <a href="{{route('get-photo-detail',['article_id'=>$article->id])}} " class="share-count">{{is_null($article->ownShare)?0:$article->ownShare->count}} 則分享</a>
                  </div>
                  <div class="function-action">
                    <ul>
                      <li>   <a class="photo-like-link" href="#" id="like-{{$article->id}}"><i class="fa {{Cookie::has('article'.$article->id)?'fa-heart':
                        $article->ownLike->where('user_id',Auth::check()?Auth::user()->id:1)->isNotEmpty()?'fa-heart':'fa-heart-o'}}
                        " aria-hidden="true"></i>
                      喜歡
                      </a></li>
                      <li><a href="#" class="replybox" id="replybox-{{$article->id}} " ><i class="fa fa-comment" aria-hidden="true"></i>
                      留言</a></li>
                      <li><a href="{{route('get-photo-detail',['article_id'=>$article->id])}} "><i class="fa fa-share" aria-hidden="true"></i>
                      分享</a></li>
                    </ul>
                 
                      
   </div> 
                     
                        



                  </div>
                    <div class="form-group">
                            <input type="text" id="reply-{{$article->id}}" name="reply_contenet" class="form-control post-comment">
                          </div>
                  <div class="comment-block-wrap" id="comment-box-{{$article->id}}">
                    <div class="comment-block">
                      <div class="comments" id="comments-{{$article->id}}">
                        @foreach($article->ownReply as $reply)
                        <div class="comment">
                          <div class="comment-user">
                            <div class="comment-user-avatar">
                              <div class="user-function">
                                <div class="wrap-user-function">
                                
                                  <a href="{{route('get-user-album',['user_account'=>$reply->user->account])}}" class="btn btn-primary"><i class="fa fa-address-book" aria-hidden="true"></i>
                                  個人相簿</a>
                                   <a href="{{route('blog::article-list',['user_account'=>$reply->user->account])}}" class="btn btn-primary"><i class="fa fa-address-book" aria-hidden="true"></i>
                                  個人日記</a>
                                </div>
                              </div>
                              <img class="img-circle " src="  {{asset('user/avatars/'.$reply->user->avatar)}}">
                            </div>
                            <div class="comment-user-name">
                            {{$reply->user->designer}} 
                             </div>
                            
                          </div>
                          <div class="comment-text">
                            {{$reply->content}}
                            <div style="text-align: right">{{$reply->created_at->diffForHumans()}} </div>
                          </div>
                        
                          </div>
                          @endforeach
                          
                        </div>
                      </div>
                    </div>
                    
                  </div>
                @endforeach

                </div>
                </div>

                </div>

              </div>
                        {{$articles->links()}}

            </div>
            <!-- 發表作品 -->
            <!--
            -->
            <button type="button" class="btn btn-primary btn-lg post-button" data-toggle="modal" data-target=".bs-example-modal-lg">發表作品</button>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <form method="post" action={{route('gallery-article-post')}} enctype="multipart/form-data">
                  {{csrf_field()}}
                    <div class="form-group">
                      <label for="post-title">作品名稱
                      </label>
                      <input type="text" maxlength="8" placeholder="8字以內" class="form-control" name="title" id="" class="post-title"></div>
                      <div class="form-group">
                        <label for="comment">作品簡述</label>
                        <input type="text"  class="form-control"  name="description" maxlength="36" placeholder="每行最多12個字/36字內">
                      </div>
                    
                      <div class="form-group">
                        <label for="comment">作品故事</label>
                        <textarea class="form-control" name="content" rows="5" id="comment" placeholder="三千字以內" maxlength="3000"></textarea>
                      </div>
                      <img src="  " id="img-upload">
                      <input type="file" onclick="uploadImg()" id="imginput" class="dropzone"  name="little_image" accept="image/jpeg,image/gif" id="">
                         <div class="form-group">
                        <label for="comment" maxlength="10">作品價格</label>
                        <input type="number"  placeholder="無價請輸入0" class="form-control" name="price"><span> 台幣</span>
                      </div>
                      <input type="hidden"  id="imgsite" name="image" value="" >
<div id="progress" style="display: none;" class="progress">
    <div id="progressbar" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:50%;">
      50%
    </div>
  </div>
                      <button class="btn btn-primary" id="submit" disabled="true">  送出</button>
                    </form>
                  </div>
                </div>
              </div>



{{-- enlarge img --}}
      <div class="modal fade" id="enlargeImageModal" tabindex="-1" role="dialog" aria-labelledby="enlargeImageModal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close"  data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="color:black;">Close</span></button>
        </div>
        <div class="modal-body">
          <img src="" class="enlargeImageModalSource" style="width: 100%;">
          <div >作者:<spant class="ModalAuthor"></spant></div>
          <div > 主題:<span class="ModalTitle"></span></div>
          <div>敘述:<span  class="ModalDescription"></span></div>
          <div >故事:<div class="ModalContent"></div></div>
        </div>
      </div>
    </div>
</div>


            </div>
            @stop
            <!-- jq -->
            @section('javascript')
            <!--  index content -->
            <script type="text/javascript" >
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
              // display comment
            var open=false;
            var token= '{{Session::token()}}';
            $(".message-count").click(function(event){
            event.preventDefault();
             var id=$(this).attr('id').replace('comment-','');
            var comment_box="comment-box-" +id;   
            if(open){
                document.getElementById(comment_box).style.display="none";
            open=false;

            }else{
                document.getElementById(comment_box).style.display="block";
            open=true;

            }
            
            });
            // reply
             var url='{{route('gallery-reply')}}';
            var reply_box='';
            var id='';
            var content='';
             var replyopen=false;
            $(".replybox").click(function(event){
              event.preventDefault();
             id=$(this).attr('id').replace('replybox-','');
             reply_box="#reply-"+id;   
            if(replyopen){
              $(reply_box).css('display','block');
   
            replyopen=false;
            }else{
              $(reply_box).css('display','none');
       
            replyopen=true;

            }});
              

             $('.post-comment').keypress(function(e){
              content=$(reply_box).val();
              if(e.which==13){
            $(reply_box).val('');

                 $.ajax({
                  method:'POST',
                  url:url,
                  _token:token,
                  data:{
                    content:content,
                    article_id:id

                  }
                 }).done(function(msg){
                  console.log(msg[0]);
                  var user=msg[0];
                 var comments='#comments-'+id;
                  $(comments).append(` <div class="comment">
                          <div class="comment-user">
                            <div class="comment-user-avatar">
                              <div class="user-function">
                                <div class="wrap-user-function">
                                  <a href="" class="btn btn-primary"><i class="fa fa-user-plus" aria-hidden="true"></i>
                                  加入好友</a>
                                  <a href="" class="btn btn-primary"><i class="fa fa-comments-o" aria-hidden="true"></i>
                                  傳送訊息</a>
                                  <a href="" class="btn btn-primary"><i class="fa fa-address-book" aria-hidden="true"></i>
                                  個人檔案</a>
                                </div>
                              </div>
                              <img class="img-circle " src="{{asset('user/avatars/')}}${'/'+user.avatar} ">
                            </div>
                            <div class="comment-user-name">
                          ${user.designer}
                             </div>
                            
                          </div>
                          <div class="comment-text">
                           ${content}
                            <div style="text-align: right">1分鐘前</div>
                          </div>
                        
                          </div>`);
                  var comment='#comment-'+id;
                var text=$(comment).text();
                text=  text.replace(/^\d*/g,function(number){
                    parseInt(number);
                    number++;
                    return number.toString();
                  });
                   $(comment).text(text);

                 });

              }
            
         
            });
            //  end reply


              // like
             
                $('.photo-like-link').click(function(event){
                event.preventDefault();
                    var id=$(this).attr('id').replace('like-','');

                    var url='{{route('like-photo')}}'
 
             
                $.ajax({
                  method:'POST',
                  url:url,
                  _token:token,
                  data:{
                    like:1,
                    article_id:id,
                    _token:token

                  }
                 }).done(function(msg){
              var like='#like-count-'+id;
                var text=$(like).text();
                text=text.replace(/^-*\d*/g,function(number){
                  number=parseInt(number);


                       if($("#like-"+id+">i").hasClass('fa-heart')){
                 $("#like-"+id+">i").removeClass('fa-heart');
                 $("#like-"+id+">i").addClass('fa-heart-o');
                    number--;

              }else {
                 $("#like-"+id+">i").removeClass('fa-heart-o');
                  $("#like-"+id+">i").addClass('fa-heart');
                    number++;

              }

                    return number;
                  });
                   $(like).text(text);

                 });
                });
            $(".photo-like-link").click(function(){
             var id=$(this).attr('id').replace('like-','');



        
            })
// end like

            // upload image
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
// enlarge img ajax

      $('.photo').on('click', function(event) {
        event.preventDefault();
        var id=$(this).attr('id').replace('photo-','');
            $.ajax({
                  method:'GET',
                  url:'{{route('watch-photo')}}'+'/'+id,
                  data:{
                    url:url

                  }
                 }).done(function(msg){
                  console.log(msg);
                    var article=msg[0];
                 $('.enlargeImageModalSource').attr('src', article.image);
                 $('.ModalTitle').text(article.title);
                 $('.ModalDescription').text(article.description);
                 $('.ModalContent').text(article.content);
                 $('.ModalAuthor').text(msg[1]);


                 $('#enlargeImageModal').modal('show');



                 });


      
    });

// end large
// friend ajax
$('.friend-btn').click(function(event){
  var that=$(this);
  event.preventDefault();
  var account=$(this).attr('id').replace('friend-btn-','');
  $.ajax({
    method:'GET',
    url:'{{route('friend::send-invite')}}'+'/'+account,
  }).done(function(msg){
      that.text(msg);
  });
});
// end friend ajax




            </script>




{{--imgur  --}}
<script src="{{asset('js/imgur.min.js')}} "></script>
<script>
    var callback = function (res) {
        if (res.success === true) {
           $progress=document.getElementById('progressbar');
           $progress.style.width='100%';
           $progress.innerHTML='100% 傳輸完成';
         document.getElementById('imgsite').value=res.data.link;
      document.getElementById('submit').removeAttribute("disabled");
            
            console.log(res.data.link);
        }
    };

    new Imgur({
        clientid: '081f020139e558d',
        callback: callback
    });
    
    function uploadImg(){

      document.getElementById('progress').style.display='block';
    }
    
</script>
{{-- facebook --}}
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.9&appId=570657736656960";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

            @stop