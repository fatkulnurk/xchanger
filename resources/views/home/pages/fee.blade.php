@extends('home.header')
@section('title', 'Biaya Transaksi')
@section('content')
    <section class="hero is-primary is-normal is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column embed-responsive-1by1 has-text-centered-mobile">
                        <h1 class="title">
                            Biaya Transaksi
                        </h1>
                        <h2 class="subtitle">
                            Biaya Layanan Penukaran dan Pembelian
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section container">
        <h1 class="subtitle">Biaya Transaksi Penjualan/Penukaran</h1>
        <table class="table is-bordered">
            <thead>
            <tr>
                <td>No</td>
                <td>Mata Uang</td>
                <td>Nama Bank (Metode)</td>
                <td>Harga</td>
                <td>Stok</td>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </section>
@endsection