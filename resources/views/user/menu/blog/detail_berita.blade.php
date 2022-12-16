@php
use Carbon\Carbon;
use App\Models\Blog\Post;
use App\Models\BalasKomentar;
@endphp

@extends('user.app')

@section('title', $detail->title)

@section('css')
    <link href="{{ url('assets/css/style-blog.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="{{ url('/storage/' . $detail->gambar) }}" class="img-fluid w-100">
                        </div>

                        <h2 class="entry-title">
                            <a href="blog-single.html">
                                {{ $detail->title }}
                            </a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-person"></i>
                                    <a href="blog-single.html">
                                        {{ $detail->getUser->nama }}
                                    </a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                    <a href="blog-single.html">
                                        <time datetime="2020-01-01">
                                            {{ Carbon::createFromFormat('Y-m-d H:i:s', $detail->created_at)->isoFormat('dddd, D MMMM Y H:mm:s') }}
                                        </time>
                                    </a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="blog-single.html">{{ $komentar->count() }} Komentar</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                {!! $detail->deskripsi !!}
                            </p>
                        </div>

                        <div class="entry-footer">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li>
                                    <a href="#">
                                        {{ $detail->getKategori->nama_kategori }}
                                    </a>
                                </li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>

                    </article>

                    <div class="blog-comments">

                        <h4 class="comments-count">{{ $komentar->count() }} Komentar</h4>

                        @forelse($komentar as $data)
                            <div id="comment-2" class="comment">
                                <div class="d-flex">
                                    <div class="comment-img">
                                        <img src="{{ asset('assets/img/blog/comments-2.jpg') }}" alt="">
                                    </div>
                                    <div>
                                        <h5>
                                            <a href="#">{{ $data->nama }}</a>
                                        </h5>
                                        <time datetime="2020-01-01">
                                            {{ Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->isoFormat('dddd, D MMMM Y H:mm:s') }}
                                        </time>
                                        <p>
                                            {{ $data->pesan }}
                                        </p>
                                    </div>
                                </div>

                                @php
                                    $balas_komentar = BalasKomentar::where('id_komentar', $data->id)->get();
                                @endphp

                                @foreach ($balas_komentar as $item)
                                    <div id="comment-reply-1" class="comment comment-reply">
                                        <div class="d-flex">
                                            <div class="comment-img"><img
                                                    src="{{ asset('assets/img/blog/comments-3.jpg') }}" alt="">
                                            </div>
                                            <div>
                                                <h5>
                                                    <a href="#">
                                                        {{ $item->getUser->nama }}
                                                    </a>
                                                </h5>
                                                <time datetime="2020-01-01">
                                                    {{ Carbon::createFromFormat('Y-m-d H:i:s', $item->created_at)->isoFormat('dddd, D MMMM Y H:mm:s') }}
                                                </time>
                                                <p>
                                                    {{ $item->pesan }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @empty
                        @endforelse


                        <div class="reply-form">
                            <h4>Leave a Reply</h4>
                            <p>Your email address will not be published. Required fields are marked * </p>
                            <form action="{{ url('/blog/berita/' . $detail->id . '/kirim_komentar') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" name="nama" id="nama"
                                            placeholder="Your Name*">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="number" class="form-control" name="telepon" id="telepon"
                                            placeholder="Masukkan Telepon">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Your Email*">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="pesan" class="form-control" placeholder="Your Comment*" id="pesan"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Post Comment</button>

                            </form>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Kategori</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                @if (empty($data_kategori->count()))
                                    <i>
                                        <b>
                                            Belum ada Kategori
                                        </b>
                                    </i>
                                @else
                                    @foreach ($data_kategori as $data)
                                        <li>
                                            <a href="#"> {{ $data->nama_kategori }}
                                                <span>
                                                    @php
                                                        $blog = Post::where('id_kategori', $data->id)->count();
                                                        echo '(' . $blog . ')';
                                                    @endphp
                                                </span>
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>

                        <h3 class="sidebar-title">Berita Terkini</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach ($data_blog_terkini as $blog_terkini)
                                <div class="post-item clearfix">
                                    <img src="{{ url('/storage/' . $blog_terkini->gambar) }}" alt="">
                                    <h4>
                                        <a href="{{ url('/blog/berita/' . $blog_terkini->slug) }}">
                                            {{ $blog_terkini->title }}
                                        </a>
                                    </h4>
                                    <time>
                                        {{ Carbon::createFromFormat('Y-m-d H:i:s', $blog_terkini->created_at)->isoFormat('D MMMM Y') }}
                                    </time>
                                </div>
                            @endforeach
                        </div>

                        <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                @if (empty($data_tag->count() < 0))
                                    <i>
                                        <b>
                                            Belum ada Tag
                                        </b>
                                    </i>
                                @else
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
