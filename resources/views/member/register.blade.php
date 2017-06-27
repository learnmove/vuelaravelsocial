@extends('partials.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
@stop
@section('content')
        <!-- content -->
         <div class="self-container"> 
            <div class="top"> 
             註冊帳號
            <span class="sign-top">☺ </span>
            </div>
            @if(Session::has('errors'))
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}} </li>
                @endforeach
              </ul>
            </div>
            @endif
      
          <form action="{{route('register')}}" enctype="multipart/form-data"  method="post">
          {{csrf_field()}}
            

            <div class="form-group" >
            <label>帳號</label>
            <input  required type="text" placeholder="craigchang30248" class="form-control" maxlength="20" value="{{old('account')}}" name="account">
            </div>
        <div class="form-group" >
            <label>密碼</label>
            <input  type="password" value="{{old('password')}}"  placeholder="5位中英數字以上" class="form-control" maxlength="20" name="password">
            </div>

            <div class="avatar">
              <img src="  " id="img-upload">
<div class="image-avatar">大頭貼</div>
<input  type="file" id="imginput"   name="avatar" accept="image/jpeg,image/gif" id="">
            </div>
         <div class="form-group" >
            <label for="usr">信箱</label>
            <input  type="email" value="{{old('email')}}" class="form-control" placeholder="craigchang30248@gmail.com" maxlength="50" name="email">
            </div>
            <div class="form-group" >
            <label for="usr">學校/公司</label>
            <input  type="text" maxlength="30" value="{{old('company')}}"  placeholder="國立高雄應用科技大學|雄獅旅遊Lion Travel" class="form-control" maxlength="20" name="company">
            </div>
          <div class="form-group" >
            <label for="usr">年紀</label>
            <input  type="number" value="{{old('age')}}" min="1" class="form-control" placeholder="25" 
             name="age">
            </div>
           <div class="form-group" >
            <label for="usr">大名</label>
            <input  type="text" value="{{old('username')}}" class="form-control"   placeholder="張小豪/3個字" maxlength="3" name="username">
            </div>
                      <div class="form-group" >
            <label for="usr">設計師名稱</label>
            <input  type="text" value="{{old('designer')}}" placeholder="英文：Johhny/9個字 中文：麵包超人/7個字" class="form-control" maxlength="9" name="designer">
            </div>
             <div class="form-group" >
            <label for="usr">星座</label>
          <select name="zodiac"  class="selectpicker">
<option value="">星座</option>
<option value="牡羊座">牡羊座</option>
<option value="摩羯座">摩羯座</option>
<option value="雙子座　">雙子座</option>
<option value="巨蟹座">巨蟹座</option>
<option value="獅子座">獅子座</option>
<option value="處女座">處女座</option>
<option value="天秤座">天秤座</option>
<option value="天蠍座">天蠍座</option>
<option value="射手座">射手座</option>
<option value="金牛座">金牛座</option>
<option value="雙魚座">雙魚座</option>
<option value="水瓶座">水瓶座</option>

          </select>
            </div>
            <label> 居住地</label>
              <select class="selectpicker"  name="location">
<option value="">市區</option>
<option value="臺北市">臺北市</option>
<option value="新北市">新北市</option>
<option value="基隆市">基隆市</option>
<option value="桃園市">桃園市</option>
<option value="新竹縣">新竹縣</option>
<option value="新竹市">新竹市</option>
<option value="苗栗縣">苗栗縣</option>
<option value="臺中市">臺中市</option>
<option value="彰化縣">彰化縣</option>
<option value="南投縣">南投縣</option>
<option value="雲林縣">雲林縣</option>
<option value="嘉義縣">嘉義縣</option>
<option value="嘉義市">嘉義市</option>
<option value="臺南市">臺南市</option>
<option value=">高雄市">高雄市</option>
<option value="屏東縣">屏東縣</option>
<option value="澎湖縣">澎湖縣</option>
<option value="宜蘭縣">宜蘭縣</option>
<option value="花蓮縣">花蓮縣</option>
<option value="臺東縣">臺東縣</option>
<option value="金馬地區">金馬地區</option>
</select>
            <div class="radio">
              <label for="usr"><input  type="radio" name="gender">窩素男森<span class="boy">♂</span></label>
            </div>


           <div class="radio">
              <label for="usr"><input  type="radio" name="gender">窩素女森<span class="girl">♀</span> </label>
            </div>
            <button class="btn btn-primary" type="submit">來企註冊嘍!</button>
          </form>


        </div>
  
<!-- avatar -->
@stop
@section('javascript')
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


 