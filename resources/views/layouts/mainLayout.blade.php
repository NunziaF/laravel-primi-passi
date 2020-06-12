<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - Primi Passi</title>

        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js"></script>

    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="header">
            @include('components.header')
          </div>
        </div>
        <div class="row">
          <div class="content">
              @include('components.navBar')
              @yield('content')
          </div>
        </div>
        <div class="row">
          <div class="footer">
            @include('components.footer')
          </div>
        </div>
      </div>
    </body>
</html>
