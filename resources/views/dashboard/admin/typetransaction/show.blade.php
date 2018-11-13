@extends('dashboard.admin')

@section('title', 'Details Transaction')

@section('content')
    <div class="content">
        {{ $data-> id}}
        <hr>
        {{ $data->name}}
        <hr>
        {{ $data->description }}
    </div>
@endsection