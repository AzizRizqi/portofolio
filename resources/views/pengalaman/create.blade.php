@extends('layout')
@section('content')
    <h1>Tambah Pengalaman</h1>

    <form action="{{ route('pengalaman.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="Posisi">Posisi</label>
            <input type="text" name="posisi" id="posisi" class="form-control">
        </div>
        <div class="mb-3">
            <label for="perusahaan">Perusahaan</label>
            <input type="text" name="perusahaan" id="perusahaan" class="form-control">
        </div>
        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control">
        </div>
        <div class="mb-3">
            <label for="tahun">tahun</label>
            <input type="" name="tahun" id="tahun" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">simpan</button>
            <a href="{{ url('pengalaman') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
