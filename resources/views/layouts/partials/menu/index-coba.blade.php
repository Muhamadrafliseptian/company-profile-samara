    @extends('layouts.appAdmin')
    @section('index')
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">


                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                   </div>

                </div>
            </div>
        </div>

        <!-- ======= Hero Section ======= -->
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
                    <div class="carousel-item active">
                        <img src="{{ url('assets/img/hero-bg.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0;">
                            <h5>"An open platform One Spirit ECOSystem is a bridge enabling people to integrate their system
                                to become an Enterprise System. We can achieve it When we synergize.."</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('assets/img/hero-bg.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0;">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ url('assets/img/hero-bg.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0;">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
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

        <main id="main">
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
                </section>
                <section id="team" class="team section">
                    <div class="container" data-aos="fade-up">

                        <div class="section-title">
                            <h2>Blogs</h2>
                            <h3><span>news Blogs</span></h3>
                            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at
                                voluptas atque vitae autem.</p>
                        </div>

                        <div class="row">

                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                                data-aos-delay="100">
                                <div class="member">
                                    <div class="member-img">
                                        <img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}"
                                            class="img-fluid w-100" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>OSLOG tekan biaya Logistics</h4>
                                        <a href="{{ url('blog-coba') }}">see more</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                                data-aos-delay="100">
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
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                                data-aos-delay="100">
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
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                                data-aos-delay="100">
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
                <section id="contact" class="contact">
                    <div class="container" data-aos="fade-up">
                        <div class="section-title">
                            <h2>Contact</h2>
                            <h3><span>Contact Us</span></h3>
                            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at
                                voluptas atque vitae autem.</p>
                        </div>
                        <div class="col-lg-12">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="col form-group">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                        <br>
                        <div class="row" data-aos="fade-up" data-aos-delay="100">
                            <div class="col-lg-6 ">
                                <iframe class="mb-4 mb-lg-0"
                                    src="{{ url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0110981970392!2d106.78601371468598!3d-6.262267595467255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1a206b09c8b%3A0xc34e1845b9a02a81!2sIntegrasia%20Utama!5e0!3m2!1sid!2sid!4v1656501375004!5m2!1sid!2sid') }}"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade" frameborder="0"
                                    style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-6">
                                <div class="info-box mb-4">
                                    <i class="bx bx-map"></i>
                                    <h3>Visit Our Head Office (Jakarta):</h3>
                                    <p>Radio Dalam Square 1A</p>
                                    <p>Jl. Radio Dalam, Kel.Gandaria Utara, Kebayoran Baru</p>
                                    <p>Jakarta Selatan 12140</p>
                                    <p>Indonesia</p>
                                </div>
                                <div class="d-inline-flex">
                                    <div class="info-box  mb-4 me-2" style="width: 18rem">
                                        <i class="bx bx-envelope"></i>
                                        <h3>Email Us</h3>
                                        <p>contact@example.com</p>
                                    </div>
                                    <div class="info-box  mb-4" style="width: 20rem">
                                        <i class="bx bx-phone-call"></i>
                                        <h3>Call Us</h3>
                                        <p>+1 5589 55488 55</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section><!-- End Contact Section -->

            </main><!-- End #main -->
            <div id="preloader"></div>
            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>
        @endsection
