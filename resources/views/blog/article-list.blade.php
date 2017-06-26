@extends('blog.partials.layout')
@section('article-block')
  <div class="left-side box">
     @foreach( $articles as $article)   
      @if($article->status) 
        @if(!$article->secret)
      <div class="article border article-preference">
                  <div class="article-top">

                    <div class=" article-title  ">  
                        <a class="article-title" style="text-decoration: none;" href="
                   {{route('blog::article',[$user,$article->article_site   ])}}
                        ">{{$article->title}}</a>
                    </div>
                    <div class="date">{{$article->created_at->format('Y-m-d')}}</div>
                  </div>
                  <div class="article-short-content">
          
               
                    <img class="content-img" src="{{asset('user/blog_article_image/'.$user.'/'.$article->image)}} 
                    ">
                {{$article->content}}

                  </div>
                  <a class="readmore" href="  {{route('blog::article',[$user,$article->article_site   ])}}">(More......)</a>
                  
                  <div class="post-info">
                    <span class="post-time">06:16 AM</span>
                    <span class="reply-count">Reply(37)</span>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <span class="photo-watch-count">{{$article->watch_count}}</span>
                  </div>
                </div>  
              @else
                <div class="article border article-preference">
                  <div class="article-top">

                    <div class=" article-title  ">  
                        <a href="
                   {{route('blog::article',[$user,
              crypt($article->id,123).$article->id*5    ])}}
                        ">{{$article->title}}</a>
                    </div>
                    <div class="date">{{$article->created_at->format('Y-m-d')}}</div>
                  </div>
                  <div class="article-short-content">
          
               <span>密碼提示：</span><span>{{$article->hint}} </span>
              <div>
                 <input type="text" name="">
               <input type="submit" on class="btn btn-primary btn-xs" name="">

              </div>

                  </div>
                 
                  
                  <div class="post-info">
                    <span class="post-time">06:16 AM</span>
                    <span class="reply-count">Reply(37)</span>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <span class="photo-watch-count">{{$article->watch_count}}</span>
                  </div>
                </div>  
              @endif

                @endif
                @endforeach
              </div>
              {{ $articles->links() }}

@stop