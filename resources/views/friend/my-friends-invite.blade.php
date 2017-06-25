@extends('partials.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css/my-friends.css')}}">
@stop
@section('content')
        <!-- content -->
        <div class="self-container "> 
        <ul class="nav nav-tabs">
  <li class=""><a href="{{route('friend::my')}} ">好友名單</a></li>
  <li class="active"><a href="{{route('friend::invite')}}" >朋友邀情</a></li>

</ul>
            <div class="top"> 
             好友名單
            <span class="friend-count">(55)  </span>
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
             <tr>
               <td class="friend-block">
                 <a href="">
                     <div class="avatar"> 

                 <img class="img-circle" src=" https://scontent-tpe1-1.xx.fbcdn.net/v/t1.0-9/14184568_1110549169035631_23306978654507606_n.jpg?oh=f132424f61fde3648aa47a287c52b2f4&oe=59E9F754">
                 </div>
                 <div class="friend-name">  
                 張均豪李孟軒軒
                 </div>
                   
                 </a>
               
               </td>
               <td class="status"> 
               
                <div class="status-content">  
               <a class="btn btn-primary" href="#"> 接受好友</a>
                

                </div>
              </td>
             </tr>
            
             
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