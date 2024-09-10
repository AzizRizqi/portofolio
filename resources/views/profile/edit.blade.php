@extends('layout')
@section('content')

    <h1>Edit Profile</h1>
    <form action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_lengkap">Nama</label>
            <input type="text" name="nama" id="name" class="form-control" value="{{ $profile->nama }}">
        </div>
        <div class="mb-3">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" class="form-control">
            </div>
            @php
            $image = isset($profile->gambar) ? $profile->gambar : null;
            @endphp
            @if ($profile->gambar)
            <img src="{{ asset('storage/'. $image) }}" alt="" width="200" height="200">
            @else
            @php
                echo 'tidak ada gambar';
            @endphp
            @endif
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $profile->email }}">
        </div>
        <div class="mb-3">
            <label for="deskripsi">deskripsi</label>
            <input type="deskripsi" name="deskripsi" id="deskripsi" class="form-control" value="{{ $profile->deskripsi }}">
        </div>
        <div class="mb-3">
            <label for="no_telepon">no_telepon</label>
            <input type="no_telepon" name="no_telepon" id="no_telepon" class="form-control" value="{{ $profile->no_telepon }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">simpan</button>
            <a href="{{ url('profile') }}" class="btn btn-secondary">back</a>
        </div>


    </form>

@endsection
