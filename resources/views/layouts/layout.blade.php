<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ $title or 'Title' }}</title>
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">
    @yield('stylesheets')
  </head>
  <body>
    <h1>{{ $title or 'Title' }}</h1>
    <p>
      Part of <a href="{{ route('index') }}">SEIA Laravel Core</a>,
      an <a href="https://github.com/philsown/seia-laravel-core">implementation</a> of <em><a href="http://philip.greenspun.com/seia/">Software Engineering for Internet Applications</a></em>
      in <a href="http://laravel.com/docs/5.1/">Laravel 5.1</a>.
    </p>
    <hr>
    @yield('content')
    <hr>
    <address><a href="http://phillipharrington.com">Phillip Harrington</a></address>
  </body>
  <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
  @yield('scripts')
</html>
