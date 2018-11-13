@extends('dashboard.app')

@section('title', 'Buy A Money')

@section('content')
    <div class="content">
        <div class="card events-card">
            <header class="card-header">
                <p class="card-header-title">
                   Bank
                </p>
                <a href="#" class="card-header-icon" aria-label="more options">
                  <span class="icon">
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </span>
                </a>
            </header>
            <div class="card-table">
                <div class="content">
                    <table class="table is-fullwidth is-striped">
                        <thead>
                        <tr>
                            <td width="5%"><i class="fa fa-bank"></i></td>
                            <td>Payment Title</td>
                            <td>Nama Bank</td>
                            <td>A/N</td>
                            <td>Nomer Rekening</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td width="5%"><i class="fa fa-bank"></i></td>
                                <td><a href="{{ route('banklist') }}/{{ $item->id }}">{{ $item->payment_title }}</a></td>
                                <td>{{ $item->bank_name }}</td>
                                <td>{{ $item->account_holder }}</td>
                                <td>{{ $item->account_number }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <footer class="card-footer">
                <a href="#" class="card-footer-item">Jika ada pertanyaan hubungi kami</a>
            </footer>
        </div>
    </div>
@endsection