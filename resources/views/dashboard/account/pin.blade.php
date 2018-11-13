@extends('dashboard.app')

@section('title', 'Detail Akun')

@section('content')

    <form action="{{ route('changepin') }}" method="post">
        {{ csrf_field() }}
        <div class="field">
            <label>New Pin</label>
            <div class="control">
                <input class="input" type="text" name="pin">
            </div>
        </div>
        <div class="field">
            <label>New Pin (Ulangi)</label>
            <div class="control">
                <input class="input" type="text" name="newpin">
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