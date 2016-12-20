<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
  </head>

  <body>

    @yield('header');
    
    @yield('content');

		@yield('footer');

  </body>

</html>