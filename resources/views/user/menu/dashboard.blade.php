@php
use Carbon\Carbon;
@endphp

@extends('user.app')

@section('title', 'Dashboard')

@section('content')

    <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
         @if (empty($data_hero->image))
                    <div class="alert alert-danger">
                        Data Tidak Ada
                    </div>
                @else
      <img src="{{ url('/storage/' . $data_hero->image) }}" class="img-fluid animated">
      @endif
      <h2 class="pt-0">Welcome to <span>{{ $profil_perusahaan->nama_perusahaan }}</span></h2>
      @if (empty($data_hero->deskripsi))
          <div class="alert alert-danger">
                        Data Tidak Ada
                    </div>
                    @else
      <p>{!! $data_hero->deskripsi !!}
        @endif
    </p>
      <div class="d-flex">
        <a href="#projects" class="btn-get-started scrollto">Solutions</a>
        <a href="#about" class="ms-3 btn btn-dark btn-outline d-flex align-items-center scrollto">Get Started</a>
        {{-- <a href="#about" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-arrow-down"></i><span></span>Get Started</a> --}}
      </div>
    </div>
  </section>
    <main id="main">
    <div id="about" class="">

        <section id="benefit-services" class="benefit-services">
            <div class="container">
         @php
         use App\Models\Pengaturan\Benefit;
                $data_benefit = Benefit::get();
            @endphp
        <div class="row gy-4">
        @forelse ($data_benefit as $benefit)
          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative">
                <div class="icon"><i class="{{ $benefit->benefit_icon }}"></i></div>
                <h4><a href="" class="stretched-link">{{ $benefit->benefit_judul }}</a></h4>
                <p>{{ $benefit->benefit_deskripsi }}</p>
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
                <!-- End Service Item -->
            </div>
        </div>
        </div>
    </section>

    <section id="project-solutions" class="project-solutions section-bg">
      <div class="container" data-aos="fade-up">
        @php
                use App\Models\Pengaturan\Projects;
                $data_project = Projects::get();
            @endphp
        <div class="section-title">
          <h2>project-solutions</h2>
          <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
        </div>
        <div class="project-solutions-isotope" data-project-solutions-filter="*" data-project-solutions-layout="masonry" data-project-solutions-sort="original-order" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4 project-solutions-container">
            @forelse ($data_project as $data)
            <div class="col-xl-4 col-md-6 project-solutions-item filter-app">
              <div class="project-solutions-wrap">
                <a href="{{ url('/storage/' . $data->image) }}" data-gallery="project-solutions-gallery-app"
                class="glightbox"><img src="{{ url('/storage/' . $data->image) }}" class="img-fluid" alt="">
                </a>
                <div class="project-solutions-info">
                  <h4><a href="{{ url('/projects/detail_projects/' . $data->slug) }}" title="More Details">{{ $data->judul }}</a></h4>
                  <p>{!!Str::limit($data->deskripsi, '30') !!}</p>
                <a href="{{ url('/projects/detail_projects/' . $data->slug) }}" class="btn btn-sm btn-primary px-2 mt-1">Read more</a>
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
            <!-- End project-solutions Item -->
          </div><!-- End project-solutions Container -->
        </div>
      </div>
    </section>

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients mt-5">
        <div class="section-title" data-aos="fade-up">
            <h2>Our Client</h2>
                <h6 class="text-secondary mt-3"><span>We bring a full range of experience and experts to each client to help companies <br>
                navigate their specific business situation.</span></h6>
            </div>
        <div class="container" data-aos="fade-right">
        <div class="row" data-aos="zoom-in">
            @forelse($data_partner as $data)
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center"
            >
            <img
                src="{{ url('/storage/' . $data->partner_logo) }}"
                class="img-fluid"
                alt=""
            />
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
    <!-- End Clients Section -->

    <section id="" class="">
        <div class="section-title" data-aos="fade-up">
                <h2>Our Partner</h2>
                    <h6 class="text-secondary mt-3"><span>We bring a full range of experience and experts to each client to help companies <br>
                    navigate their specific business situation.</span></h6>
                </div>
        <div class="container" data-aos="fade-right">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach ($data_clients as $data)
            <div class="col">
        <div class="card">
        <img src="{{ url('/storage/' . $data->image) }}" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $data->nama }}</h5>
            <p class="card-text">{!! $data->deskripsi !!}</p>
        </div>
        </div>
        </div>
        @endforeach
        </div>
        </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials mt-5">
            <div class="container" data-aos="fade-up">
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
                        @foreach ($data_testimonial as $data)
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
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
                    <h2>Blogs</h2>
                    <h3><span>News Blogs</span></h3>
                    <p>
                        Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                        vitae autem.
                    </p>
                </div>

          <div class="row gy-5">
            @forelse ($data_blog as $data)
            <div
              class="col-xl-4 col-md-6"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="post-item position-relative h-100">
                <div class="post-img position-relative overflow-hidden">
                  <img
                    src="{{ url('/storage/' . $data->gambar) }}"
                    class="img-fluid h-100 w-100"
                    alt=""
                  />
                  <span class="post-date">{{ Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->isoFormat('dddd, D MMMM Y H:mm:s') }}
                  </span>
                </div>

                <div class="post-content d-flex flex-column">
                  <h3 class="post-title">
                   {{ $data->title }}
                  </h3>

                  <div class="meta d-flex align-items-center">
                    <div class="d-flex align-items-center">
                      <i class="bi bi-person"></i>
                      <span class="ps-2">{{ $data->getUser->nama }}</span>
                    </div>
                    <span class="px-3 text-black-50">/</span>
                    <div class="d-flex align-items-center">
                      <i class="bi bi-folder2"></i>
                      <span class="ps-2">{{ $data->getKategori->nama_kategori }}</span>
                    </div>
                  </div>

                  <hr />

                  <a href="{{ url('/blog/berita/' . $data->slug) }}" class="readmore stretched-link"
                    ><span>Read More</span><i class="bi bi-arrow-right"></i
                  ></a>
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
            <!-- End post item -->
          </div>
        </div>
    </section>
      <!-- End Recent Blog Posts Section -->
    @endsection
