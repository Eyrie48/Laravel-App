
@extends('adminlte::page')

@section('title', 'Scheduler')

@section('content_header')
    <h1>Scheduler</h1>
@stop

@section('content')
    <form method="post" action="{{ route('calendar.store') }}" >
        @csrf
        <x-adminlte-input name="title" label="Title" />
        <x-adminlte-input name="start_at" type="datetime-local" label="start_at" />
        <x-adminlte-input name="end_at" type="datetime-local" label="end_at" />
        <x-adminlte-button type="Submit" label="Submit" />
    </form>
@stop