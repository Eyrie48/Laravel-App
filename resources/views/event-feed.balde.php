@extends('adminlte::page')

@section('title', 'Calendar')

@section(content)
   <script> 
        $jsonString = file_get_contents(base_path('my_data.json'));

        $data = json_encode($jsonString);
        echo $data;
    </script>

@stop