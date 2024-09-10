@extends('layout')
@section('content')
    <h1>Tambah Pendidikan</h1>

    <form action="{{ route('pendidikan.update', $education->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Nama_sekolah">Nama Sekolah</label>
            <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control"
                value="{{ $education->nama_sekolah }}">
        </div>
        <div class="mb-3">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{ $education->jurusan }}">
        </div>
        <div class="mb-3">
            <label for="tahun_lulus">Tahun Lulus</label>
            <input type="text" name="tahun_lulus" id="tahun_lulus" class="form-control" value="{{ $education->tahun_lulus }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">simpan</button>
            <a href="{{ url('pendidikan') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
