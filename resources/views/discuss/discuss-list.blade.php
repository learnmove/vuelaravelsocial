@extends('discuss.partials.layout')

@section('discuss-block')
           <div class="discuss-block">
            <div class="discuss-items">
            @foreach($articles as $article)  

            <div class="discuss-item">
              <div class="discuss-category">
                <div class="category">{{$article->tag->first()->tag_value}} </div>
                <div class="reply-count"><p>{{count($article->replies)}} </p></div>

              </div>
              <div class="discuss-title-block">
                <div class="discuss-title ">
                  <a href="{{route('discuss::article',['id'=>$article->id]) }} ">{{$article->title}}</a>
                </div>
                <div class="author-info">
                <span class="author-address">{{$article->user->location}} </span>
                     <span class="author-account">{{$article->user->designer}}</span>
              <span class="discuss-date">{{$article->created_at->format('m/d')}} </span>

                </div>
             

              </div>
         
            </div>   
            @endforeach  
            </div>
            {{$articles->links()}}
            <!--發表文章
 -->
 <button type="button" class="btn btn-primary btn-lg post-button" data-toggle="modal" data-target=".bs-example-modal-lg">發表文章</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form action={{route('discuss::post-article')}} method="post" >  
{{csrf_field()}}
    <div class="form-group">
    <label for="post-title" >標題
      </label>
      <input type="text" maxlength="50" name="title" id="" class="post-title">
      </div>
     <div class="form-group">
  <label for="comment" >發表內容:</label>
  <textarea id="content" class="form-control" rows="5" name="content" maxlength="3000" id="comment"></textarea>分類：
  <select name="category">
  @foreach($tags as $tag)
  <option selected="selected"   value="{{$tag->id}}">{{$tag->tag_value}} </option>
@endforeach


</select>
</div>
<img src="  " id="img-upload">
<input  type="file" id="imginput" class="dropzone" name="" name="image" accept="image/jpeg,image/gif" id="">
<input type="hidden" id="imgsite" name="image" value="" >
<div id="progress" style="display: none;" class="progress">
    <div id="progressbar" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:50%;">
      50%
    </div>
  </div>
<button  class="btn btn-primary submit-btn">  送出</button>
      </form>
    </div>
  </div>
</div>
            </div>
            

@stop