@extends('dashboard.admin')

@section('title', 'Status Transaction')

@section('content')
    <form action="{{ route('statustransaction.store') }}" method="post">
    {{ csrf_field() }}
        <div class="field">
            <label class="label">Status Transaction</label>
            <div class="control">
                <input class="input is-link" type="text" name="name" placeholder="Type Here">
            </div>
        </div>
        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <textarea class="textarea" placeholder="(optional)" name="description"></textarea>
            </div>
        </div>
    <button type="submit" class="button is-info">Submit</button>
</form>
@endsection