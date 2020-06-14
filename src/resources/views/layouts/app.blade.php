<html>
  <haed>
    <title>@yield('title')</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('head')
  </head>

  <body>
    <div class='container'>
      @yield('content')
    </div>
  </body>
</html>

