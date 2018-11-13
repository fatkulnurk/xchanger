@extends('dashboard.app')

@section('title', 'Tambah Bank')

@section('content')
<div class="box">
    <form action="{{ route('bankadd') }}" method="post">
        {{ csrf_field() }}
        <div class="columns is-fullwidth">
            <div class="column is-6">
                <div class="field">
                    <label class="label">Nama Pembayaran</label>
                    <div class="control has-icons-left">
                        <input class="input is-primary" type="text" placeholder="Nama Pembayaran" name="payment_title">
                        <span class="icon is-left">
                        <i class="fa fa-bank"></i>
                        </span>
                    </div>
                    <p class="help">Bisa di isi nama bank dan mata uang.</p>
                </div>
                <div class="field">
                    <label class="label">Nama Bank</label>
                    <div class="control has-icons-left">
                        <input class="input is-primary" type="text" placeholder="Nama Bank" name="bank_name">
                        <span class="icon is-left">
                        <i class="fa fa-money"></i>
                        </span>
                    </div>
                    <p class="help">Isi nama bank anda, contoh bri</p>
                </div>
                <div class="field">
                    <label class="label">Nama Pemilik</label>
                    <div class="control has-icons-left">
                        <input class="input is-primary" type="text" placeholder="Nama Pemilik" name="account_holder">
                        <span class="icon is-left">
                        <i class="fa fa-user"></i>
                        </span>
                    </div>
                    <p class="help">isi pemilik rekening (atas nama)</p>
                </div>
                <div class="field">
                    <label class="label">Nomer Rekening</label>
                    <div class="control has-icons-left">
                        <input class="input is-primary" type="text" placeholder="Nomor Rekening" name="account_number">
                        <span class="icon is-left">
                        <i class="fa fa-money"></i>
                        </span>
                    </div>
                    <p class="help">Isi nomer rekening bank anda.</p>
                </div>
            </div>
            <div class="column is-6">
                <div class="field">
                    <label class="label">Mata Uang</label>
                    <div class="control has-icons-left">
                        <input class="input is-primary" type="text" placeholder="Mata Uang" name="currency">
                        <span class="icon is-left">
                        <i class="fa fa-money"></i>
                        </span>
                    </div>
                    <p class="help">Masukan mata uang anda, contoh USD, IDR, atau Dollar Singapura</p>
                </div>
                <div class="field">
                    <label class="label">Deskripsi (Optional)</label>
                    <textarea class="textarea is-primary" placeholder="Tulis deskripsi disini." name="description"></textarea>
                </div>
            </div>
        </div>
        <div class="control has-text-centered">
            <button class="button is-primary" name="submit">Tambah Bank</button>
        </div>
    </form>
</div>

@endsection