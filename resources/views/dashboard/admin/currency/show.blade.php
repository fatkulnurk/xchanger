@extends('dashboard.admin')

@section('title', 'Details Transaction')

@section('content')
    <div class="content">
        {{ $data-> id}}
        <hr>
        {{ $data->currency_name}}
        <hr>
        {{ $data->payment_name }}
        <hr>
        {{ $data->stock }}
        <hr>
        {{ $data->price }}
        <hr>
        {{ $data->account_holder }}
        <hr>
        {{ $data->account_number }}
        <hr>
        {{ $data->message }}
        <hr>
    </div>
@endsection