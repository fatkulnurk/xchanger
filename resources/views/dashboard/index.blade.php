@extends('dashboard.app')

@section('title', 'Dashboard')

@section('content')
    <div class="box">
        <span class="subtitle is-normal">Informasi Penting</span>
        <p>
            Pastikan anda sudah menambahkan metode pembayaran sebelum melakukan transaksi.
        </p>
    </div>
    <div class="content has-text-centered">
        <div class="columns">
            <div class="column">
                <a class="is-hovered box">
                    <span class="icon">
                        <i class="fa fa-balance-scale fa-2x"></i>
                    </span><br>
                    <span class="title">Jual Uang</span>
                </a>
            </div>
            <div class="column">
                <a class="is-hovered box">
                    <span class="icon">
                        <i class="fa fa-cart-plus fa-2x"></i>
                    </span><br>
                    <span class="title">Beli Uang</span>
                </a>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <a class="is-hovered box">
                    <span class="icon">
                        <i class="fa fa-bank fa-2x"></i>
                    </span><br>
                    <span class="title">Bank Saya</span>
                </a>
            </div>
            <div class="column">
                <a class="is-hovered box">
                    <span class="icon">
                        <i class="fa fa-comment-o fa-2x"></i>
                    </span><br>
                    <span class="title">Bantuan</span>
                </a>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <a class="is-hovered box">
                    <span class="icon">
                        <i class="fa fa-user fa-2x"></i>
                    </span><br>
                    <span class="title">Profil Saya</span>
                </a>
            </div>
            <div class="column">
                <a class="is-hovered box">
                    <span class="icon">
                        <i class="fa fa-user-secret fa-2x"></i>
                    </span><br>
                    <span class="title">Kata Sandi</span>
                </a>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <a class="is-hovered box">
                    <span class="icon">
                        <i class="fa fa-key fa-2x"></i>
                    </span><br>
                    <span class="title">Pin Saya</span>
                </a>
            </div>
            <div class="column">
                <a class="is-hovered box">
                    <span class="icon">
                        <i class="fa fa-sign-out fa-2x"></i>
                    </span><br>
                    <span class="title">Logout</span>
                </a>
            </div>
        </div>
    </div>
@endsection