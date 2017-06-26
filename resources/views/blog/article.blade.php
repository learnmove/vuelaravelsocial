@extends('blog.partials.layout')
   @section('children-css')
   <link rel="stylesheet" type="text/css" href="{{asset('css/myblog-article.css')}} ">
   @stop

@section('article-block')
              <div class="left-side box">
                
                @if(!$article->secret|Session::get($article->title)==true|Auth::user()->account==$user)
                   <div class="article border article-preference">
                  <div class="article-top">
                    <div class=" article-title  ">
              {{$article->title}}

                    </div>
                    <div class="date">{{$article->created_at->format('Y-m-d')}}</div>
                  </div>
                  <div class="article-short-content">
                    <img class="content-img" src="{{asset('user/blog_article_image/'.$user.'/'.$article->image)}}
                    ">
              {{$article->content}}
                  </div>
                  <div class="post-info">
                    <span class="post-time">{{$article->created_at->format('g:i A')}}</span>
                    <span class="reply-count">Reply(37)</span>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <span class="photo-watch-count">{{$article->watch_count}}</span>
                  </div>
             
                </div>  

                @else
                   <div class="article border article-preference">
                  <div class="article-top">
                    <div class=" article-title  ">
              {{$article->title}}

                    </div>
                    <div class="date">{{$article->created_at->format('Y-m-d')}}</div>
                  </div>
   
                     <span>密碼提示：</span><span>{{$article->hint}} </span>
                        <div>
                        <form action="{{route('blog::decrypt',[$user,$article->id])}}" method="get" >
                       
                            <input type="text" name="decrypt">
                         <input type="submit" class="btn btn-primary btn-xs" value="解密">
                        </form>

                
                  </div>
                  <div class="post-info">
                    <span class="post-time">{{$article->created_at->format('g:i A')}}</span>
                    <span class="reply-count">Reply(37)</span>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <span class="photo-watch-count">{{$article->watch_count}}</span>
                  </div>
             
                </div> 

                  


                @endif




              </div>
                  @if(!$article->secret|Session::get($article->title)==true)
                   <div class="article-comment-block article-preference">
                    <div class="article-commnet-items">
                      <div class="article-commnet-item">
                        <div class="article-commnet-avatar">
                          <img class="img-circle" src="https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/14184568_1110549169035631_23306978654507606_n.jpg?oh=f132424f61fde3648aa47a287c52b2f4&oe=59E9F754">
                        </div>
                        <div class="article-commnet-info">
                        <div class="article-commnet-user-name">
張哥
                        </div>
                        <div class="article-commnet-content">
                       此的遙遠，這一年３６５天我跟自己同年的
                       此的遙遠，這一年３６５天我跟自己同年的

                       此的遙遠，這一年３６５天我跟自己同年的
                       此的遙遠，這一年３６５天我跟自己同年的

                        </div>
                          
                        </div>
                      </div>
         <div class="article-commnet-item">
                        <div class="article-commnet-avatar">
                          <img class="img-circle" src="https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/14184568_1110549169035631_23306978654507606_n.jpg?oh=f132424f61fde3648aa47a287c52b2f4&oe=59E9F754">
                        </div>
                        <div class="article-commnet-info">
                        <div class="article-commnet-user-name">
                            張哥 
                        </div>
                        <div class="article-commnet-content">
                       此的遙遠，這一年３６５天我跟自己同年的
                       此的遙遠，這一年３６５天我跟自己同年的

                       此的遙遠，這一年３６５天我跟自己同年的
                       此的遙遠，這一年３６５天我跟自己同年的
                       
                        </div>
                          
                        </div>
                      </div>

                    </div>

                </div>
           
                          <button type="button" class="btn btn-primary reply-btn btn-lg " data-toggle="modal" data-target=".reply-target">關心</button>
        <div class="modal fade reply-target" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <form>
                  <div class="form-group">
                    <label for="comment"><i class="fa fa-heart" aria-hidden="true"></i>
關心他/她</label>
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


          @if(Auth::check()&&Auth::user()->account==$user)
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
          @endif


          @endif
@stop