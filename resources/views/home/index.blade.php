<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
</head>
<body>
<nav class="navbar ">
    <div class="navbar-brand">
        {{--<a class="navbar-item" href="http://bulma.io">--}}
            {{--<img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">--}}
        {{--</a>--}}

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
                <a class="navbar-link  is-active" href="/documentation/overview/start/">
                    Docs
                </a>
                <div class="navbar-dropdown ">
                    <a class="navbar-item " href="/documentation/overview/start/">
                        Overview
                    </a>
                    <a class="navbar-item " href="http://bulma.io/documentation/modifiers/syntax/">
                        Modifiers
                    </a>

                    <hr class="navbar-divider">
                    <div class="navbar-item">
                        <div>
                            <p class="is-size-6-desktop">
                                <strong class="has-text-info">0.5.1</strong>
                            </p>

                            <small>
                                <a class="bd-view-all-versions" href="/versions">View all versions</a>
                            </small>

                        </div>
                    </div>
                </div>
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
            <a class="navbar-item " href="">
                <span class="bd-emoji">❤️</span> &nbsp;Love
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
                        <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://bulma.io" target="_blank" href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&hashtags=bulmaio&url=http://bulma.io&via=jgthms">
              <span class="icon">
    <i class="fa fa-twitter"></i>
  </span>
                            <span>
    Tweet
  </span>
                        </a>

                    </p>
                    <p class="control">
                        <a class="button is-primary" href="https://github.com/jgthms/bulma/archive/0.5.1.zip">
              <span class="icon">
                <i class="fa fa-download"></i>
              </span>
                            <span>Download</span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</nav>

<section class="hero is-primary is-medium">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column embed-responsive-1by1">
                    <h1 class="title">
                        OoO Exchanger
                    </h1>
                    <h2 class="subtitle">
                        Tukar Uang Jadi Lebih Gampang dan Mudah
                    </h2>
                </div>
                <div class="column is-6 box">
                    <form>
                        <div class="field">
                            <label class="label">Jumlah Uang</label>
                            <div class="control has-icons-left">
                                <input class="input is-primary" type="text" placeholder="Text input">
                                <span class="icon is-left">
                                    <i class="fas fa-globe"></i>
                                </span>
                            </div>
                            <p class="help">Nominal hanya bilangan bulat.</p>
                        </div>
                        <div class="columns">
                            <div class="column is-6">
                                <div class="field">
                                    <label class="label">Mata Uang</label>
                                    <div class="control has-icons-left">
                                        <div class="select is-primary is-fullwidth">
                                            <select>
                                                <option selected>Country</option>
                                                <option>Select dropdown</option>
                                                <option>With options</option>
                                            </select>
                                        </div>
                                        <span class="icon is-left">
                                            <i class="fas fa-globe"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6">
                                <div class="field">
                                    <label class="label">Dari Bank</label>
                                    <div class="control has-icons-left">
                                        <div class="select is-primary is-fullwidth">
                                            <select>
                                                <option selected>Country</option>
                                                <option>Select dropdown</option>
                                                <option>With options</option>
                                            </select>
                                        </div>
                                        <span class="icon is-left">
                                        <i class="fas fa-globe"></i>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control has-text-centered">
                            <button class="button is-primary">Hitung</button>
                            <button class="button is-light">Reload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@include('home.footer')