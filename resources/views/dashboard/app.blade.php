<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - @yield('title')</title>
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">--}}
    <link rel="stylesheet" href="{{ asset('css/bulma.min.css') }}">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <style>
        *{
            font-family: 'Nunito Sans', sans-serif;
        }
    </style>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
<header>
    <nav class="navbar">
        <div class="container">

            <div class="navbar-brand">
                <a class="navbar-item" href="">
                    <h1 class="title is-2">Dashboard</h1>
                </a>
                <div class="navbar-burger burger" data-target="navMenubd-example">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div id="navMenubd-example" class="navbar-menu">
                <div class="navbar-start">
                    <div class="navbar-menu" id="navbar-menu">
                        <a class="navbar-item " href="@php echo getenv('APP_URL')@endphpdashboard">
                            <i class="fa fa-dashboard"></i>
                        </a>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">Tukar Uang</a>
                            <div class="navbar-dropdown">
                                <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/sell">
                                    Tukar Uang (Jual)
                                </a>
                                <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/sell/list">
                                    Semua Transaksi Penjualan
                                </a>
                            </div>
                        </div>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">Beli Uang</a>
                            <div class="navbar-dropdown">
                                <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/buy">
                                    Beli Uang (Pembelian)
                                </a>
                                <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/buy/list">
                                    Semua Transaksi Pembelian
                                </a>
                            </div>
                        </div>
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">Metode Pembayaran</a>
                            <div class="navbar-dropdown">
                                <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/bank">
                                    Tambah Bank
                                </a>
                                <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/bank/list">
                                    Semua Metode Pembayaran
                                </a>
                            </div>
                        </div>
                        <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/list">
                            <span><i class="fa fa-help"></i> Bantuan</span>
                        </a>
                </div>
                </div>

                <div class="navbar-end">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-item" href="{{@getenv('APP_URL')}}dashboard/account">
                           <span><i class="fa fa-user"></i> User</span>
                        </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="{{@getenv('APP_URL')}}dashboard/account">
                                Profil
                            </a>
                            <a class="navbar-item" href="{{@getenv('APP_URL')}}dashboard/account/password">
                                Kata Sandi
                            </a>
                            <a class="navbar-item" href="{{@getenv('APP_URL')}}dashboard/account/pin">
                                Pin
                            </a>
                        </div>
                    </div>
                        <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </div>

        </div>
    </nav>
</header>
<main class="content">
    <div class="container">
        @if (\Session::has('notification'))
            <div class="box">
                <span class="has-text-weight-bold">Notification:</span>
                <p>{{ \Session::get('notification') }}</p>
            </div>
        @endif
        <div class="box">
            @yield('content')
        </div>
    </div>
</main>

<!-- footer -->
<footer class="footer">
    <div class="container">
        <p class="has-text-centered copyright has-text-grey">
            Copyright © 2018 {{ @env('APP_NAME') }} All rights reserved
        </p>
    </div>
</footer>
<script>
    document.addEventListener('DOMContentLoaded', function () {

        // Get all "navbar-burger" elements
        var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any nav burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach(function ($el) {
                $el.addEventListener('click', function () {

                    // Get the target from the "data-target" attribute
                    var target = $el.dataset.target;
                    var $target = document.getElementById(target);

                    // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                    $el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }

    });
</script>
</body></html>