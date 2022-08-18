@extends('user.app')

@section('title', 'Dashboard')

@section('content')
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></span>
                    </button>
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid-lg" data-aos="zoom-out" data-aos-delay="100">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @php
                    $i = 1;
                @endphp
                @forelse ($data_carousel as $data)
                    <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                        @php
                            $i++;
                        @endphp
                        <img src="{{ url('/storage/' . $data->carousel_gambar) }}" class="d-block" style="width: 100%;">
                        <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0;">
                            <h5>{{ $data->carousel_judul }}</h5>
                            <p>{{ $data->carousel_deskripsi }}</p>
                        </div>
                    </div>
                @empty
                    <div class="carousel-item active">
                        <img src="{{ url('/gambar/404-coba.jpg') }}" class="d-block" style="width: 100%; height: 600px;">
                        <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0;">
                            <h5>Data Tidak Ada</h5>
                            <p>
                                Tidak Ditemukan
                            </p>
                        </div>
                    </div>
                @endforelse
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>


    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Video</h2>
                <h3><span>Integrasia Utama</span></h3>
            </div>


            <div class="card" style="border: none;">
                <video class="w-100 h-100" controls>
                    <source src="{{ url('assets/video/test.mp4') }}" type="video/mp4">
                    <source src="{{ url('assets/video/test.mp4') }}" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>


        </div>
    </section>

    </div>
    <main id="main">
        @include('user.menu.benefit')

        <div class="section-title">
            <h2>Testimonials</h2>
            <h3><span>Check our Testimonials</span></h3>
        </div>

        @forelse ($data_testimonial as $data)
        @empty
            <div class="container">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="alert alert-danger text-center">
                        <i>
                            <b>
                                " Data Tidak Ada "
                            </b>
                        </i>
                    </div>
                </div>
            </div>
        @endforelse
        <!-- ======= Testimonials Section ======= -->
        {{-- <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    {{-- @foreach ($data_testimonial as $data)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ url('/storage/' . $data->testimonial_home_profile) }}"
                                class="testimonial-img" alt="">
                                <h3>{{ $data->testimonial_home_name }}</h3>
                                <h4>{{ $data->testimonial_home_jobtitle }}</h4>
                                <a href="{{ url('study-case') }}" class="text-light">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {{ $data->testimonial_home_caption }}
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </a>
                            </div>
                        </div>
                        @endforeach --}}
        </div>
        <div class="swiper-pagination"></div>
        </div>

        </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Portfolio Section ======= -->
        <!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Blogs</h2>
                    <h3><span>news Blogs</span></h3>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at
                        voluptas atque vitae autem.</p>
                </div>

                <div class="row">
                    @forelse ($data_blog as $data)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid w-100"
                                        alt="">
                                </div>
                                <div class="member-info">
                                    <h4>OSLOG tekan biaya Logistics</h4>
                                    <a href="{{ url('blog-coba') }}">see more</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
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
    @endsection
