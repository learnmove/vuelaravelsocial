@extends('partials.layout')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/discuss-list.css')}} ">
@stop
@section('content')
        <!-- discuss -->
        <div class="container">
              <ul class="nav nav-pills">
  <li class="active"><a href="#">全部</a></li>
  <li><a href="#">閒聊</a></li>
  <li><a href="#">職場</a></li>
  <li><a href="#">外包</a></li>
  <li><a href="#">徵才</a></li>
  <li><a href="#">教學</a></li>
  <li><a href="#">技術</a></li>
  <li><a href="#">開班</a></li>
  <li><a href="#">家教</a></li>
  <li><a href="#">交易</a></li>
  <li><a href="#">合作</a></li>



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