@extends('user.app')
@section('content')
    <section id="geospatialplatform" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center text-light">
                {{ $detail->solusi_nama }}
            </h1>
            <h5 class="text-center text-light">
                {{ $detail->solusi_deskripsi }}
            </h5>
        </div>
    </section>
    <br>
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Video</h2>
            <h3><span>Integrasia Utama</span></h3>
        </div>
        <div class=" position-relative">
            <div class="wrapper text-center">
                <img id="img-index" src="assets/img/ui2.webp" alt="">
                <div class="position-absolute top-50 start-50 translate-middle">
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
    </div>
    <div class="container" data-aos="fade-up">
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>User Interface</h2>
                    <h3><span>Geospatial Platforming Interface</span></h3>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6 ">
                    {{-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0110981970392!2d106.78601371468598!3d-6.262267595467255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1a206b09c8b%3A0xc34e1845b9a02a81!2sIntegrasia%20Utama!5e0!3m2!1sid!2sid!4v1656501375004!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> --}}
                    <img class="mb-4 mb-lg-0" style="border:0; width: 100%; height: 384px;"
                        src="{{ url('assets/img/ui2.webp') }}" alt="">
                </div>
                <div class="col-lg-6">
                    <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore necessitatibus natus incidunt
                        nihil suscipit adipisci asperiores, minus quidem labore est ipsum reiciendis cupiditate doloremque
                        laudantium delectus, repudiandae dolore architecto soluta?</P>
                </div>
            </div>
    </div>
    </section>
    <main id="main">

        @include('user.menu.benefit')

        <section id="faq" class="faq mb-0">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Why Better Than Competitor?</h2>
                    <h3><span>We Achieved People’s Trust By Our Great Service</span></h3>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                        vitae autem.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <ul class="faq-list">
                            <li class="card">
                                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a
                                    erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i
                                        class="bi bi-chevron-up icon-close"></i></div>
                                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet
                                        non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor
                                        purus non.
                                    </p>
                                </div>
                            </li>
                            <li class="card">
                                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">After Sales Wise
                                    <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                                </div>
                                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                        cursus turpis massa tincidunt dui.
                                    </p>
                                </div>
                            </li>

                            <li class="card">
                                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet
                                    consectetur adipiscing elit pellentesque habitant morbi? <i
                                        class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                                </div>
                                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus
                                        pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit.
                                        Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis
                                        tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                    </p>
                                </div>
                            </li>

                            <li class="card">
                                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor
                                    orci dapibus. Aliquam eleifend mi in nulla? <i
                                        class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                                </div>
                                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum
                                        velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend
                                        donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                        cursus turpis massa tincidunt dui.
                                    </p>
                                </div>
                            </li>
                            <li class="card">
                                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam
                                    pellentesque nec nam aliquam sem et tortor consequat? <i
                                        class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                                </div>
                                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in
                                        est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl
                                        suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                    </p>
                                </div>
                            </li>
                            <li class="card">
                                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae
                                    purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i
                                        class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                                </div>
                                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                    <p>
                                        Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo
                                        integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                                        eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                                        Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus.
                                        Nibh tellus molestie nunc non blandit massa enim nec.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h3><span>Galery Past Customer</span></h3>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($galeri_solusi as $data)
                        <div class="col">
                            <div class="card">
                                <img src="{{ url('/storage/' . $data->galeri_gambar) }}" class="card-img-top"
                                    height="200px">
                            </div>
                        </div>
                    @endforeach
                </div>
        </section>
    @endsection
