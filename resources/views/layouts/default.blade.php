<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Five App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
    <script type="text/javascript" src="/js/app.js"></script>
  </head>
  <body>
    @include('layouts._header')

    <div class="container">
		<div class="col-md-offset-1 col-md-10">
	        @yield('content')
	        @include('layouts._footer')
      	</div>
    </div>
  </body>
</html>