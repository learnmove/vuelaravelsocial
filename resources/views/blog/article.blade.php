@extends('blog.partials.layout')
   @section('children-css')
   <link rel="stylesheet" type="text/css" href="{{asset('css/myblog-article.css')}} ">
   @stop

@section('article-block')
              <div class="left-side box">
                
                @if(!$article->secret)
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

                @endif




              </div>
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
@stop