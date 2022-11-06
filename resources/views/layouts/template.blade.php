<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/index.css">
  @vite('resources/css/app.css')
</head>
<body>
    @include('includes.header')
    <div class="text-center pt-5">
      @yield('content')
    </div>
</body>
</html>