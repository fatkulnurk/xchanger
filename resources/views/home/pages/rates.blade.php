@extends('home.header')
@section('title', 'Rates Mata Uang')
@section('content')
    <section class="hero is-primary is-normal is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column embed-responsive-1by1 has-text-centered-mobile">
                        <h1 class="title">
                            Rates
                        </h1>
                        <h2 class="subtitle">
                            Update Harga Mata Uang Layanan Kami
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section container">
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

            @php($i=1)

            @foreach($currency as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->currency_name }}</td>
                    <td>{{ $item->payment_name }}</td>
                    <td>{{ $item->price }} (Rupiah)</td>
                    <td>{{ $item->stock }} ({{$item->currency_name}})</td>
                </tr>
                @php($i++)
            @endforeach

            </tbody>
        </table>
    </section>
@endsection