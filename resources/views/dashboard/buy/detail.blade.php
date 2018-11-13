@extends('dashboard.app')

@section('title', 'Detail Transaksi Pembelian Uang')

@section('content')
    <div class="content">
        <p class="title">
            Detail Transaksi Pembelian
        </p>
        @foreach($data as $item)

            <table class="table is-bordered is-fullwidth">
                <tr>
                    <td>Transaksi ID</td>
                    <td><span class="has-text-danger">{{ $item->transaction_id }}</span></td>
                </tr>
                <tr>
                    <td>Tanggal Transaksi</td>
                    <td><span class="has-text-black">{{ $item->created_at }}</span></td>
                </tr>
                <tr>
                    <td>Jumlah Harus Dibayar</td>
                    <td>{{ $item->currency_name }} {{ $item->amount }}</td>
                </tr>
                <tr>
                    <td>Jumlah Uang Didapat</td>
                    <td>[ <span class="has-text-info">{{ $item->user_bank_currency }}</span> ] {{ $item->amount_get }}</td>
                </tr>
                <tr>
                    <td>Catatan Anda</td>
                    <td>{{ $item->message }}</td>
                </tr>
            </table>
            <hr>
            <p>Bank yang anda gunakan untuk transfer ke rekening kami.</p>
            <table class="table is-bordered is-fullwidth">
                <tr>
                    <td>Nama Bank</td>
                    <td>{{ $item->user_bank_name }}</td>
                </tr>
                <tr>
                    <td>Rekening A/N</td>
                    <td>{{ $item->user_bank_account_holder }}</td>
                </tr>
                <tr>
                    <td>Nomor Rekening / Email</td>
                    <td>{{ $item->user_bank_account_number }}</td>
                </tr>
                <tr>
                    <td>Nominal (Harus Sama)</td>
                    <td>{{ $item->currency_name }} {{ $item->amount }} </td>
                </tr>
            </table>
            <hr>
            <p>Pastikan Uangnya hanya dikirim ke rekening dibawah ini. Jika selain dibawah ini berarti penipuan.</p>
            <table class="table is-bordered is-fullwidth">
                <tr>
                    <td>Nama Bank</td>
                    <td>{{ $item->currency_payment_name }}</td>
                </tr>
                <tr>
                    <td>Rekening A/N</td>
                    <td>{{ $item->currency_account_holder }}</td>
                </tr>
                <tr>
                    <td>Nomor Rekening / Email</td>
                    <td>{{ $item->currency_account_number }}</td>
                </tr>
                <tr>
                    <td>Nominal (Harus Sama)</td>
                    <td>{{ $item->currency_name }} {{ $item->amount }} </td>
                </tr>
                <tr>
                    <td>Status Transaksi</td>
                    @switch($item->trx_name)
                        @case('success')
                        <td><a class="button is-small is-success" href="#"></a></td>
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

        @endforeach
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