@extends('home.header')
@section('title', 'Daftar Mata Uang')
@section('content')
    <section class="hero is-primary is-normal is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column embed-responsive-1by1 has-text-centered-mobile">
                        <h1 class="title">
                            Bank & Mata Uang
                        </h1>
                        <h2 class="subtitle">
                            Berikut ini adalah bank dan mata uang yang bisa kami layani.
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
            </tr>
            </thead>
            <tbody>

            @php
            $i=1
            @endphp

            @foreach($currency as $item)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $item->currency_name }}</td>
                    <td>{{ $item->payment_name }}</td>
                </tr>

                @php($i++)
            @endforeach

            </tbody>
        </table>
    </section>
@endsection