@extends('partials.layout')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/discuss-list.css')}} ">
 <link href="{{asset('css/imgur.min.css')}}" rel="stylesheet" media="screen">
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
{{-- imgur --}}

<script src="{{asset('js/imgur.min.js')}} "></script>
<script>
    var callback = function (res) {
        if (res.success === true) {
           $progress=document.getElementById('progressbar');
           $progress.style.width='100%';
           $progress.innerHTML='100% 傳輸完成';
         document.getElementById('imgsite').value=res.data.link;

            console.log(res.data.link);
        }
    };

    new Imgur({
        clientid: '081f020139e558d',
        callback: callback
    });
    document.getElementById("imginput").onclick=
    function uploadImg(){
      document.getElementById('progress').style.display='block';
    }
    
</script>
@stop