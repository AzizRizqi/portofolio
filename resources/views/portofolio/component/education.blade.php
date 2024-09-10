@extends('portofolio.index')
@section('content')
    <section class="section" id="service">
        <div class="container text-center">
            <p class="section-subtitle">pendidikan</p>
            <h6 class="section-title mb-6">Nama_Sekolah</h6>
            <!-- row -->
            <div class="row">
                @foreach ($educations as $education)
                <div class="about-caption">
                    <h2 class="section-title mb-3">{{ $education->nama_sekolah }}</h2>
                    <p>
                        Lulus Tahun,{{ $education->tahun_lulus }}
                    </p>
                </div>
                @endforeach
            </div><!-- end of row -->
        </div>
    </section><!-- end of service section -->
@endsection
