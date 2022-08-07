@extends('layouts.appAdmin')
@section('study-case')
    <!-- ======= Hero Section ======= -->
    <section id="mapGIS" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center text-light">Study Case</h1>
        </div>
    </section>
    <br>
    <br>

    <main id="main">
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Study Case</h2>
                    <h3><span>Check Our Customer Study Case</span></h3>
                </div>

                <!-- ======= Feature owner partner ======= -->
                <div class="container mt-5">
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card2 me-2 mb-2" style="border: none; box-shadow: 0px 3px 3px rgb(174, 214, 255)">
                                <iframe autoplay="1" controls="0" class="w-100" style="height: 385px"
                                    src="{{ url('https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1" allow="autoplay') }}">
                                </iframe>
                                <div class="card-body">
                                    <img src="{{ asset('assets/img/clients/client-1.png') }}" width="30px" height="30px"
                                        class="logo" alt="" />
                                    <h3 class="card-title">MYOB</h3>
                                    <p class="card-text">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam
                                        aliquid dolor, laudantium vero quae omnis vel itaque. Quidem
                                        assumenda dolore praesentium dolor exercitationem, laborum ullam
                                        deleniti delectus eos eum facilis?
                                    </p>
                                    <a href="{{ url('single_partner') }}" class="btn btn-primary btn-sm text-md-end">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card2" style="border: none; box-shadow: 0px 3px 3px rgb(174, 214, 255)">
                                <iframe autoplay="1" controls="0" class="w-100" style="height: 385px"
                                    src="https://www.youtube.com/embed/c9Q4XHIQHcA">
                                </iframe>
                                <div class="card-body">
                                    <img src="{{ asset('assets/img/clients/client-2.png') }}" width="30px" height="30px"
                                        class="logo" alt="" />
                                    <h3 class="card-title">OSLOG Mobile</h3>
                                    <p class="card-text">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam
                                        aliquid dolor, laudantium vero quae omnis vel itaque. Quidem
                                        assumenda dolore praesentium dolor exercitationem, laborum ullam
                                        deleniti delectus eos eum facilis?
                                    </p>
                                    <a href="{{ url('single_partner') }}" class="btn btn-primary btn-sm text-md-end">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card2 me-2 mb-2" style="border: none; box-shadow: 0px 3px 3px rgb(174, 214, 255)">
                                <iframe autoplay="10" controls="0" class="w-100" style="height: 385px"
                                    src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                </iframe>
                                <div class="card-body">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f9/Phoenicopterus_ruber_in_S%C3%A3o_Paulo_Zoo.jpg"
                                        width="30px" height="30px" class="logo" alt="" />
                                    <h3 class="card-title">OSLOG Mobile</h3>
                                    <p class="card-text">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam
                                        aliquid dolor, laudantium vero quae omnis vel itaque. Quidem
                                        assumenda dolore praesentium dolor exercitationem, laborum ullam
                                        deleniti delectus eos eum facilis?
                                    </p>
                                    <a href="" class="btn btn-primary btn-sm text-md-end">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card2" style="border: none; box-shadow: 0px 3px 3px rgb(174, 214, 255)">
                                <iframe autoplay="10" controls="0" class="w-100" style="height: 385px"
                                    src="https://www.youtube.com/embed/vg0XKHgb9qQ">
                                </iframe>
                                <div class="card-body">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f9/Phoenicopterus_ruber_in_S%C3%A3o_Paulo_Zoo.jpg"
                                        width="30px" height="30px" class="logo" alt="" />
                                    <h3 class="card-title">OSLOG Mobile</h3>
                                    <p class="card-text">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam
                                        aliquid dolor, laudantium vero quae omnis vel itaque. Quidem
                                        assumenda dolore praesentium dolor exercitationem, laborum ullam
                                        deleniti delectus eos eum facilis?
                                    </p>
                                    <a href="" class="btn btn-primary btn-sm text-md-end">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ======= END Feature owner partner ======= -->






            </div>

            </div>
        </section>

    </main><!-- End #main -->
@endsection
