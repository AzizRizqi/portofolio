@extends('layout')
@section('content')
    <h1>Tambah Pengalaman</h1>

    <form action="{{ route('pengalaman.update', $pengalaman->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="posisi">Posisi</label>
            <input type="text" name="posisi" id="posisi" class="form-control" value="{{ $pengalaman->posisi }}">
        </div>
        <div class="mb-3">
            <label for="perusahaan">Perusahaan</label>
            <input type="text" name="perusahaan" id="perusahaan" class="form-control" value="{{ $pengalaman->perusahaan }}">
        </div>
        <div class="mb-3">
            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $pengalaman->deskripsi }}">
        </div>
        <div class="mb-3">
            <label for="tahun">Tahun</label>
            <input type="text" name="tahun" id="tahun" class="form-control" value="{{ $pengalaman->tahun }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">ADD</button>
            <a href="{{ url('pengalaman') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
