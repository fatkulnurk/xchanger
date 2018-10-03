<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@php echo getenv('SITE_NAME'); @endphp - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
</head>
<body>
<header>
    <nav class="navbar ">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="http://bulma.io">
                    <h1 class="title is-2">eXchanger</h1>
                </a>

                <a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">
      <span class="icon" style="color: #333;">
        <i class="fa fa-github"></i>
      </span>
                </a>

                <a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
      <span class="icon" style="color: #55acee;">
        <i class="fa fa-twitter"></i>
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
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-item " href="">
                            Home
                        </a>
                        <a class="navbar-item" href="./pages/rates">
                            Live Rate
                        </a>
                        <a class="navbar-item" href="./pages/currency">
                            Bank & Currency
                        </a>
                    </div>
                    <div class="navbar-item has-dropdown is-hoverable is-mega">
                        <div class="navbar-link">
                            Blog
                        </div>
                        <div id="blogDropdown" class="navbar-dropdown " data-style="width: 18rem;">
                            <div class="container is-fluid">
                                <div class="columns">
                                    <div class="column">
                                        <h1 class="title is-6 is-mega-menu-title">Sub Menu Title</h1>
                                        <a class="navbar-item" href="/2017/08/03/list-of-tags/">
                                            <div class="navbar-content">
                                                <p>
                                                    <small class="has-text-info">03 Aug 2017</small>
                                                </p>
                                                <p>New feature: list of tags</p>
                                            </div>
                                        </a>
                                        <a class="navbar-item" href="/2017/08/03/list-of-tags/">
                                            <div class="navbar-content">
                                                <p>
                                                    <small class="has-text-info">03 Aug 2017</small>
                                                </p>
                                                <p>New feature: list of tags</p>
                                            </div>
                                        </a>
                                        <a class="navbar-item" href="/2017/08/03/list-of-tags/">
                                            <div class="navbar-content">
                                                <p>
                                                    <small class="has-text-info">03 Aug 2017</small>
                                                </p>
                                                <p>New feature: list of tags</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="column">
                                        <h1 class="title is-6 is-mega-menu-title">Sub Menu Title</h1>
                                        <a class="navbar-item" href="/2017/08/03/list-of-tags/">
                                            <div class="navbar-content">

                                                <p>
                                                    <small class="has-text-info">03 Aug 2017</small>
                                                </p>
                                                <p>New feature: list of tags</p>
                                            </div>
                                        </a>
                                        <a class="navbar-item " href="/documentation/overview/start/">
                                            Overview
                                        </a>
                                        <a class="navbar-item " href="http://bulma.io/documentation/modifiers/syntax/">
                                            Modifiers
                                        </a>
                                        <a class="navbar-item " href="http://bulma.io/documentation/columns/basics/">
                                            Columns
                                        </a>
                                    </div>
                                    <div class="column">
                                        <h1 class="title is-6 is-mega-menu-title">Sub Menu Title</h1>
                                        <a class="navbar-item" href="/2017/08/03/list-of-tags/">
                                            <div class="navbar-content">
                                                <p>
                                                    <small class="has-text-info">03 Aug 2017</small>
                                                </p>
                                                <p>New feature: list of tags</p>
                                            </div>
                                        </a>
                                        <a class="navbar-item" href="/2017/08/03/list-of-tags/">
                                            <div class="navbar-content">
                                                <p>
                                                    <small class="has-text-info">03 Aug 2017</small>
                                                </p>
                                                <p>New feature: list of tags</p>
                                            </div>
                                        </a>
                                        <a class="navbar-item" href="/2017/08/03/list-of-tags/">
                                            <div class="navbar-content">
                                                <p>
                                                    <small class="has-text-info">03 Aug 2017</small>
                                                </p>
                                                <p>New feature: list of tags</p>
                                            </div>
                                        </a>

                                    </div>
                                    <div class="column">
                                        <h1 class="title is-6 is-mega-menu-title">Sub Menu Title</h1>
                                        <a class="navbar-item " href="/documentation/overview/start/">
                                            Overview
                                        </a>
                                        <a class="navbar-item " href="http://bulma.io/documentation/modifiers/syntax/">
                                            Modifiers
                                        </a>
                                        <a class="navbar-item " href="http://bulma.io/documentation/columns/basics/">
                                            Columns
                                        </a>
                                        <a class="navbar-item " href="http://bulma.io/documentation/layout/container/">
                                            Layout
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <hr class="navbar-divider">
                            <div class="navbar-item">
                                <div class="navbar-content">
                                    <div class="level is-mobile">
                                        <div class="level-left">
                                            <div class="level-item">
                                                <strong>Stay up to date!</strong>
                                            </div>
                                        </div>
                                        <div class="level-right">
                                            <div class="level-item">
                                                <a class="button bd-is-rss is-small" href="http://bulma.io/atom.xml">
                      <span class="icon is-small">
                        <i class="fa fa-rss"></i>
                      </span>
                                                    <span>Subscribe</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="navbar-item " href="./review">
                        All &nbsp;<span class="bd-emoji"> ❤️</span> &nbsp;Me
                    </a>
                </div>

                <div class="navbar-end">
                    <a class="navbar-item is-hidden-desktop-only" href="https://github.com/jgthms/bulma" target="_blank">
                <span class="icon" style="color: #333;">
                  <i class="fa fa-github"></i>
                </span>
                    </a>
                    <a class="navbar-item is-hidden-desktop-only" href="https://twitter.com/jgthms" target="_blank">
                <span class="icon" style="color: #55acee;">
                  <i class="fa fa-twitter"></i>
                </span>
                    </a>
                    <div class="navbar-item">
                        <div class="field is-grouped">
                            <p class="control">
                                <a class="button is-primary" href="https://github.com/jgthms/bulma/archive/0.5.1.zip">
                          <span class="icon">
                            <i class="fa fa-user-secret"></i>
                          </span>
                                    <span>Masuk</span>
                                </a>
                            </p>
                            <p class="control">
                                <a class="button is-primary" href="https://github.com/jgthms/bulma/archive/0.5.1.zip">
                          <span class="icon">
                            <i class="fa fa-users"></i>
                          </span>
                                    <span>Mendaftar</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
@yield('content')
@extends('home.footer');