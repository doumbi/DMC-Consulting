<!DOCTYPE html>
<html lang="en">
  <head>
   <title>@yield('title')</title>
    <link rel="icon" href="{{asset('images/favicon.png')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Title Page-->
    @include('site.share.style')
</head>
<body>
    <div class="wrap">
        @include('site.share.topbar')
    </div>
    @include('site.share.navbar')
    <div>
        @yield('content')
    </div>

     @include('site.share.footer')

    @include('site.share.loader')

     @include('site.share.script')
</body>
</html>
<!-- end document-->
