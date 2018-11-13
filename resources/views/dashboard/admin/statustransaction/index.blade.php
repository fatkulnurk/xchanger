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
                <td>Action</td>
            </thead>
            <tbody>
            @php
                $no = 1;
            @endphp
            @foreach($datas as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td><a href="{{ route('statustransaction.show',$data->id) }}">{{ $data->name }}</a></td>
                    <td>
                        <form action="{{ route('statustransaction.destroy', $data->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div class="field is-grouped">
                                <p class="control">
                                    <a class="button" type="submit" href="{{ route('statustransaction.edit',$data->id) }}">Edit</a>
                                </p>
                                <p class="control">
                                    <button class="button" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                </p>
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection