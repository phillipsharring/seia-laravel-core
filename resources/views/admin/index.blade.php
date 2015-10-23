<?php $title = 'Admin'; ?>

@extends('layouts.admin')

@section('content')

  <ol class="breadcrumb">
    <li><a href="{{ route('index') }}">Home</a></li>
    <li class="active">Admin</li>
  </ol>

  <ul>
    <li><a href="{{ route('users.admin') }}">Users</a></li>
    <li><a href="{{ route('contents.admin') }}">Contents</a></li>
  </ul>

@stop
