@extends('portofolio.index')
@section('content')
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <img src="{{ asset('../storage/' . $profiles->gambar) }}" alt="" class=""
                style="width: 20rem; height:20rem; border-radius:5px">
            <h2 class="header-title"><br><br>
                <span class="up">HI!</span>
                <span class="down">I am {{ $profiles->nama }}</span>
            </h2>
            <p class="header-subtitle">{{ $profiles->deskripsi }}</p>

            {{-- <button class="btn btn-primary">Visit My Works</button> --}}
        </div>
    </header>
@endsection
