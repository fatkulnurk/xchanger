@extends('dashboard.app')

@section('title', 'Detail Akun')

@section('content')

    <form action="{{ route('changeaccount') }}" method="post">
        {{ csrf_field() }}

        <div class="content">
            <div class="field">
                <label class="label">First Name</label>
                <div class="control">
                    <input class="input" type="text" value="{{ Auth::user()->first_name }}" name="first_name">
                </div>
            </div>

            <div class="field">
                <label class="label">Middle Name</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Optional" value="{{ $data->middle_name }}" name="middle_name">
                </div>
            </div>

            <div class="field">
                <label class="label">Last Name</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Optional" name="last_name">
                </div>
            </div>

            <div class="field">
                <label class="label">Gender</label>
                <div class="control">
                    <input class="input" type="text" value="{{ $data->gender }}" disabled>
                </div>
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="email" value="{{ $data->email }}" disabled>
                </div>
            </div>

            <div class="field">
                <label class="label">Phone Number</label>
                <div class="control">
                    <input class="input" type="text" value="{{ $data->phone_number }}" disabled>
                </div>
            </div>

            <div class="field">
                <label class="label">Birthday</label>
                <div class="control">
                    <input class="input" type="text" value="{{ $data->birthday }}" disabled>
                </div>
            </div>

            <div class="field">
                <label class="label">Country</label>
                <div class="control">
                    <input class="input" type="text" value="{{ $data->country }}" disabled>
                </div>
            </div>

            <div class="field">
                <label class="label has-text-danger">Pin Akun</label>
                <div class="control">
                    <input class="input is-link" type="text" value="{{ $data->pin }}" disabled>
                </div>
            </div>

            <div class="field">
                <label class="label">Address</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Alamat anda" name="address"></textarea>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Update</button>
                </div>
            </div>
        </div>
    </form>

@endsection