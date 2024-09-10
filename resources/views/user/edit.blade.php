@extends('layout')
@section('content')
    <h1>Tambah skill</h1>

    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="posisi">Nama</label>
            <input type="text" name="nama" id="name" class="form-control" value="{{ $user->name }}">
        </div>
        <div class="mb-3">
            <label for="posisi">Nama</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">simpan</button>
            <a href="{{ url('user') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
