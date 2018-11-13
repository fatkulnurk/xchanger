@extends('dashboard.admin')

@section('title', 'Details Transaction')

@section('content')

        <div class="content">
            <div class="has-text-centered">
                <table class="table has-text-centered is-centered is-center">
                    <tr>
                        <td>
                            <form action="{{ route('issuccess', $data->transaction_id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="field is-grouped">
                                    <p class="control">
                                        <button class="button is-link" type="submit" onclick="return confirm('Yakin ingin menjadikan success?')">Success</button>
                                    </p>
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('isfraud', $data->transaction_id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="field is-grouped">
                                    <p class="control">
                                        <button class="button is-link" type="submit" onclick="return confirm('Yakin ingin menjadikan Fraud?')">Fraud</button>
                                    </p>
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('iswaiting', $data->transaction_id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="field is-grouped">
                                    <p class="control">
                                        <button class="button is-info" type="submit" onclick="return confirm('Yakin ingin menjadikan WAITING?')">Waiting</button>
                                    </p>
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('iscancel', $data->transaction_id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="field is-grouped">
                                    <p class="control">
                                        <button class="button is-light" type="submit" onclick="return confirm('Yakin ingin menjadikan Cancel?')">Cancel</button>
                                    </p>
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('isfailed', $data->transaction_id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="field is-grouped">
                                    <p class="control">
                                        <button class="button is-black" type="submit" onclick="return confirm('Yakin ingin menjadikan Failed?')">Failed</button>
                                    </p>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        <p class="title">
            Detail Transaksi Penukaran
        </p>
            <table class="table is-bordered is-fullwidth">
                <tr>
                    <td>Transaksi ID</td>
                    <td><span class="has-text-danger">{{ $data->transaction_id }}</span></td>
                </tr>
                <tr>
                    <td>Tanggal Transaksi</td>
                    <td><span class="has-text-black">{{ $data->created_at }}</span></td>
                </tr>
                <tr>
                    <td>Jumlah Harus Dibayar</td>
                    <td>{{ $data->currency_name }} {{ @number_format($data->amount,0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td>Catatan Anda</td>
                    <td>{{ $data->message }}</td>
                </tr>
            </table>
            <hr>
            <p>Bank Digunakan Transfer.</p>
            <table class="table is-bordered is-fullwidth is-striped">
                <tr>
                    <td>Nama Bank</td>
                    <td>{{ $data->user_bank_name }}</td>
                </tr>
                <tr>
                    <td>Rekening A/N</td>
                    <td>{{ $data->user_bank_account_holder }}</td>
                </tr>
                <tr>
                    <td>Nomor Rekening / Email</td>
                    <td>{{ $data->user_bank_account_number }}</td>
                </tr>
                <tr>
                    <td>Nominal (Harus Sama)</td>
                    <td>{{ $data->currency_name }} {{ $data->amount }} </td>
                </tr>
            </table>
            <hr>
            <p>Rekening Tujuan.</p>
            <table class="table is-bordered is-striped is-hoverable is-fullwidth">
                <tr>
                    <td>Nama Bank</td>
                    <td>{{ $data->currency_payment_name }}</td>
                </tr>
                <tr>
                    <td>Rekening A/N</td>
                    <td>{{ $data->currency_account_holder }}</td>
                </tr>
                <tr>
                    <td>Nomor Rekening / Email</td>
                    <td>{{ $data->currency_account_number }}</td>
                </tr>
                <tr>
                    <td>Nominal (Harus Sama)</td>
                    <td>{{ $data->currency_name }} {{ $data->amount }} </td>
                </tr>
                <tr>
                    <td>Status Transaksi {{ $data->trx_id }}</td>
                    @switch($data->trx_name)
                        @case('success')
                        <td><a class="button is-small is-success" href="#">Success</a></td>
                        @break

                        @case('fraud')
                        <td><a class="button is-small is-danger" href="#">Fraud</a></td>
                        @break

                        @case('waiting')
                        <td><a class="button is-small is-info" href="#">Waiting</a></td>
                        @break

                        @case('cancel')
                        <td><a class="button is-small is-light" href="#">Cancel</a></td>
                        @break

                        @case('failed')
                        <td><a class="button is-small is-black" href="#">Failed</a></td>
                        @break

                        @default
                        <td><a class="button is-small is-danger" href="#">Fraud</a></td>
                    @endswitch
                </tr>
            </table>

        <hr>
        <p>Informasi mengenai transaksi.</p>
        <div class="content">
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th width="10px">Details</th>
                    <th>:</th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a class="button is-small is-primary" href="#">Success</a></td>
                    <td>:</td>
                    <td>Transaksi Sukses</td>
                </tr>
                <tr>
                    <td><a class="button is-small is-danger" href="#">Fraud</a></td>
                    <td>:</td>
                    <td>Transaksi tidak berhasil, terindikasi penipuan sehingga di batalkan.</td>
                </tr>
                <tr>
                    <td><a class="button is-small is-info" href="#">Waiting</a></td>
                    <td>:</td>
                    <td>Menunggu Proses Pembayaran</td>
                </tr>
                <tr>
                    <td><a class="button is-small is-light" href="#">Cancel</a></td>
                    <td>:</td>
                    <td>Transaksi dibatalkan</td>
                </tr>
                <tr>
                    <td><a class="button is-small is-dark" href="#">Failed</a></td>
                    <td>:</td>
                    <td>Transaksi Gagal</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection