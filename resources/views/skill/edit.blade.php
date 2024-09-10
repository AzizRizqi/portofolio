@extends('layout')
@section('content')
    <h1>Tambah skill</h1>

    <form action="{{ route('skill.update', $skills->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="posisi">Skill</label>
            <input type="text" name="skills" id="skills" class="form-control" value="{{ $skills->skills }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">simpan</button>
            <a href="{{ url('skill') }}" class="btn btn-secondary">back</a>
        </div>
    </form>
@endsection
