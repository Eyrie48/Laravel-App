@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>Error</h1>
@stop

@section('content')
    <div>
        <p>Error 404 could not figure out what you were doing.</p>
        <link rel="stylesheet" href="/css/admin_custom.css">
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Error!'); </script>
@stop