@php
use Carbon\Carbon;
use App\Models\Blog\Post;
@endphp
@extends('user.app')

@section('title', 'Berita')

@section('css')

    <link href="{{ url('assets/css/style-blog.css') }}" rel="stylesheet">

@endsection

@section('content')


    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    @forelse ($data_blog as $blog)
                        <article class="entry">
                            <div class="entry-img">
                                <img src="{{ url('/storage/' . $blog->gambar) }}" class="img-fluid">
                            </div>
                            <h2 class="entry-title">
                                <a href="blog-single.html">
                                    {{ $blog->title }}
                                </a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-person"></i>
                                        <a href="blog-single.html">
                                            {{ $blog->getUser->nama }}
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-clock"></i>
                                        <a href="blog-single.html">
                                            {{ Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at)->isoFormat('dddd, D MMMM Y H:mm:s') }}
                                        </a>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-chat-dots"></i>
                                        <a href="blog-single.html">12 Comments</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {!! $blog->kutipan !!}
                                </p>
                                <div class="read-more">
                                    <a href="{{ url('blog/berita/' . $blog->slug) }}">
                                        <i class="fa fa-sign-in"></i> Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </article>
                    @empty
                        <article class="entry">
                            <div class="entry-img">
                                <img src="{{ url('/gambar/no-images.png') }}" class="img-fluid">
                            </div>
                            <h2 class="entry-title">
                                <a href="#">
                                    <i>
                                        DATA TIDAK ADA
                                    </i>
                                </a>
                            </h2>
                        </article>
                    @endforelse
                    <div class="blog-pagination">
                        {{ $data_blog->links() }}
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
