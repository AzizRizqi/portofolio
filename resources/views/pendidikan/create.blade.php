@extends('layout')
@section('content')
    <h1>Tambah pengalaman</h1>

    <form action="{{ route('pendidikan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_sekolah">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control">
        </div>
        <div class="mb-3">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" class="form-control">
        </div>
        <div class="mb-3">
            <label for="tahun_lulus">tahun_lulus</label>
            <input type="number" name="tahun_lulus" id="tahun_lulus" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">simpan</button>
            <a href="{{ url('pendidikan') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
