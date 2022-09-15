@extends('layouts.main')

@section('title', 'Edit Todo')

@section('content')
    <form action="/{{ $item->id }}" method="post">
        @csrf
        @method('put')
        <div class="input-group input-group-md mb-3">
            <input type="text" class="form-control" placeholder="Edit Aktivitas" name="todo" value="{{ $item->todo }}">
            <button class="btn btn-success" type="submit">Edit</button>
        </div>
    </form>
@endsection
