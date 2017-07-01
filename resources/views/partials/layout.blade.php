<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=400px;initial-scale=0.5">
<meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8">
    <title>@yield("title","戀戀風塵 L' avion ") </title>
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    @yield('css')
  </head>
  <body>
  <!-- navigation -->
  @include('partials.navigation')
  <!-- content -->
  @yield('content')
  <!-- jq -->


  <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  @yield('javascript')
  
  </body>
  </html>