@extends('dashboard.app')

@section('title', 'Ganti Password')

@section('content')

    <form action="{{ route('changepassword') }}" method="post">
        {{ csrf_field() }}
        <div class="field">
            <label>New Password</label>
            <div class="control">
                <input class="input" type="text" name="password">
            </div>
        </div>
        <div class="field">
            <label>New Password (Ulangi)</label>
            <div class="control">
                <input class="input" type="password" name="newpassword">
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button class="button is-primary" type="submit">Submit</button>
                <button class="button is-light" type="reset">Cancel</button>
            </div>
        </div>
    </form>
@endsection