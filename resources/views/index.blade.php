@extends('partials.layout')
        <!-- content -->
      @section('css')
          <link rel="stylesheet" type="text/css" href="{{asset('/css/index-content.css')}}">
          @stop
      @section('content')
        <div class="content">
          <div class="creator-block">
            <div class="columns">
              
              
                  <div class="article-work-item">
                <div class="photo-block">
                  <img class="photo" src="http://lorempixel.com/1920/1920/">
                  
                  <div class="about-count">
                    <div class="photo-like">
                      <i class="fa fa-heart" aria-hidden="true"></i>
                      <span class="photo-like-count">223</span>
                    </div>
                    <div class="watch-count-block">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                      <span class="photo-watch-count">55</span>
                    </div>
                  </div>
                </div>
                
                
                <div class="caption">
                  <div photo-title>天邊一朵雲</div>
                  <p class="photo-description text-overflow">Bootstrap example of User Comment Example usingtstra </p>
                  <div class="price-block"> <i class="fa fa-usd" aria-hidden="true"></i><span class="price"> 0</span></div>
                  <div class="hover-user-info">
                    <div class="user-info">
                      
                      <div class="user-avatar ">
                        
                        <img class="img-circle  avatar" src="{{asset('user/avatars/qwdqwd.jpg')}}">
                        
                      </div>
                      
                      <div class="user-name">字字字字字字字 </div>
                      
                      
                    </div>
                    <div class="user-info-2">
                      <div class="user-year "> 24歲</div>
                      <div class="user-address "> 高雄</div>
                      <div class="user-zodiac  "> 金牛座</div>
                
                    </div>
                    <div class="user-info-3">
                            <div class="user-company "> 國立高雄應用科技大學</div>
                    </div>
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
                    
                  </div>
                  <div class="short-comment-block">
                    <a href="#" class="message-count">8則留言</a>
                    <a href="#" class="share-count">34則分享</a>
                  </div>
                  <div class="function-action">
                    <ul>
                      <li>   <a class="photo-like-link" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>
                      like</a></li>
                      <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>
                      留言</a></li>
                      <li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>
                      分享</a></li>
                    </ul>
                  </div>
                  <div class="comment-block-wrap">
                    <div class="comment-block">
                      <div class="comments">
                        
                        
                        <div class="comment">
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
                              <img class="img-circle " src="  https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-1/p100x100/13445668_1185534944830429_6149632547090808033_n.jpg?oh=77610c17eff8a8e983637587183bf0de&oe=59DD6360">
                            </div>
                            <div class="comment-user-name"> 賴金旺 </div>
                            
                          </div>
                          <div class="comment-text">
                            張哥你這張好帥，晚上來我家
                            <span>50分鐘前</span>
                          </div>
                          <div class="comment-like-block">
                            <a href=" " class="comment-like">Like</a>
                            <a href="#" class="comment-like-link"><i class="fa fa-heart" aria-hidden="true"></i>
                              </a><span class="comment-like-count">3  </span>
                            </div>
                          </div>
                          
                          
                        </div>
                        
                      </div>
                    </div>
                    
                  </div>
                </div>      <div class="article-work-item">
                <div class="photo-block">
                  <img class="photo" src="http://lorempixel.com/1920/1920/">
                  
                  <div class="about-count">
                    <div class="photo-like">
                      <i class="fa fa-heart" aria-hidden="true"></i>
                      <span class="photo-like-count">223</span>
                    </div>
                    <div class="watch-count-block">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                      <span class="photo-watch-count">55</span>
                    </div>
                  </div>
                </div>
                
                
                <div class="caption">
                  <div photo-title>天邊一朵雲</div>
                  <p class="photo-description text-overflow">Bootstrap example of User Comment Example usingtstra </p>
                  <div class="price-block"> <i class="fa fa-usd" aria-hidden="true"></i><span class="price"> 0</span></div>
                  <div class="hover-user-info">
                    <div class="user-info">
                      
                      <div class="user-avatar ">
                        
                        <img class="img-circle  avatar" src="{{asset('user/avatars/qwdqwd.jpg')}}">
                        
                      </div>
                      
                      <div class="user-name">字字字字字字字 </div>
                      
                      
                    </div>
                    <div class="user-info-2">
                      <div class="user-year "> 24歲</div>
                      <div class="user-address "> 高雄</div>
                      <div class="user-zodiac  "> 金牛座</div>
                
                    </div>
                    <div class="user-info-3">
                            <div class="user-company "> 國立高雄應用科技大學</div>
                    </div>
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
                    
                  </div>
                  <div class="short-comment-block">
                    <a href="#" class="message-count">8則留言</a>
                    <a href="#" class="share-count">34則分享</a>
                  </div>
                  <div class="function-action">
                    <ul>
                      <li>   <a class="photo-like-link" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>
                      like</a></li>
                      <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>
                      留言</a></li>
                      <li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>
                      分享</a></li>
                    </ul>
                  </div>
                  <div class="comment-block-wrap">
                    <div class="comment-block">
                      <div class="comments">
                        
                        
                        <div class="comment">
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
                              <img class="img-circle " src="  https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-1/p100x100/13445668_1185534944830429_6149632547090808033_n.jpg?oh=77610c17eff8a8e983637587183bf0de&oe=59DD6360">
                            </div>
                            <div class="comment-user-name"> 賴金旺 </div>
                            
                          </div>
                          <div class="comment-text">
                            張哥你這張好帥，晚上來我家
                            <span>50分鐘前</span>
                          </div>
                          <div class="comment-like-block">
                            <a href=" " class="comment-like">Like</a>
                            <a href="#" class="comment-like-link"><i class="fa fa-heart" aria-hidden="true"></i>
                              </a><span class="comment-like-count">3  </span>
                            </div>
                          </div>
                          
                          
                        </div>
                        
                      </div>
                    </div>
                    
                  </div>
                </div>      <div class="article-work-item">
                <div class="photo-block">
                  <img class="photo" src="http://lorempixel.com/1920/1920/">
                  
                  <div class="about-count">
                    <div class="photo-like">
                      <i class="fa fa-heart" aria-hidden="true"></i>
                      <span class="photo-like-count">223</span>
                    </div>
                    <div class="watch-count-block">
                      <i class="fa fa-eye" aria-hidden="true"></i>
                      <span class="photo-watch-count">55</span>
                    </div>
                  </div>
                </div>
                
                
                <div class="caption">
                  <div photo-title>天邊一朵雲</div>
                  <p class="photo-description text-overflow">Bootstrap example of User Comment Example usingtstra </p>
                  <div class="price-block"> <i class="fa fa-usd" aria-hidden="true"></i><span class="price"> 0</span></div>
                  <div class="hover-user-info">
                    <div class="user-info">
                      
                      <div class="user-avatar ">
                        
                        <img class="img-circle  avatar" src="{{asset('user/avatars/qwdqwd.jpg')}}">
                        
                      </div>
                      
                      <div class="user-name">字字字字字字字 </div>
                      
                      
                    </div>
                    <div class="user-info-2">
                      <div class="user-year "> 24歲</div>
                      <div class="user-address "> 高雄</div>
                      <div class="user-zodiac  "> 金牛座</div>
                
                    </div>
                    <div class="user-info-3">
                            <div class="user-company "> 國立高雄應用科技大學</div>
                    </div>
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
                    
                  </div>
                  <div class="short-comment-block">
                    <a href="#" class="message-count">8則留言</a>
                    <a href="#" class="share-count">34則分享</a>
                  </div>
                  <div class="function-action">
                    <ul>
                      <li>   <a class="photo-like-link" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>
                      like</a></li>
                      <li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>
                      留言</a></li>
                      <li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>
                      分享</a></li>
                    </ul>
                  </div>
                  <div class="comment-block-wrap">
                    <div class="comment-block">
                      <div class="comments">
                        
                        
                        <div class="comment">
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
                              <img class="img-circle " src="  https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-1/p100x100/13445668_1185534944830429_6149632547090808033_n.jpg?oh=77610c17eff8a8e983637587183bf0de&oe=59DD6360">
                            </div>
                            <div class="comment-user-name"> 賴金旺 </div>
                            
                          </div>
                          <div class="comment-text">
                            張哥你這張好帥，晚上來我家
                            <span>50分鐘前</span>
                          </div>
                          <div class="comment-like-block">
                            <a href=" " class="comment-like">Like</a>
                            <a href="#" class="comment-like-link"><i class="fa fa-heart" aria-hidden="true"></i>
                              </a><span class="comment-like-count">3  </span>
                            </div>
                          </div>
                          
                          
                        </div>
                        
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>

            </div>
            
            <!-- 發表作品 -->
            <!--
            -->
            <button type="button" class="btn btn-primary btn-lg post-button" data-toggle="modal" data-target=".bs-example-modal-lg">發表作品</button>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <form>
                    <div class="form-group">
                      <label for="post-title">作品名稱
                      </label>
                      <input type="text" maxlength="8" placeholder="8字以內" class="form-control" name="" id="" class="post-title"></div>
                      <div class="form-group">
                        <label for="comment">作品簡述</label>
                        <textarea type="text" max class="form-control"  name="description" maxlength="36" placeholder="每行最多12個字/36字內"></textarea>
                      </div>
                    
                      <div class="form-group">
                        <label for="comment">作品故事</label>
                        <textarea class="form-control" name="story" rows="5" id="comment" placeholder="三千字以內" maxlength="3000"></textarea>
                      </div>
                      <img src="  " id="img-upload">
                      <input type="file" id="imginput" name="image" accept="image/jpeg,image/gif" id="">
                         <div class="form-group">
                        <label for="comment" maxlength="10">作品價格</label>
                        <input type="number" placeholder="無價請輸入0" class="form-control" name="price"><span> 台幣</span>
                      </div>
                      <button class="btn btn-primary">  送出</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @stop
            <!-- jq -->
            @section('javascript')
            <!--  index content -->
            <script type="text/javascript" >
            var isOpen=false;
            $(".message-count").click(function(event){
            event.preventDefault();
            isOpen=!isOpen;
            if(isOpen){
            $(".comment-block-wrap").css("display","block");
            }else if(isOpen==false){
            $(".comment-block-wrap").css("display","none");
            }
            });
            $(".photo-like-link").click(function(){
            $(".fa-heart-o").removeClass('fa-heart-o');
            })
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
            </script>
            @stop