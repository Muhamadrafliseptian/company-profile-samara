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
                @php
                    $i = 1;
                @endphp
                @foreach ($data_carousel as $data)
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="{{ $i == 1 ? 'active' : '' }}" aria-current="true"
                        aria-label="Slide {{ $i }}"></button>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </div>
            <div class="carousel-inner">
                @php
                    $i = 1;
                @endphp
                @foreach ($data_carousel as $data)
                    <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                        @php
                            $i++;
                        @endphp
                        <img src="{{ url('/storage/' . $data->carousel_gambar) }}" class="d-block w-100">
                        <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0;">
                            <h5>{{ $data->carousel_judul }}</h5>
                            <p>{{ $data->carousel_deskripsi }}</p>
                        </div>
                    </div>
                @endforeach
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


            <div class=" position-relative">
                <div class="wrapper text-center">
                    <img id="img-index" src="assets/img/testimonials/testimonials-1.jpg" alt="">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <!-- Button trigger modal -->
                        {{-- <button type="button" class=" video-btn" data-bs-toggle="modal" data-src="{{ url('https://www.youtube.com/embed/eU9rZpbfWwk') }}" data-bs-target="#myModal"> --}}
                        <img class="bi-video bi-play-circle-fill video-btn" src="{{ asset('assets/img/play.png') }}"
                            data-bs-toggle="modal" data-src="{{ url('https://www.youtube.com/embed/eU9rZpbfWwk') }}"
                            data-bs-target="#myModal" alt="">
                        {{-- <i class="bi bi-play-circle-fill video-btn" style="font-size: 100px; color: blue;"  data-bs-toggle="modal" data-src="{{ url('https://www.youtube.com/embed/eU9rZpbfWwk') }}" data-bs-target="#myModal" ></i> --}}
                        {{-- </button> --}}
                        {{-- <img src="assets/img/testimonials/testimonials-1.jpg" class="img-fluid " alt="">
                                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> --}}
                    </div>

                    <a href="#" class="lightbox play-btn mb-4"></a>
                </div>
            </div>


        </div>
    </section>

    </div>

    <main id="main">
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Benefits</h2>
                    <h3><span>What is benefits can you got?</span></h3>
                </div>
                <div class="row">
                    @php
                        use App\Models\Pengaturan\Benefit;
                        $data_benefit = Benefit::get();
                    @endphp
                    @foreach ($data_benefit as $benefit)
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon">
                                    <i class="{{ $benefit->benefit_icon }}"></i>
                                </div>
                                <h4 class="title">
                                    <a href="">{{ $benefit->benefit_judul }}</a>
                                </h4>
                                <p class="description">
                                    {{ $benefit->benefit_deskripsi }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
        <!-- End Featured Services Section -->

        <!-- ======= About Section ======= -->
        <!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <!-- End Skills Section -->

        <!-- ======= Counts Section ======= -->
        <!-- End Counts Section -->

        <!-- ======= Clients Section ======= -->
        <!-- End Clients Section -->

        <!-- ======= Services Section ======= -->
        <!-- End Services Section -->
        <div class="section-title">
            <h2>Testimonials</h2>
            <h3><span>Check our Testimonials</span></h3>
        </div>
        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="zoom-in">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <a href="{{ url('study-case') }}" class="text-light">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                    suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                    Maecen aliquam, risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </a>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/testimonials/testimonials-2.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <a href="{{ url('study-case') }}" class="text-light">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                    suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                    Maecen aliquam, risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </a>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/testimonials/testimonials-3.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <a href="{{ url('study-case') }}" class="text-light">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                    suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                    Maecen aliquam, risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </a>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <a href="{{ url('study-case') }}" class="text-light">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                    suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                    Maecen aliquam, risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </a>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/img/testimonials/testimonials-5.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <a href="{{ url('study-case') }}" class="text-light">
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                    suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                    Maecen aliquam, risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </a>
                            </div>
                        </div><!-- End testimonial item -->

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

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>OSLOG tekan biaya Logistics</h4>
                                <a href="">see more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>OSLOG tekan biaya Logistics</h4>
                                <a href="">see more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="member-info">
                                <h4>OSLOG tekan biaya Logistics</h4>
                                <a href="">see more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
