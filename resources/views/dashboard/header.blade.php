<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<nav class="navbar">
    <div class="container">

        <div class="navbar-brand">
            <a class="navbar-item" href="http://bulma.io">
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
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-item " href="@php echo getenv('APP_URL')@endphpdashboard">
                        Dashboard
                    </a>
                    <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/sell">
                        Sell Money
                    </a>
                    <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/buy">
                        Buy Money
                    </a>
                    <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/list">
                        List Bank
                    </a>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-item" href="@php echo getenv('APP_URL')@endphpdashboard/account">
                        Profile
                    </a>
                    <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>

    </div>
</nav>

<div class="container is-keren">
    <div class="columns">
        <div class="column is-3">
            @include('dashboard.sidebar')
        </div>
        <div class="column is-9">