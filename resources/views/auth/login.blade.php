<?php $title = 'Login' ?>

@extends('layouts.layout')

@section('content')

  <ol class="breadcrumb">
    <li><a href="{{ route('index') }}">Home</a></li>
    <li class="active">Login</li>
  </ol>

  {!! Form::open(['route' => 'login', 'role' => 'form']) !!}

    @if ($errors->has())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
          {{ $error }}<br>
        @endforeach
      </div>
    @endif

    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
      {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
      {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
      {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
      {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="checkbox">
      <label for="rememberme">
        {!! Form::checkbox('rememberme', 1, null, ['id' => 'rememberme']) !!}
        Remember Me
      </label>
    </div>

    <div class="form-submit">
      {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
    </div>

    <a href="{{ route('forgot') }}">Forgot Password?</a>

  {!! Form::close() !!}

@stop
