@extends('partials.layout')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/discuss-list.css')}} ">
@stop
@section('content')
        <!-- discuss -->
        <div class="container">
              <ul class="nav nav-pills">
              <li class=""><a  href="{{route('discuss::list')}} ">全部 </a></li>
              @foreach($tags as $tag)
  <li class=""><a  href="{{route('discuss::list',['category_id'=>$tag->id])}} ">{{$tag->tag_value}} </a></li>
 @endforeach


</ul>
       @yield('discuss-block')
        </div>

@stop
@section('javascript')
<!-- custom jq -->
<script>
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