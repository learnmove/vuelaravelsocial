@extends('partials.layout')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/styleblog.css')}}">
@stop
        <!-- content -->
@section('content')
        <div class="container"> 
        <form action="{{route('blog::post-css',['user_account'=>Auth::user()->account])}}" method="post" >
        {{csrf_field()}}
        
      <label>自訂css樣式表</label>
        <div class="form-gorup">
          <textarea name="css" rows="30" class="form-control">
            {{$css}}
          </textarea >
        </div>
  <label>回復最初的樣版</label>
        <div class="form-gorup">
         <input  type="radio" name="restore" value="0" checked> <span style="color:#fff">使用現在的</span><br>
           <input  type="radio" name="restore" value="1" > <span style="color:#fff">回復</span><br>
        </div>

        <button type="submit" class="btn btn-primary">修改</button>
        </form>
     

        </div>
        @stop
        <!-- jq -->
  @section('javascript')


  </script>
  @stop