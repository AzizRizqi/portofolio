@extends('portofolio.index')
@section('content')
    <section class="section" id="portfolio">
        <div class="container text-center">
            <h6 class="section-title mb-6 ">Pengalaman Saya</h6>
            <!-- row -->
            @foreach ($experiences as $experience)
            <div class="row mb-5">
                <div class="about-caption">
                    <h4 class="company-name mb-2">{{ $experience->perusahaan }}</h4>{{ $experience->tahun }} <!-- Bagian baru untuk perusahaan -->
                    <h2 class="section-title mb-3">{{ $experience->posisi }}</h2>
                    <p>
                        {{ $experience->deskripsi }}
                    </p>
                </div>
            </div><!-- end of row -->
            @endforeach
        </div><!-- end of container -->
    </section> <!-- end of portfolio section -->
@endsection
