@extends('partials.layout')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/styleblog.css')}}">
@stop
        <!-- content -->
@section('content')
        <div class="container"> 
        <form action="{{route('blog::custom-edit',['user',Auth::user()->account])}}" method="post" >
        {{csrf_field()}}
           <div class="banner">
          <div class="form-group">
            <label>最上面的照片(網址)</label>
            <input type="text" name="banner" id="" class="form-control" placeholder="http://i1054.photobucket.com/albums/s499/vadimzbanok/1327.jpg" ">
          </div>
          <div class="form-group">
            <label>日記主題</label>
            <input type="text" name="banner_title" id="" class="form-control" placeholder="豪豪的心情札記" value="">
          </div>
             <div class="form-group">
            <label>日記敘述</label>
            <input type="text" name="banner-text" id="" class="form-control" placeholder="不能說的都在這邊說" >
          </div>
        </div>

          <div class="banner">
          <div class="form-group">
            <label>網站名稱</label>
            <input type="text" name="title" id="" class="form-control" placeholder="心事小窩" >
          </div>

        </div>

         <div class="music">
          <div class="form-group">
            <label>音樂(網址)</label>
            <input type="text" name="music" id="" class="form-control" placeholder="http://xxx.mp3">
          </div>
 <div class="form-group">
            <label>音樂名稱</label>
            <input type="text" name="music_name" id="" class="form-control" placeholder="張均豪-你是我的眼">
          </div>
          
        </div>
          <div class="css">
            <label>日記樣式</label>

         <select name="css">
           <option value="azure">天空湛藍</option>
           <option value="black">質感黑</option>
           <option value="black-border">硬條黑</option>
           <option value="coffee">咖哩色</option>
           <option value="chung2">中二</option>
           <option value="coffee">咖啡色</option>
           <option value="coffee-orange">橘子咖啡</option>
           <option value="colour">彩虹天堂</option>
           <option value="dark">木炭黑</option>
           <option value="dark2">暴躁黑</option>
           <option value="dark3">心理黑</option>
           <option value="gray">人生灰</option>
           <option value="gray2">牆壁灰</option>
           <option value="gray3">杯子灰</option>

           <option value="green">資進黨綠</option>
           <option value="green2">大自然綠</option>
           <option value="green4">妻子綠</option>
           <option value="lightwhite">優質白</option>
           <option value="pink">浪漫粉</option>
           <option value="pink2">戀愛粉</option>
           <option value="pink3">泡泡粉</option>
           <option value="rose">薔葳色</option>
           <option value="san">珊瑚色</option>
           <option value="stone">石頭色</option>
           <option value="white">慘白</option>
           <option value="white">缺氧白</option>
           <option value="white-pink">粉白</option>
           <option value="yellow">太陽黃</option>
           <option value="yellow2">燦坤色</option>



         </select>
          
          
        </div>
        <button type="submit" class="btn btn-primary">修改</button>
        </form>
     

        </div>
        @stop
        <!-- jq -->
  