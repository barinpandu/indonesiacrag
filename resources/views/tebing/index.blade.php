@extends('layout/navbar')

@section('title', 'Daftar Tebing')
@section('container')

<div class="container">
    <h1 class="mt-3">Crag List</h1>
    <a href="/crags/create" class="btn btn-primary mb-3">Tambah Tebing Baru</a>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <table class="table">
        <thead>
            <tr class="table-dark">
            <th scope="col">#</th>
            <th scope="col">Nama Tebing</th>
            <th scope="col">Lokasi</th>
            <th scope="col">Provinsi</th>
            <th scope="col">Jenis Batuan</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $tebings as $tebing)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $tebing->nama }}</td>
                    <td>{{ $tebing->lokasi }}</td>
                    <td>{{ $tebing->provinsi }}</td>
                    <td>{{ $tebing->jenis_batuan }}</td>
                <td>
                    <a href="/crags/{{ $tebing->id }}" class="badge bg-info">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection