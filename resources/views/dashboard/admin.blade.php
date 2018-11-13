<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - @yield('title')</title>
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">--}}
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bulma.min.css') }}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        table{
            overflow-x: auto !important;
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="container">

        <div class="navbar-brand">
            <a class="navbar-item" href="{{ env('APP_URL') }}">
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
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">Menu Admin</a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/admin/transaction">
                                Transaksi
                            </a>
                            <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/admin/user">
                                User
                            </a>
                            <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/admin/userrole">
                                User Role
                            </a>
                            <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/admin/currency">
                                Currency
                            </a>
                            <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/admin/typetransaction">
                                Tipe Transaksi
                            </a>
                            <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/admin/statustransaction">
                                Status Transaksi
                            </a>
                        </div>
                    </div>
                    <a class="navbar-item" href="#">
                        <span><i class="fa fa-help"></i> Bantuan</span>
                    </a>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/account">
                        Profile
                    </a>
                    <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/account/logout">
                        Logout
                    </a>
                </div>
            </div>
        </div>

    </div>
</nav>

<div class="content container box">
        @if(Session::has('notification'))
        <div class="box">
            <b>Notifikasi</b> :<br>
            {{ \Illuminate\Support\Facades\Session::get('notification') }}
        </div>
        @endif

    @yield('content')
</div>

<!-- footer -->
<footer class="footer">
    <div class="container">
        <p class="has-text-centered copyright has-text-grey">
            Copyright©2018 Anyshortcut.com. All rights reserved
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