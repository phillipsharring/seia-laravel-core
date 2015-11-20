<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{ $title or 'Title' }}</title>
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ elixir('css/app.css') }}">
    @yield('stylesheets')
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <script type="text/javascript">
      var baseUrl = '{{ url() }}';
      @yield('header-scripts')
    </script>
    <!--[if lt IE 9]><script type="text/javascript" src="{{ asset('js/html5shiv.min.js') }}"></script><![endif]-->
    <!--[if lt IE 9]><script type="text/javascript" src="{{ asset('js/respond.min.js') }}"></script><![endif]-->
  </head>
  <body>
    <h1>{{ $title or 'Title' }}</h1>
    <p>
      Part of <a href="{{ route('index') }}">SEIA Laravel Core</a>,
      an <a href="https://github.com/philsown/seia-laravel-core">implementation</a> of <em><a href="http://philip.greenspun.com/seia/">Software Engineering for Internet Applications</a></em>
      in <a href="http://laravel.com/docs/5.1/">Laravel 5.1</a>.
    </p>
    <hr>
    @if (Session::has('message'))
      <div class="alert alert-info in fade">
        {{ Session::pull('message') }}
      </div>
    @endif

    @yield('content')
    <hr>
    <address><a href="http://phillipharrington.com">Phillip Harrington</a></address>

    @yield('modal')
    <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
    @yield('inline-scripts')

  </body>
</html>
