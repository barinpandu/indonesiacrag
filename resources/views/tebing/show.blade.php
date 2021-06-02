@extends('layout/navbar')

<title>{{ $tebing->nama }}</title>
@section('container')

<div class="container">
    <h1 class="mt-3">Informasi Tebing</h1>
    <div class="card" style="width: 30rem;">
        <div class="card-body">
            <h5 class="card-title"> Tebing {{ $tebing->nama }} </h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $tebing->lokasi }}, {{ $tebing->provinsi }}</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="submit" class="btn btn-primary">Edit</button>
            <button type="submit" class="btn btn-danger">Hapus</button>
            <a href="/crags" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
    
</div>
@endsection