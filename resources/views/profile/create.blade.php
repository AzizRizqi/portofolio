@extends('layout')
@section('content')
    <h1>Tambah User</h1>

    <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_lengkap">Nama</label>
            <input type="text" name="nama" id="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="deskripsi">deskripsi</label>
            <input type="deskripsi" name="deskripsi" id="deskripsi" class="form-control">
        </div>
        <div class="mb-3">
            <label for="no_telepon">no_telepon</label>
            <input type="no_telepon" name="no_telepon" id="no_telepon" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">simpan</button>
            <a href="{{ url('profile') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
