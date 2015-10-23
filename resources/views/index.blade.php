@extends('layouts.layout')

@section('content')

  <p>Welcome.</p>

  @if(!\Auth::check())
    <p><a href="{{ route('login') }}">Login</a></p>
  @else
    <p><a href="{{ route('logout') }}">Logout</a></p>
  @endif

@endsection
