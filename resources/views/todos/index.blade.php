@extends('layouts.main')

@section('title', 'Todo List')

@section('content')
    <form action="/" method="post">
        @csrf
        <div class="input-group input-group-md mb-3">
            <input type="text" class="form-control" placeholder="Tambah Aktivitas" name="todo">
            <button class="btn btn-success" type="submit">Tambah</button>
        </div>
    </form>
    <ol>
        @foreach ($todos as $item)
            <li>{{ $item->todo }}</li>
            <div class="d-flex flex-row-mb3">
                <div class="edit-btn mb-3 me-2">
                    <a href="/{{ $item->id }}/edit"><button class="btn btn-outline-info btn-sm mt-1">Edit</button></a>
                </div>
                <form action="/{{ $item->id }}" method="post">
                    @csrf
                    @method('delete')
                    <div class="delete-btn">
                        <button class="btn btn-outline-danger btn-sm mt-1">Delete</button>
                    </div>
                </form>
            </div>
        @endforeach
    </ol>
@endsection
