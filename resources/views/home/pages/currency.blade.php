@extends('home.header')
@section('title', 'List Currency')
@section('content')
    @foreach($currency as $item)
        <li>{{ $item }}</li>
    @endforeach
@endsection