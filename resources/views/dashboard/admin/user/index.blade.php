@extends('dashboard.admin')

@section('title', 'List Currency')

@section('content')
    <div class="content">
        <h1>Status Transaction</h1>
        <p>
            <a href="{{ @Request::url() }}/create" class="button is-info">Tambah Baru</a>
        </p>
        <table class="table is-striped is-hoverable is-fullwidth is-narrow">
            <thead>
                <td>No</td>
                <td>Name</td>
                <td>Email</td>
            </thead>
            <tbody>
            @php
                $no = 1;
            @endphp
            @foreach($datas as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td><a href="{{ route('user.show',$data->id) }}">{{ $data->first_name }} {{ $data->middle_name }} {{ $data->last_name }}</a></td>
                    <td>{{$data->email}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection