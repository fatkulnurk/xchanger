@extends('home.header')
@section('title', 'Page Title')
@section('content')
<section class="hero is-primary is-medium is-bold">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column embed-responsive-1by1 has-text-centered-mobile">
                    <h1 class="title is-1">
                        @php echo getenv('SITE_NAME'); @endphp
                    </h1>
                    <h2 class="subtitle is-2">
                        @php echo getenv('SITE_DESCRIPTION'); @endphp
                    </h2>
                </div>
                <div class="column is-5 box">
                    <form action="{{ route('homepagecount') }}" method="post">
                        {{ csrf_field() }}
                        <div class="field">
                            <label class="label">Jumlah Uang</label>
                            <div class="control has-icons-left">
                                <input name="amount" class="input is-primary is-fullwidth" type="text" placeholder="Text input">
                                <span class="icon is-left">
                                    <i class="fas fa-globe"></i>
                                </span>
                            </div>
                            <p class="help">Nominal hanya bilangan bulat.</p>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="field">
                                    <label class="label">Mata Uang</label>
                                    <div class="control has-icons-left">
                                        <div class="select is-primary is-fullwidth">
                                            <select name="currency">
                                                @foreach($data as $item)
                                                    <option value="{{ $item->id }}">{{ $item->currency_name }} - {{$item->payment_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="icon is-left">
                                            <i class="fas fa-money-check"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                                 @if (\Session::has('count_money'))
                                <div class="column is-6">
                                    <label class="label">Total Uang</label>
                                    <div class="control has-icons-left">
                                        <input class="input is-primary" type="text" value="Rp {{ @number_format(\Session::get('count_money'),0, ',', '.') }}" disabled>
                                        <span class="icon is-left">
                                            <i class="fas fa-money-bill-alt"></i>
                                        </span>
                                    </div>
                                    <p class="help">Nominal hanya perkiraan, hasil sebenernya ada di dashboard.</p>
                                </div>
                                @endif
                        </div>
                        <div class="control has-text-centered">
                            <input type="submit" class="button is-primary" value="Hitung"></input>
                            <a href="" class="button is-light">Reload</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

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
									<i class="far fa-2x fa-thumbs-up "></i>
								</span>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <h1 class="title is-size-4">Kualitas Layanan</h1>
                            <p class="is-size-5">
                                Kami selalu senantiasa menjaga kwalitas produk & layanan demi kepuasan pelanggan.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="column">
                <article class="media notification is-primary">
                    <figure class="media-left">
								<span class="icon is-medium">
									<i class="fas fa-2x fa-lock"></i>
								</span>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <h1 class="title is-size-4">Privasi Terjaga</h1>
                            <p class="is-size-5">
                                Kami memiliki komitmen untuk menjamin privasi dan data anda tetap aman dan terjaga.</span>
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
                            <h1 class="title is-size-4">Transaksi Aman</h1>
                            <p class="is-size-5">
                                Kami menggunakan SSL yang memastikan semua informasi terjaga dalam setiap transaksi.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

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
                                <strong>John Smith</strong> <small>@fatkulnurk</small> <small>31m</small>
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