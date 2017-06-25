@extends('discuss.partials.layout')
@section('css')

    <link rel="stylesheet"  href="{{asset('css/discuss-content.css')}}">
@stop
@section('discuss-block')

      <div class="article-block">
        <div class="self-container">
          <div class="article-top">
            <div class="article-title">

            R:父母離婚
            </div>
            <div class="article-author-block">
            <span>作者:</span>
            <span class="article-time">
            張先生
              
            </span>
            </div>
            <div class="article-time-block">
            <span>時間:</span>
            <span class="article-time">
            2017-06-18 03:03:43
              
            </span>
            </div>

          </div>

          <div class="article-content">
         <br>國民黨主席洪秀柱確定6月底提前請辭，國民黨主席當選人吳敦義今天對此表示，「那是
         <br>她的決定」、「反正交接日期是8月20號」；而國民黨現金不足，7月恐怕發不出薪水給黨
         <br>工，吳敦義說，洪秀柱「不能撒手不管，我想她應該知道怎麼樣負責任。」
         <br>針對新任中央委員選舉爭議，吳敦義指出，依照黨章規定，要提早兩個月公告黨代表大會
      
            
          </div>
          <div class="article-comment-block">
            <div class="comment">

            <div class="wrap-comment-user">

                <div class="comment-avatar">
                <img class="img-responsive img-circle" src="{{asset('image/avatar.png')}} ">
                </div>

                <div class="comment-name-block">

              <div class="comment-name">
                張先生
              </div>
              <img class="thumb" src="{{asset('image/thumb.png')}} ">

              </div>

              <div class="comment-content">說，洪秀柱「不能撒說，洪秀柱「不能撒手不管，我想她應該知道怎手不管，我想她應該知道怎說，洪秀柱「不能撒說，洪秀柱「不能撒手不管，
              </div>

            </div>
                          <div class="comment-time">
                2017-06-18 03:03:43
              </div>
            </div>
            

          </div>
<form class="form-fixed">
  <div class="form-group">
    <label for="exampleInputEmail1">評論</label>
    <input type="text" class="form-control" placeholder="輸入文字">
  </div>
  <button class="btn btn-primary">送出</button>
</form>
@stop