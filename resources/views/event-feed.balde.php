@extends('adminlte::page')

@section('title', 'Event-feed')

@section('content')
    $jsonString = file_get_contents(base_path('my_data.json'));

    $data = json_encode($jsonString);
    echo $data;
@stop

