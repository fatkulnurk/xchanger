@extends('dashboard.admin')

@section('title', 'Transaction')

@section('content')
    <div class="content">
        <h1>Transaction</h1>
        <table class="table is-striped is-hoverable is-fullwidth is-narrow">
            <thead>
                <td>No</td>
                <td>User</td>
                <td>Status</td>
                <td>Type</td>
                <td>Email</td>
            </thead>
            <tbody>
            @php
                $no = 1;
            @endphp
            @foreach($datas as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->user_first_name }} {{$data->user_middle_name }} {{$data->user_last_name }}</td>
                    @switch($data->trx_name)
                        @case('success')
                        <td><a class="button is-small is-success" href="{{ route('transaction.show',$data->transaction_id) }}"> </a></td>
                        @break

                        @case('fraud')
                        <td><a class="button is-small is-danger" href="{{ route('transaction.show',$data->transaction_id) }}">Fraud</a></td>
                        @break

                        @case('waiting')
                        <td><a class="button is-small is-info" href="{{ route('transaction.show',$data->transaction_id) }}">Waiting</a></td>
                        @break

                        @case('cancel')
                        <td><a class="button is-small is-light" href="{{ route('transaction.show',$data->transaction_id) }}">Cancel</a></td>
                        @break

                        @case('failed')
                        <td><a class="button is-small is-black" href="{{ route('transaction.show',$data->transaction_id) }}">Failed</a></td>
                        @break


                        @default
                        <td><a class="button is-small is-danger" href="#">Fraud</a></td>
                        @endswitch
                    <td>{{ $data->trx_type_name }}</td>
                    <td>{{ $data->user_email }}</td>
                    <td>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection