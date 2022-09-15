@extends('layouts.main')

@section('title', 'About')

@section('content')
    <div class="text-center mb-4">
        <img src="./assets/{{ $biodata->image }}.png" alt="me" width="150">
    </div>
    <h5 class="text-center">Nama: {{ $biodata->name }}</h5>
    <h5 class="text-center">NIM: {{ $biodata->nim }}</h5>
    <h5 class="text-center">Tempat, Tanggal Lahir: {{ $biodata->born_place }}, {{ date('d-m-Y',strtotime($biodata->birth_date)) }}</h5>
    <h5 class="text-center">Alamat: {{ $biodata->address }}</h5>
@endsection
