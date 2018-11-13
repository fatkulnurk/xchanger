@extends('dashboard.app')

@section('title', 'Beli')

@section('content')
    <div class="content">
        <div class="card events-card">
            <header class="card-header">
                <p class="card-header-title">
                    Riwayat Pembelian Uang
                </p>
                <a href="#" class="card-header-icon" aria-label="more options">
                  <span class="icon">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </span>
                </a>
            </header>
            <div class="card-table">
                <div class="content">
                    <table class="table is-fullwidth is-striped">
                        <thead>
                        <tr>
                            <td width="5%"><i class="fa fa-bell-o"></i></td>
                            <td>TrxID</td>
                            <td>Nominal</td>
                            <td>From</td>
                            <td>To</td>
                            <td>Status</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td width="5%"><i class="fa fa-bell-o"></i></td>
                                <td><a href="./list/{{ $item->transaction_id }}">{{ $item->transaction_id }}</a></td>
                                <td>{{ $item->currency_name }} {{ $item->amount }}</td>
                                <td>{{ $item->user_bank_payment_title }} ( {{ $item->user_bank_name }} )</td>
                                <td>{{ $item->currency_payment_name }}</td>

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
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <footer class="card-footer">
                <a href="#" class="card-footer-item">Jika ada pertanyaan hubungi kami</a>
            </footer>
        </div>
        <div class="content">
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th width="10px">Status</th>
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