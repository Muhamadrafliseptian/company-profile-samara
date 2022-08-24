@php
use Carbon\Carbon;
@endphp

@extends('user.app')

@section('title', 'Study Case')

@section('content')
    <section id="mapGIS" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center text-light">Study Case</h1>
        </div>
    </section>
    <section id="study-case" class="study-case">
        <div class="container" data-aos="fade-up">
            <div class="section-title mt-0">
                <h2>Study Case</h2>
                <p>IDM can increase efficiency from the start, enabling customers to enjoy the full benefits of integrated
                    and enterprise solutions in a more affordable way.</p>
            </div>
            <div class="row g-5">
                @if ($data_study_case->count())
                    <div class="col-lg-12">
                        <div class="row gy-4 posts-list">

                            <div class="col-lg-12">
                                <article class="d-flex flex-column">

                                    <div class="post-img">
                                        <img src="{{ url('/storage/' . $data_study_case[0]->study_case_gambar) }}"
                                            class="img-fluid w-100" data="zoom-in">
                                    </div>

                                    <h2 class="title">
                                        <a href="blog-details.html">
                                            {{ $data_study_case[0]->study_case_judul }}
                                        </a>
                                    </h2>

                                    <div class="meta-top">
                                        <ul>
                                            <li class="d-flex align-items-center">
                                                <i class="bi bi-person"></i>
                                                <a href="blog-details.html">
                                                    {{ $data_study_case[0]->getUser->nama }}
                                                </a>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="bi bi-clock"></i>
                                                <a href="blog-details.html">
                                                    <time datetime="2022-01-01">
                                                        {{ Carbon::createFromFormat('Y-m-d H:i:s', $data_study_case[0]->created_at)->isoFormat('D MMMM Y') }}
                                                    </time>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="content">
                                        <p>
                                            {!! $data_study_case[0]->study_case_kutipan !!}
                                        </p>
                                    </div>

                                    <div class="read-more mt-auto align-self-end">
                                        <a href="blog-details.html">
                                            Selengkapnya
                                        </a>
                                    </div>

                                </article>
                            </div>

                            @forelse ($data_study_case->skip(1) as $data)
                                <div class="col-md-4">
                                    <article class="d-flex flex-column">

                                        <div class="post-img">
                                            <img src="{{ url('/storage/' . $data->study_case_gambar) }}" alt=""
                                                class="img-fluid" style="height: 300px;">
                                        </div>

                                        <h2 class="title">
                                            <a href="blog-details.html">
                                                {{ $data->study_case_judul }}
                                            </a>
                                        </h2>

                                        <div class="meta-top">
                                            <ul>
                                                <li class="d-flex align-items-center">
                                                    <i class="bi bi-person"></i>
                                                    <a href="blog-details.html">
                                                        {{ $data->getUser->nama }}
                                                    </a>
                                                </li>
                                                <li class="d-flex align-items-center">
                                                    <i class="bi bi-clock"></i>
                                                    <a href="blog-details.html">
                                                        <time datetime="2022-01-01">
                                                            {{ Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->isoFormat('D MMMM Y') }}
                                                        </time>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="content">
                                            <p>
                                                {{ $data->study_case_kutipan }}
                                            </p>
                                        </div>
                                        <div class="read-more mt-auto align-self-end">
                                            <a href="blog-details.html">
                                                Selengkapnya
                                            </a>
                                        </div>
                                    </article>
                                </div>
                            @empty
                                <div class="alert alert-danger text-center">
                                    <i>
                                        <b>
                                            " Data Tidak Ada "
                                        </b>
                                    </i>
                                </div>
                            @endforelse
                        </div>
                    </div>
                @else
                    <div class="alert alert-danger text-center">
                        <i>
                            <b>
                                " Data Tidak Ada "
                            </b>
                        </i>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
