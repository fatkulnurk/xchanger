@extends('dashboard.app')

@section('title', 'Details Bank')

@section('content')
    <div class="content">
        <h1 class="title">Detail Bank</h1>
        @foreach($data as $item)
        <table class="table table-borderless is-bordered">
            <tbody>
            <tr>
                <td>ID Bank</td>
                <td>:</td>
                <td>{{ $item->id }}</td>
            </tr>
            <tr>
                <td>Payment Title</td>
                <td>:</td>
                <td>{{ $item->payment_title }}</td>
            </tr>
            <tr>
                <td>Bank Name</td>
                <td>:</td>
                <td>{{ $item->bank_name }}</td>
            </tr>
            <tr>
                <td>Pemilik Rekening</td>
                <td>:</td>
                <td>{{ $item->account_holder }}</td>
            </tr>
            <tr>
                <td>Nomor Rekening</td>
                <td>:</td>
                <td>{{ $item->account_number }}</td>
            </tr>
            <tr>
                <td>Mata Uang</td>
                <td>:</td>
                <td>{{ $item->currency }}</td>
            </tr>
            <tr>
                <td>Deskripsi Pembayaran</td>
                <td>:</td>
                <td>{{ $item->description }}</td>
            </tr>
            </tbody>
        </table>

        @endforeach
        <p>
            <span class="has-text-weight-bold">INFORMASI TAMBAHAN</span> :<BR>
            Kami menyarankan menambahkan baru jika salah/tidak digunakan, tetapi jika anda ingin merubah atau menghapus data, silakan hubungi kami.
        </p>
    </div>
@endsection