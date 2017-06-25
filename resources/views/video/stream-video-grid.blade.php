@extends('partials.layout')
@section('css')

    <link rel="stylesheet" href=" {{asset('css/stream-video-grid.css')}}">
@stop 
@section('content')
<!-- stream grid -->
  <!-- Load Facebook SDK for JavaScript -->

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<!--  -->
        <div class="self-container">
     
        <div class="videos">
          
          <div class="video-item">
           <div class="video-post-user">
           </div>
            <div class="video-title"></div>
            <div class="video-description"></div>
            <div class="video-block">
              <div class="fb-video" 
                data-autoplay="false"
                data-href="https://www.facebook.com/YuhsuanX/videos/1535575983127603/" 
                data-show-text="true">
    

            </div>
          </div>
        </div>



        <!-- post video -->
                 
       
        </div>
            <button type="button" class="btn btn-primary btn-lg post-button" data-toggle="modal" data-target=".bs-example-modal-lg">發表直播</button>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <form>
                   
                      <div class="form-group">
                        <label for="comment">fb直播網址</label>
                        <input type="text" class="form-control" name="description">
                      </div>
                     
                      

                      <button class="btn btn-primary">  送出</button>
                    </form>
                  </div>
                </div>
              </div>
</div>
@stop