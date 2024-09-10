@extends('layout')
@section('content')
    <h1>Tambah User</h1>

    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_lengkap">Nama</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password">Pasword</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">simpan</button>
            <a href="{{ url('profile') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
