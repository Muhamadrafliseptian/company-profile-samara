@extends('user.app')

@section('title', $detail->why_us_name)

@section('content')
    <section id="geospatialplatform" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center text-light">
                {{ $detail->why_us_name }}
            </h1>
            <h5 class="text-center text-light">
                {{ $detail->why_us_deskripsi }}
            </h5>
        </div>
    </section>

    <div class="container" data-aos="fade-up">
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>After Sales Services</h2>
                    <h3> <span>We Delivered
                            to You</span></h3>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6 ">
                    <img class="img-fluid mb-4 mb-lg-0" style="border:0; width: 80%; height: 400px;"
                        src="{{ url('/storage/' . $detail->why_us_image) }}" alt="">
                </div>
                <div class="col-lg-6">
                    <p>
                        {{ $detail->why_us_deskripsi }}
                    </p>
                </div>
            </div>
    </div>
    </section>
@endsection
