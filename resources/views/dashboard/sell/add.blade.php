@extends('dashboard.app')

@section('title', 'Buy A Money')

@section('content')
    <form {{ route('selladd') }} method="post">
        {{ csrf_field() }}
        <div class="columns is-fullwidth">
            <div class="column is-6">
                <div class="field">
                    <label class="label">Jumlah Uang</label>
                    <div class="control has-icons-left">
                        <input class="input is-primary" type="text" placeholder="Nominal" name="amount" value="{{ old('amount') }}">
                        <span class="icon is-left">
                    <i class="fa fa-money"></i>
                </span>
                    </div>
                    <p class="help">Nominal hanya bilangan bulat.</p>
                </div>
                <div class="field">
                    <label class="label">Mata Uang</label>
                    <div class="control has-icons-left">
                        <div class="select is-primary is-fullwidth">
                            <select name="currency">
                                @foreach($currency as $item)
                                    <option value="{{ $item->id }}">{{ $item->currency_name }} - {{$item->payment_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <span class="icon is-left">
                            <i class="fa fa-dollar"></i>
                        </span>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Dikirim Ke</label>
                    <div class="control has-icons-left">
                        <div class="select is-primary is-fullwidth">
                            <select name="bank">
                                @foreach($bank as $it)
                                    <option value="{{ $it->id }}">{{ $it->currency}} - {{$it->payment_title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <span class="icon is-left">
                            <i class="fa fa-bank"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="column is-6">
                <div class="field">
                    <label class="label">Pesan Untuk Kami (Optional)</label>
                    <textarea class="textarea is-primary" placeholder="Tulis Pesan yang ingin anda sampaikan ke kami untuk transaksi ini." name="message">{{ old('message') }}</textarea>
                </div>
            </div>
        </div>
        <div class="control has-text-centered">
            <input type="submit" class="button is-primary" name="count" value="Hitung"></input>
            <button class="button is-light">Tambah Transaksi</button>
        </div>
    </form>

    <div class="content">
        <br>
        @if (\Session::has('count_money'))
            <div class="box">
                <span class="has-text-weight-bold">Jumlah yang harus anda bayarkan:</span>
                <p>Rp {{ @number_format(\Session::get('count_money'),0, ',', '.') }}</p>
            </div>
        @endif
    </div>
@endsection