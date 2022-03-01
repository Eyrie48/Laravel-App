
@extends('adminlte::page')

@section('title', 'fallback')

@section('content_header')
    <h1>Error</h1>
@stop

@section('content')
    <p>Error 404 could not figure out what you were doing.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('error 404'); </script>
@stop