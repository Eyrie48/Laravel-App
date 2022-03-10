
@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>To Do's</h1>
@stop

@section('content')
<form method="post" action="{{ route('calendar.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Title" />
    <x-adminlte-input name="start_at" label="meeting-time" type="datetime-local" name="meeting-time" value="2018-06-12T19:30"
       min="2018-06-07T00:00" max="2018-06-14T00:00"> />
       <x-adminlte-input name="end_at" label="meeting-time-end" type="datetime-local" name="meeting-time-end" value="2018-06-12T19:30"
       min="2018-06-07T00:00" max="2018-06-14T00:00"> />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop