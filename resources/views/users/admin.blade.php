<?php $title = 'Users Admin' ?>

@extends('layouts.admin')

@section('content')

  <ol class="breadcrumb">
    <li><a href="{{ route('index') }}">Home</a></li>
    <li><a href="{{ route('admin') }}">Admin</a></li>
    <li class="active">Users Admin</li>
  </ol>

  <div class="pull-right">
    {!! Form::open(['route' => 'users.admin', 'method' => 'GET', 'class' => 'form-inline']) !!}
      <div class="form-group">
        {!! Form::label('q', 'Search:') !!}
        {!! Form::text('q', $q, ['class' => 'form-control']) !!}
        <button class="btn btn-default btn-sm">Search</button>
      </div>
    {!! Form::close() !!}
  </div>

  @if(!empty($q))

    <h2>Search Results: &nbsp;{{ $q }}</h2>

    @if(count($foundUsers))
      @include('users.table', ['users' => $foundUsers])
    @else
      <p>No results.</p>
    @endif

  @else

    @if(count($recentUsers))
      <h2>Recent Users</h2>
      @include('users.table', ['users' => $recentUsers])
    @endif

    @if(count($allUsers))
      <h2>All Users</h2>
      @include('users.table', ['users' => $allUsers])
      {!! $allUsers->render() !!}
    @endif

  @endif

@stop
