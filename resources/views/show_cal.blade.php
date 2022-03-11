
@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
  <h2>{{ $calendars->title; }}</h2>
  <div><p>{{ $calendars->start_at; }}</p></div>
@stop