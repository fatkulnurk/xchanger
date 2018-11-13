@extends('dashboard.admin')

@section('title', 'Details Transaction')

@section('content')
    <div class="content">
        ID : <br>
        {{ $data-> id}}
        <hr>
        First Name: <br>
        {{ $data->first_name }}
        <hr>
        Middle Name: <br>
        {{ $data->middle_name }}
        <hr>
        Last Name: <br>
        {{ $data->last_name }}
        <hr>
        Email: <br>
        {{ $data->email}}
        <hr>
        Gender: <br>
        {{ $data->gender}}
        <hr>
        Phone Number: <br>
        {{ $data->phone_number}}
        <hr>
        Birthday: <br>
        {{ $data->birthday}}
        <hr>
        Country: <br>
        {{ $data->country}}
        <hr>
        Address: <br>
        {{ $data->address}}
    </div>
@endsection