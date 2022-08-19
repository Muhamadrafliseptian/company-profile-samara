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
                    <img class="img-fluid mb-4 mb-lg-0" style="border:0; width: 100%; height: 384px;"
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
    <main id="main">
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Benefits</h2>
                    <h3>What is <span>benefits</span> can you got?</h3>
                </div>
                <!-- ======= Featured Services Section ======= -->
                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="100">
                        <h3>Vision</h3>
                        <ul>
                            <li>
                                <i class="bx bx-store-alt"></i>
                                <div>
                                    <h5>Integration Brings Value</h5>
                                    <p> Lorem ipsum dolor sit amet, consectetur</p>
                                </div>
                            </li>
                            <h3>Mission</h3>
                            <li>
                                <i class="bx bx-images"></i>
                                <div>
                                    <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                    <p>We strive to ensure that integration system and technologies across the board in your
                                        business will ultimately bring value.</p>
                                </div>
                            </li>
                            <li>
                                <i class="bx bx-images"></i>
                                <div>
                                    <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                    <p>In order to be able to do this, we will conduct our MISSION to be committed to
                                        provide integrated solutions and benefit the customers with innovation and ‘state of
                                        the art’ technology.</p>
                                </div>
                            </li>
                            <li>
                                <i class="bx bx-images"></i>
                                <div>
                                    <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                                    <p>Socially responsible to the community and become an environmental friendly company,
                                        and contribute to the country with excellent services and products.</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('assets/img/whyus1.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

            </div>
        </section>
    </main>
@endsection
