<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ $title or 'Title' }}</title>
    <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}">
    @yield('stylesheets')
  </head>
  <body class="admin">
    <h1>{{ $title or 'Title' }}</h1>
    <hr>
    @if($errors->any())
      <div class="alert alert-danger" role="alert">
        Please correct the errors below.
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </div>
    @endif
    @yield('content')
    <hr>
    <address><a href="http://phillipharrington.com">Phillip Harrington</a></address>
  </body>
  <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
  @yield('scripts')
</html>
