@php
use Carbon\Carbon;
@endphp
@extends('user.app')

@section('title', 'About Us')

@section('content')
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
    <section id="aboutus" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>About</h2>
                <h3><span>Find Out More About Integrasia</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.a</p>
            </div>
            <div class="row"
                <div class="col-lg-12 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
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
        </div>
    </section>
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>MILESTONE</h2>
                <p>Our Gallery and Milestone</p>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @forelse ($milestone as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ url('/storage/' . $item->milestone_gambar) }}" class="img-fluid"
                            style="height: 300px;">
                        <div class="portfolio-info">
                            <h4>{{ $item->id }}</h4>
                            <p>
                                {{ Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->isoFormat('D MMMM Y') }}
                            </p>
                            <a href="{{ url('/storage/' . $item->milestone_gambar) }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link" title="{{ $item->id }}"><i
                                    class="bx bxs-show"></i></a>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
@endsection
