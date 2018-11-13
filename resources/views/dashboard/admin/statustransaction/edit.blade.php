@extends('dashboard.admin')

@section('title', 'Status Transaction')

@section('content')
    @foreach($data as $data)
    <form action="{{ route('statustransaction.update', $data->id) }}" method="Post">

        {{ csrf_field() }}

        {{ method_field('PUT') }}

        <div class="field">
            <label class="label">Status Transaction</label>
            <div class="control">
                <input class="input is-link" type="text" name="name" value="{{ $data->name }}">
            </div>
        </div>
        <div class="field">
            <label class="label">Description</label>
            <div class="control">
                <textarea class="textarea" placeholder="(optional)" name="description">{{ $data->description }}</textarea>
            </div>
        </div>
        <button type="submit" class="button is-info">Submit</button>

    </form>

    @endforeach

@endsection