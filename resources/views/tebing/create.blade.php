@extends('layout/navbar')

@section('title', 'Tambahkan Informasi Tebing')
@section('container')

<div class="container">
    <h1 class="mt-3">Form Tambah Data Tebing</h1>

    <form method="post" action="/crags" class="my-3">
        @csrf
        <div class="form-group">
            <label for="nama" class="form-label">Nama Tebing</label>
            <div class="input-group mb-3">
                <input 
                    type="text" 
                    class="form-control @error('nama') is-invalid @enderror"
                    id="nama" 
                    name="nama"
                    placeholder="Misal: Siung">
                @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="lokasi" class="form-label">Lokasi</label>
            <div class="input-group mb-3">
                <input
                    type="text" 
                    class="form-control @error('lokasi') is-invalid @enderror"
                    id="lokasi" 
                    name="lokasi" 
                    placeholder="Misal: Gunungkidul">
                @error('lokasi') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="provinsi" class="form-label">Provinsi</label>
            <div class="input-group mb-3">
                <input 
                    type="text" 
                    class="form-control @error('provinsi') is-invalid @enderror"
                    id="provinsi"
                    name="provinsi"
                    placeholder="Misal: Jawa Tengah, Daerah Istimewa Yogyakarta">
                @error('provinsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="form-group">    
            <label for="jenis-batuan" class="form-label">Jenis Batuan</label>
            <div class="input-group mb-3">
                <input 
                    type="text" 
                    class="form-control @error('jenis_batuan') is-invalid @enderror"
                    id="jenis-batuan" 
                    name="jenis_batuan" 
                    placeholder="Misal: Karst, Artificial Wall, Andesit">
                @error('jenis_batuan') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="retribusi" class="form-label">Biaya Retribusi</label>
            <div class="input-group mb-3">
                <span class="input-group-text">Rp</span>
                <input 
                    type="text" 
                    class="form-control @error('retribusi') is-invalid @enderror"
                    id="retribusi" 
                    name="retribusi"
                    placeholder="Misal: 10000">
                @error('retribusi') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="jalur" class="form-label">Jumlah Jalur</label>
            <div class="input-group mb-3">
                <input 
                    type="text" 
                    class="form-control @error('jumlah_jalur') is-invalid @enderror"
                    id="jalur" 
                    name="jumlah_jalur" 
                    placeholder="Misal: 5">
                    @error('jumlah_jalur')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="jenis-pemanjatan" class="form-label">Jenis Pemanjatan</label>
            <div class="input-group mb-3">
                <input 
                    type="text" 
                    class="form-control @error('jenis_pemanjatan') is-invalid @enderror"
                    id="jenis-pemanjatan" 
                    name="jenis_pemanjatan"
                    placeholder="Misal: Sport, Artificial/Traditional, Boulder">
                @error('jenis_pemanjatan') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="/crags" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection