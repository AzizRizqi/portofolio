@extends('layout')
@section('content')
    <h1>Tambah skill</h1>

    <form action="{{ route('skill.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="Skill">skill</label>
            <input type="text" name="skills" id="skills" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">simpan</button>
            <a href="{{ url('profile') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
