@extends('partials.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css/my-friends.css')}}">
@stop
@section('content')
        <!-- content -->
        <div class="self-container "> 
        <ul class="nav nav-tabs">
  <li class=""><a href="{{route('friend::user-friend',['user_account'=>Auth::user()->account])}} ">好友名單</a></li>
  <li class="active"><a href="#" >朋友邀情</a></li>

</ul>
            <div class="top"> 
             邀請名單
            <span class="friend-count">({{Auth::user()->friendRequests()->count()}})  </span>
            </div>
            <div class="list ">  
            <table class="table table-hover">
            <thead>
              <tr>
                <th>暱稱</th>
                <th>狀態</th>

              </tr>
            </thead>
            <tbody class=""> 
            @foreach($requests as $request)
             <tr>
               <td class="friend-block">
                 <a href="">
                     <div class="avatar"> 

                 <img class="img-circle" src="{{asset('user/avatars/'.$request->avatar)}}">
                 </div>
                 <div class="friend-name">  
                 {{$request->designer}}
                 </div>
                   
                 </a>
               
               </td>
               <td class="status"> 
               
                <div class="status-content">  
               <a class="btn btn-primary accept_btn" href="#" id="friend-{{$request->id}}"> 接受好友</a>
                

                </div>
              </td>
             </tr>
             @endforeach
            
             
            </tbody>
             </table>
            </div>


        </div>
             <button type="button" class="btn btn-primary btn-lg post-button" data-toggle="modal" data-target=".bs-example-modal-lg">狀態</button>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <form>
                <div class="form-group">
                
                  <input placeholder="48字內" maxlength="48" rows="1" name="title" id="" class="post-title form-control">  </div>
                  <button class="btn btn-primary">  送出</button>
                </form>
              </div>
            </div>
          </div>
@stop
@section('javascript')
<script type="text/javascript">

// accept friend
  $('.accept_btn').click(function(event){
  var that=$(this);
  event.preventDefault();
  var id=$(this).attr('id').replace('friend-','');
  $.ajax({
    method:'GET',
    url:'{{route('friend::accept')}}'+'/'+id,
  }).done(function(msg){
      that.text(msg);
  });
});
// end accept friend
</script>

@stop