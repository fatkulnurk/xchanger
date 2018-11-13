<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@php echo getenv('SITE_NAME'); @endphp - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bulma.min.css') }}">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">--}}

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
<body>
<header>
    <nav class="navbar ">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="?ref=logo">
                    <h1 class="title is-2">eXchanger</h1>
                </a>

                <a class="navbar-item is-hidden-desktop" href="#" target="_blank">
      <span class="icon" style="color: #333;">
        <i class="fab fa-facebook"></i>
      </span>
                </a>

                <a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
      <span class="icon" style="color: #55acee;">
        <i class="fab fa-twitter"></i>
      </span>
                </a>

                <div class="navbar-burger burger" data-target="navMenubd-example">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div id="navMenubd-example" class="navbar-menu">
                <div class="navbar-start">
                    <a class="navbar-item " href="@php echo getenv('SITE_URL'); @endphp">
                        Home
                    </a>
                    <a class="navbar-item" href="@php echo getenv('SITE_URL'); @endphppages/rates">
                        Live Rate
                    </a>
                    <a class="navbar-item" href="@php echo getenv('SITE_URL'); @endphppages/currency">
                        Bank & Currency
                    </a>
                    <a class="navbar-item " href="@php echo getenv('SITE_URL'); @endphppages/fee">
                        Fees
                    </a>
                    <a class="navbar-item " href="@php echo getenv('SITE_URL'); @endphppages/review">
                        All &nbsp;<span class="bd-emoji"> ❤️</span> &nbsp;Me
                    </a>
                </div>

                <div class="navbar-end">
                    <a class="navbar-item is-hidden-desktop-only" href="@php echo getenv('SOCIAL_FACEBOOK'); @endphp" target="_blank">
                <span class="icon" style="color: #333;">
                  <i class="fab fa-facebook-f"></i>
                </span>
                    </a>
                    <a class="navbar-item is-hidden-desktop-only" href="@php echo getenv('SOCIAL_TWITTER'); @endphp" target="_blank">
                <span class="icon" style="color: #55acee;">
                  <i class="fab fa-twitter"></i>
                </span>
                    </a>
                    <div class="navbar-item">
                        <div class="field is-grouped">

                            @guest
                            <p class="control">
                                <a class="button is-divider is-light" href="{{ route('login') }}">
                          <span class="icon">
                            <i class="fa fa-user"></i>
                          </span>
                                    <span>{{ __('Login') }}</span>
                                </a>
                            </p>
                            <p class="control">
                                <a class="button is-info" href="{{ route('register') }}">
                          <span class="icon">
                            <i class="fa fa-users"></i>
                          </span>
                                    <span>{{ __('Register') }}</span>
                                </a>
                            </p>

                            @else

                                <p class="control">
                                    <a class="button is-divider is-light" href="<?php echo getenv("APP_URL");?>dashboard">
                                        <span class="icon">
                                         <i class="fa fa-user"></i>
                                        </span>
                                        <span>Dashboard</span>
                                    </a>
                                </p>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
    @yield('content')
@extends('home.footer')