<?php $title = 'Edit Contents' ?>

@extends('layouts.admin')

@section('content')

  <ol class="breadcrumb">
    <li><a href="{{ route('index') }}">Home</a></li>
    <li><a href="{{ route('admin') }}">Admin</a></li>
    <li><a href="{{ route('contents.admin') }}">Contents Admin</a></li>
    <li class="active">Edit Contents</li>
  </ol>

  {!! Form::model($content, ['route' => ['contents.update', $content], 'method' => 'PUT', 'role' => 'form']) !!}

    @include('contents.form')

  {!! Form::close() !!}

@stop
