<?php $title = 'Create Content'; ?>

@extends('layouts.admin')

@section('content')

  <ol class="breadcrumb">
    <li><a href="{{ route('index') }}">Home</a></li>
    <li><a href="{{ route('admin') }}">Admin</a></li>
    <li><a href="{{ route('contents.admin') }}">Contents Admin</a></li>
    <li class="active">Create Content</li>
  </ol>

  {!! Form::open(['route' => 'contents.store', 'role' => 'form']) !!}

    @include('contents.form')

  {!! Form::close() !!}

@stop
