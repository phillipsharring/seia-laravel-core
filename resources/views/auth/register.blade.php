<?php $title = 'Register' ?>

@extends('layouts.layout')

@section('content')

  <ol class="breadcrumb">
    <li><a href="{{ route('index') }}">Home</a></li>
    <li class="active">Register</li>
  </ol>

  {!! Form::open(['url' => '/auth/register', 'role' => 'form']) !!}

    <div class="form-group">
      {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
      {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
      {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('password_confirmation', 'Confirm Password:', ['class' => 'control-label']) !!}
      {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>

    <div class="form-submit">
      {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
    </div>

  {!! Form::close() !!}
@stop
