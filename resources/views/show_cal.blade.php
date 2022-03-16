
@extends('adminlte::page')

@section('title', 'Calendars')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
  <h2>{{ $calendar->title; }}</h2>
  <div>
    <p>{{ $calendar->start_at; }}</p>
    <p>{{ $calendar->end_at; }}</p>
  </div>
@stop