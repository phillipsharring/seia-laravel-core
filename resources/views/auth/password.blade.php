<?php $title = 'Forgot Password?' ?>

@extends('layouts.layout')

@section('content')

  <ol class="breadcrumb">
    <li><a href="{{ route('index') }}">Home</a></li>
    <li class="active">Forgot Password?</li>
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

    <div class="form-submit">
      {!! Form::submit('Send Reset Password Link', ['class' => 'btn btn-primary']) !!}
    </div>

  {!! Form::close() !!}

@stop
