
@extends('adminlte::page')

@section('title', 'Events')

@section('content_header')
    <h1>Events</h1>
@stop

@section('content')
  <h2>{{ $calendars->title; }}</h2>
  <div><p>{{ $calendars->start_at; }}</p></div>
@stop