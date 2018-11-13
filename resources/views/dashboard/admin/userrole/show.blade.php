@extends('dashboard.admin')

@section('title', 'User Role Details')

@section('content')
    <div class="content">
        {{ $data-> id}}
        <hr>
        {{ $data->name}}
        <hr>
        {{ $data->description }}
    </div>
@endsection