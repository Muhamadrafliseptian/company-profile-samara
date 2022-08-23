@extends('user.app')

@section('title', 'About Us')

@section('content')
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                    <div class="content">
                        @if (empty($profil_perusahaan->deskripsi))
                            <div class="alert alert-danger">
                                Data Tidak Ada
                            </div>
                        @else
                            {!! $profil_perusahaan->deskripsi !!}
                        @endif
                    </div>
                    <div class="accordion-list">
                    </div>
                </div>
                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" data-aos="zoom-in" data-aos-delay="150">
                    @if (empty($profil_perusahaan->logo))
                        <div class="alert alert-danger">
                            Data Tidak Ada
                        </div>
                    @else
                        <img src="{{ url('/storage/' . $profil_perusahaan->logo) }}" class="img-fluid">
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section id="counts" class="counts mb-0">
        <div class="container">
            <div class="section-title mt-5">
                <h2>Who we are?</h2>
                <p>IDM can increase efficiency from the start, enabling customers to enjoy the full benefits of integrated
                    and enterprise solutions in a more affordable way.</p>
            </div>
            <div class="row">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start"
                    data-aos="fade-right" data-aos-delay="150">
                </div>
                <div class="col-xl-12 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
                    <div class="content d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-emoji-smile"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="1"
                                        class="purecounter"></span>
                                    <p>
                                        <strong>Happy Clients</strong> consequuntur voluptas
                                        nostrum aliquid ipsam architecto ut.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-journal-richtext"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                                        class="purecounter"></span>
                                    <p>
                                        <strong>Projects</strong> adipisci atque cum quia
                                        aspernatur totam laudantium et quia dere tan
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-clock"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1"
                                        class="purecounter"></span>
                                    <p>
                                        <strong>Years of experience</strong> aut commodi quaerat
                                        modi aliquam nam ducimus aut voluptate non vel
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-award"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                        class="purecounter"></span>
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
    <section id="features" class="features counts">
        <div class="container" data-aos="fade-up">
            <div class="section-title mt-0">
                <h2>One Spirit Eco System</h2>
                <p>Integrationa Utama calls it the Integration Data Model (IDM). IDM is part of a platform that integrates
                    all software produced. IDM can increase efficiency from the start, enabling customers to enjoy the full
                    benefits of integrated and enterprise solutions in a more affordable way.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
                    <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-receipt"></i>
                        <h4>IDM (Integrasia Data Model)</h4>
                        <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
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
                    vitae autem.a</p>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    @if (empty($visi_misi))
                        <div class="alert alert-danger">
                            Visi Misi Belum Tersedia
                        </div>
                    @else
                        {!! $visi_misi->visi !!}
                        {!! $visi_misi->misi !!}
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>MILESTONE</h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/ui2.webp" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Juara 1 melanggar perintah Allah</h4>
              <p>22 Desember 2022</p>
              <a href="assets/img/ui2.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bxs-show"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/uimapGIS.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/uimapGIS.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bxs-show"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/GEOHR-PLATFORM.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/GEOHR-PLATFORM.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bxs-show"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/Screenshot-History-GeoHR-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/Screenshot-History-GeoHR-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bxs-show"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/mapGIS.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/mapGIS.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bxs-show"></i></a>
            </div>
          </div>
           <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bxs-show"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bxs-show"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bxs-show"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bxs-show"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
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
