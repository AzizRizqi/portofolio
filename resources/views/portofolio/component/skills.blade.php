@extends('portofolio.index')
@section('content')
    <section class="section" id="portfolio">
        <div class="container text-center">
            <p class="section-subtitle">apa yang saya bisa ?</p>
            <h6 class="section-title mb-6">Kemampuan Saya</h6>
            <!-- row -->
            <div class="row">
                @foreach ($skills as $skill)
                <div class="col-md-4 mb-4">
                    <div class="skill-card">
                        <div class="skill-card-content">
                            <h4 class="skill-title">{{ $skill->skills }}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!-- end of row -->
        </div><!-- end of container -->
    </section> <!-- end of portfolio section -->
@endsection
