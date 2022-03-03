@extends('adminlte::page')

@section('title', 'Calendar')

@section(content)
    @foreach($jsonString = file_get_contents(base_path('my_data.json')) AS $data)
        $data = json_encode($jsonString);
        echo $data;
    @endforeach
@stop