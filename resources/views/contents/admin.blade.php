<?php $title = 'Contents Admin'; ?>

@extends('layouts.admin')

@section('content')

  <ol class="breadcrumb">
    <li><a href="{{ route('index') }}">Home</a></li>
    <li><a href="{{ route('admin') }}">Admin</a></li>
    <li class="active">Contents Admin</li>
  </ol>

  <div class="pull-right">
    {!! Form::open(['route' => 'contents.admin', 'method' => 'GET', 'class' => 'form-inline']) !!}
    <div class="form-group">
      {!! Form::label('q', 'Search:') !!}
      {!! Form::text('q', $q, ['class' => 'form-control']) !!}
      <button class="btn btn-default btn-sm">Search</button>
    </div>
    {!! Form::close() !!}
  </div>

  @if(!empty($q))

    <h2>Search Results: &nbsp;{{ $q }}</h2>

    @if(count($foundContents))
      @include('contents.table', ['contents' => $foundContents])
    @else
      <p>No results.</p>
    @endif

  @else

    @if(count($contents))
      <h2>All Content</h2>
      <a href="{{ route('contents.create') }}">Create Content</a>
      @include('contents.table', ['contents' => $contents])
      {!! $contents->render() !!}
    @endif

  @endif

@stop
