@extends('user.app')

@section('title', 'About Us')

@section('content')
     <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="fa-solid fa-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="fa-solid fa-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="fa-solid fa-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section>
    <section id="counts" class="counts">
         <div class="container">
          <div class="row">
            <div
              class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start"
              data-aos="fade-right"
              data-aos-delay="150"
            >
              <img src="assets/img/counts-img.svg" alt="" class="img-fluid" />
            </div>

            <div
              class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0"
              data-aos="fade-left"
              data-aos-delay="300"
            >
              <div class="content d-flex flex-column justify-content-center">
                <div class="row">
                  <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                      <i class="bi bi-emoji-smile"></i>
                      <span
                        data-purecounter-start="0"
                        data-purecounter-end="65"
                        data-purecounter-duration="1"
                        class="purecounter"
                      ></span>
                      <p>
                        <strong>Happy Clients</strong> consequuntur voluptas
                        nostrum aliquid ipsam architecto ut.
                      </p>
                    </div>
                  </div>

                  <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                      <i class="bi bi-journal-richtext"></i>
                      <span
                        data-purecounter-start="0"
                        data-purecounter-end="85"
                        data-purecounter-duration="1"
                        class="purecounter"
                      ></span>
                      <p>
                        <strong>Projects</strong> adipisci atque cum quia
                        aspernatur totam laudantium et quia dere tan
                      </p>
                    </div>
                  </div>

                  <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                      <i class="bi bi-clock"></i>
                      <span
                        data-purecounter-start="0"
                        data-purecounter-end="18"
                        data-purecounter-duration="1"
                        class="purecounter"
                      ></span>
                      <p>
                        <strong>Years of experience</strong> aut commodi quaerat
                        modi aliquam nam ducimus aut voluptate non vel
                      </p>
                    </div>
                  </div>

                  <div class="col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                      <i class="bi bi-award"></i>
                      <span
                        data-purecounter-start="0"
                        data-purecounter-end="15"
                        data-purecounter-duration="1"
                        class="purecounter"
                      ></span>
                      <p>
                        <strong>Awards</strong> rerum asperiores dolor alias quo
                        reprehenderit eum et nemo pad der
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End .content-->
            </div>
          </div>
        </div>
      </section>
<section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
        <h2>One Spirit Eco System</h2>
        <p>Integrationa Utama calls it the Integration Data Model (IDM). IDM is part of a platform that integrates all software produced. IDM can increase efficiency from the start, enabling customers to enjoy the full benefits of integrated and enterprise solutions in a more affordable way.</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-receipt"></i>
              <h4>IDM (Integrasia Data Model)</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
              <p></p>
            </div>
            <div class="icon-box mt-2" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-cube-alt"></i>
              <h4>Geospatial (One Spirit Map)</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            <div class="icon-box mt-2" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-images"></i>
              <h4>Tracking</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            <div class="icon-box mt-2" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-images"></i>
              <h4>IOT Platform</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/eco.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- ======= About Section ======= -->
    <section id="aboutus" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About</h2>
                <h3><span>Find Out More About Integrasia</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3>Visi</h3>
                    <ul>
                        <li>
                            <i class="bx bx-store-alt"></i>
                            <div>
                                <h5>
                                    @if (empty($visi->judul))
                                        -
                                    @else
                                        {{ $visi->judul }}
                                    @endif
                                </h5>
                                <p>
                                    @if (empty($visi->deskripsi))
                                        -
                                    @else
                                        {{ $visi->deskripsi }}
                                    @endif
                                </p>
                            </div>
                        </li>
                        <h3>Misi</h3>
                        @forelse ($misi as $data)
                            <li>
                                <i class="bx bx-images"></i>
                                <div>
                                    <h5>
                                        {{ $data->judul }}
                                    </h5>
                                    <p>
                                        {{ $data->deskripsi }}
                                    </p>
                                </div>
                            </li>
                        @empty
                            <li>
                                <i class="bx bx-images"></i>
                                <div>
                                    <h5>
                                        -
                                    </h5>
                                    <p>
                                        -
                                    </p>
                                </div>
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <br>
    <br>

    <section id="aboutus" class="about section">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Milestone</h2>
            </div>
            <img src="{{ asset('assets/img/milestone.png') }}" data-aos="fade-right" data-aos-delay="100"
                style="box-shadow: 2px 4px 50px rgb(208, 208, 208);" class="img-fluid rounded mx-auto d-block w-50"
                alt="...">
            <!-- End Milestone Section -->
        </div>
    </section>
    <br>
    <br>
    <div class="section-title">
        <h2>Partners</h2>
        <h3><span>Check our Partners</span></h3>
    </div>
    <section id="clients" class="clients section-bg">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                @forelse($data_partnert as $data)
                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <a href="{{ url('study_case') }}">
                            <img src="{{ url('/storage/' . $data->parnert_logo) }}" class="img-fluid">
                        </a>
                    </div>
                @empty
                    <div class="col-md-12 d-flex align-items-center justify-content-center text-center text-center">
                        <i>
                            <b>
                                " DATA SAAT INI BELUM TERSEDIA "
                            </b>
                        </i>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
