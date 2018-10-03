@extends('home.header')
@section('title', 'Page Title')
@section('content')
<section class="hero is-primary is-medium">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column embed-responsive-1by1">
                    <h1 class="title is-1">
                        @php echo getenv('SITE_NAME'); @endphp
                    </h1>
                    <h2 class="subtitle is-2">
                        @php echo getenv('SITE_DESCRIPTION'); @endphp
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

<!-- .section -->
<section class="section has-background-light">
    <div class="container">
        <div class="content has-text-centered">
            <h3 class="title">Kenapa Harus Kami</h3>
            <p class="subtitle">Keberhasilan dan Kepuasan Transaksi Anda adalah yang utama</p>
        </div>
        <div class="columns">
            <div class="column">
                <article class="media notification is-info">
                    <figure class="media-left">
								<span class="icon is-medium">
									<i class="fab fa-2x fa-css3-alt"></i>
								</span>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <h1 class="title is-size-4">Bulma?</h1>
                            <p class="is-size-5">
                                Bulma is a modern CSS framework from @jgthms, based on Flexbox.
                                Using Bulma, we can describe our website's design using just classes. <span class="emoticon">ᕕ( ᐛ )ᕗ</span>
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="column">
                <article class="media notification is-primary">
                    <figure class="media-left">
								<span class="icon is-medium">
									<i class="fas fa-2x fa-align-justify"></i>
								</span>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <h1 class="title is-size-4">…Flexbox?</h1>
                            <p class="is-size-5">
                                Flexbox is a CSS spec that makes sectioning and aligning more natural.
                                We don't need to know Flexbox but it's how Bulma works behind-the-scenes. <span class="emoticon">⦤(^ー^)⦥</span>
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="column">
                <article class="media notification is-warning">
                    <figure class="media-left">
								<span class="icon is-medium">
									<i class="fas fa-2x fa-shield-alt"></i>
								</span>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <h1 class="title is-size-4">…Classes?</h1>
                            <p class="is-size-5">
                                Instead of writing our CSS per-element, we can use predefined classes.
                                With enough classes, we can describe our website design using semantics. <span class="emoticon">٩(^ᴗ^)۶</span>
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- /.section -->

<section class="section has-background-white">
    <div class="container">
        <div class="columns">
            <div class="column">
                <article class="media box">
                    <figure class="media-left">
                        <p class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/128x128.png">
                        </p>
                    </figure>
                    <div class="media-content ">
                        <div class="content">
                            <p>
                                <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                            </p>
                        </div>
                        <nav class="level is-mobile">
                            <div class="level-left">
                                <a class="level-item">
                                    <span class="icon is-small"><i class="fas fa-reply"></i></span>
                                </a>
                                <a class="level-item">
                                    <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                                </a>
                                <a class="level-item">
                                    <span class="icon is-small"><i class="fas fa-heart"></i></span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </article>
            </div>
            <div class="column">
                <article class="media box">
                    <figure class="media-left">
                        <p class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/128x128.png">
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                            </p>
                        </div>
                        <nav class="level is-mobile">
                            <div class="level-left">
                                <a class="level-item">
                                    <span class="icon is-small"><i class="fas fa-reply"></i></span>
                                </a>
                                <a class="level-item">
                                    <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                                </a>
                                <a class="level-item">
                                    <span class="icon is-small"><i class="fas fa-heart"></i></span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </article>
            </div>
            <div class="column">
                <article class="media box">
                    <figure class="media-left">
                        <p class="image is-64x64">
                            <img src="https://bulma.io/images/placeholders/128x128.png">
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                            </p>
                        </div>
                        <nav class="level is-mobile">
                            <div class="level-left">
                                <a class="level-item">
                                    <span class="icon is-small"><i class="fas fa-reply"></i></span>
                                </a>
                                <a class="level-item">
                                    <span class="icon is-small"><i class="fas fa-retweet"></i></span>
                                </a>
                                <a class="level-item">
                                    <span class="icon is-small"><i class="fas fa-heart"></i></span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection