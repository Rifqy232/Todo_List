@extends('layouts.main')

@section('title', 'About')

@section('content')
    <div class="text-center mb-4">
        <img src="./assets/{{ $biodata->image }}.png" alt="me" width="150">
    </div>
    <div class="row mt-5">
        <div class="col-6">
            <h5 class="ms-3">Nama: {{ $biodata->name }}</h5>
            <h5 class="ms-3">NIM: {{ $biodata->nim }}</h5>
            <h5 class="ms-3">Tempat, Tanggal Lahir: {{ $biodata->born_place }},
                {{ date('d-m-Y', strtotime($biodata->birth_date)) }}</h5>
        </div>
        <div class="col-6">
            <h5 class="ms-3">Alamat: {{ $biodata->address }}</h5>
            <h5 class="ms-3">Hobi:</h5>
            <ul>
                @foreach ($hobbies as $item)
                    <li class="ms-5"><h5>{{ $item->hobby }}</h5></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
