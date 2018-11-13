@extends('dashboard.admin')

@section('title', 'Type Transaction')

@section('content')
    @foreach($data as $data)
<form action="{{ route('typetransaction.update', $data->id) }}" method="Post">

    {{ csrf_field() }}

    {{ method_field('PUT') }}

    <div class="field">
        <label class="label">Name</label>
        <div class="control">
            <input class="input is-link" type="text" name="name" value="{{ $data->name }}">
        </div>
    </div>
    <div class="field">
        <label class="label">Description</label>
        <div class="control">
            <textarea class="textarea is-link" name="description">{{ $data->description }}</textarea>
        </div>
    </div>
    <button class="button is-info" type="submit">Submit</button>
</form>

@endforeach
@endsection