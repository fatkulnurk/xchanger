@extends('dashboard.admin')

@section('title', 'List Currency')

@section('content')
    <div class="box content">
        <h1> LIST CURRENCY </h1>
        @if(Session::has('alert-success'))
            <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
        @endif
        <p>
            <a href="{{ @Request::url() }}/create" class="button is-info">Tambah Baru</a>
        </p>
        <table class="table is-striped is-hoverable is-fullwidth is-narrow">
            <thead>
                <td>No</td>
                <td>Currency</td>
                <td>Payment Name</td>
                <td>Stock</td>
                <td>Price</td>
                <td>Action</td>
            </thead>
            <tbody>
            @php
                $no = 1;
            @endphp
            @foreach($datas as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->currency_name }}</td>
                    <td><a href="{{ route('currency.show',$data->id) }}">{{ $data->payment_name }}</a></td>
                    <td>{{ $data->stock }}</td>
                    <td>{{ $data->price }}</td>
                    <td>
                        <form action="{{ route('currency.destroy', $data->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div class="field is-grouped">
                                <p class="control">
                                    <a class="button" type="submit" href="{{ route('currency.edit',$data->id) }}">Edit</a>
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