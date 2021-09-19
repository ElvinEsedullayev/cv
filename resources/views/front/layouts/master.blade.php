<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Resume - Start Bootstrap Theme</title>
    @include('front\layouts\partials\head')
    @yield('header')
  </head>
  <body id="page-top">
    @include('front\layouts\partials\menu')
    <div class="container-fluid p-0">
      @yield('content')
    </div>
    @include('front\layouts\partials\footer')
    @yield('footer')
  </body>
</html>
