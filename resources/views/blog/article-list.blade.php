@extends('blog.partials.layout')
@section('article-block')
  <div class="left-side box">
     @foreach( $articles as $article)   
      @if($article->status) 
        
        @if(!$article->secret||$article->secret&&Auth::check()&&Auth::user()->account==$user)
      <div class="article border article-preference">
                  <div class="article-top">

                    <div class=" article-title  ">  
                        <a  href="
                   {{route('blog::article',[$user,$article->article_site   ])}}
                        ">{{$article->title}}</a>
                    </div>
                    <div class="date">{{$article->created_at->format('Y-m-d')}}</div>
                  </div>
                  <div class="article-short-content">
          
              
                   @if(asset('/user/blog_article_image/'.$user.'/'.$article->image))
                    <img class="content-img" src="{{asset('user/blog_article_image/'.$user.'/'.$article->image)}}
                    ">
                  @endif
                {!!$article->content!!}
         
                
                  </div>
                  <a class="readmore" href="  {{route('blog::article',[$user,$article->article_site   ])}}">(More......)</a>
                  <div class="post-info">
                    <span class="post-time">06:16 AM</span>
                    <span class="reply-count">回覆({{count($article->replies)}} )</span>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <span class="photo-watch-count">{{$article->watch_count}}</span>
                  </div>
                </div>  
              @else
                <div class="article border article-preference">
                  <div class="article-top">

                    <div class=" article-title  ">  
                              <i class="fa fa-lock" style="color:yellow;" aria-hidden="true"></i>
{{$article->title}}</a>
                    </div>
                    <div class="date">{{$article->created_at->format('Y-m-d')}}</div>
                  </div>
                  <div class="article-short-content">
          
               <span>密碼提示：</span><span>{{$article->hint}} </span>
              <div>
              <form action="{{route('blog::decrypt',[$user,$article->id])}}" method="get" >
             
                  <input type="text" name="decrypt">
               <input type="submit" class="btn btn-primary btn-xs" value="解密">
              </form>
                

              </div>

                  </div>
                 
                  
                  <div class="post-info">
                    <span class="post-time">06:16 AM</span>
                    <span class="reply-count">Reply(37)

                  
                    </span>
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    <span class="photo-watch-count">{{$article->watch_count}}</span>
                  </div>
                </div>  
              @endif

                @endif
                @endforeach
              </div>

              @if(Auth::check()&&Auth::user()->account==$user)
                    <button type="button" class="btn btn-primary btn-lg post-button" data-toggle="modal" data-target=".bs-example-modal-lg">寫日記</button>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <form method="post" action="{{route('blog::post_article',[$user])}} " enctype="multipart/form-data">
              {{csrf_field()}}
                <div class="form-group">
                  <label for="post-title">日記標題
                  </label>
                  <input type="text"  placeholder="標題16個字以內" maxlength="16" name="title" id="" class="post-title form-control" value="{{old('title')}}"></div>
                  
                  <div class="form-group">
                    <label for="comment">日記內容</label>
                    <textarea class="my-textarea"  maxlength="2000" 
                    style="color:#989898"
                    placeholder="內容2000個字以內"
                    name="content" rows="" id="comment"  wrap="hard">{{old('content')}}</textarea>
                    <!-- cols="23" -->
                  </div>
                  <img src="  " id="img-upload">
                  <label>選一張有記念性的圖片</label>
                  <input type="file" id="imginput" name="image" accept="image/jpeg,image/gif" id="">
                   <div class="form-group">
                  <label for="post-title">密碼提示：(不設定保持空白)
                  </label>
                  <input type="text" placeholder="如果你要設定給某人看給他提示" maxlength="16" name="hint" id="" class="post-title form-control" value="{{old('hint')}}"></div>
                   <div class="form-group">
                  <label for="post-title">密碼(不設定保持空白)
                  </label>
                  <input type="text" placeholder="中英文都可以" maxlength="16" name="secret" id="" class="post-title form-control" value="{{old('secret')}}"></div>
                  <div class="form-group">
                  <label for="post-title">未來發佈(不設定保持空白)
                  </label>
                  <input style="color:#989898" type="datetime-local" name="bdaytime"></div>
                  
                  <button class="btn btn-primary">  送出</button>
                </form>
              </div>
            </div>
          </div>
          @endif
              {{ $articles->links() }}

@stop