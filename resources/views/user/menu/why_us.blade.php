@extends('user.app')

@section('title', 'Why Us')

@section('content')
    <section id="mapGIS" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center text-light">Why Us</h1>
        </div>
    </section>
    <br>
    <br>
    <section id="faq" class="faq mb-3">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Why Choose US?</h2>
                <h3><span>We Achieved People’s Trust By Our Great Service</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>
            <section id="featured-services" class="featured-services">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        @forelse ($data_why_us as $data)
                            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                    <div class="icon">
                                        <i class="{{ $data->why_us_icon }}"></i>
                                    </div>
                                    <h4 class="title">
                                        <a href="">
                                            {{ $data->why_us_name }}
                                        </a>
                                    </h4>
                                    <p class="description">
                                        {{ $data->why_us_deskripsi }}
                                    </p>
                                    <a href="{{ url('/why-us-details1-') }}" class="description">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-12">
                                <div class="alert alert-danger text-center">
                                    <i>
                                        <b>
                                            " Data Tidak Ada "
                                        </b>
                                    </i>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
