<?php $title = 'Reset Password' ?>

@extends('layouts.layout')

@section('content')

  <ol class="breadcrumb">
    <li><a href="{{ route('index') }}">Home</a></li>
    <li class="active">Reset Password</li>
  </ol>

  {!! Form::open(['route' => 'forgot-post', 'role' => 'form']) !!}

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

    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
      {!! Form::label('password_confirmation', 'Confirm Password:', ['class' => 'control-label']) !!}
      {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>

    <div class="form-submit">
      {!! Form::submit('Reset Password', ['class' => 'btn btn-primary']) !!}
    </div>

  {!! Form::close() !!}

@stop
