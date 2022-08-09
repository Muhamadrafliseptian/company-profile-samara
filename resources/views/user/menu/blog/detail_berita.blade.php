@php
use Carbon\Carbon;
use App\Models\Blog\Post;
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
                            <img src="{{ url('/storage/' . $detail->gambar) }}" class="img-fluid">
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
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="blog-single.html">12 Comments</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                {{ $detail->deskripsi }}
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

                        <h4 class="comments-count">8 Comments</h4>

                        <div id="comment-1" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="{{ asset('assets/img/blog/comments-1.jpg') }}"
                                        alt=""></div>
                                <div>
                                    <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan, 2020</time>
                                    <p>
                                        Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut
                                        sapiente quis molestiae est qui cum soluta.
                                        Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                                    </p>
                                </div>
                            </div>
                        </div><!-- End comment #1 -->

                        <div id="comment-2" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="{{ asset('assets/img/blog/comments-2.jpg') }}"
                                        alt=""></div>
                                <div>
                                    <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan, 2020</time>
                                    <p>
                                        Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe.
                                        Officiis illo ut beatae.
                                    </p>
                                </div>
                            </div>

                            <div id="comment-reply-1" class="comment comment-reply">
                                <div class="d-flex">
                                    <div class="comment-img"><img src="{{ asset('assets/img/blog/comments-3.jpg') }}"
                                            alt=""></div>
                                    <div>
                                        <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i
                                                    class="bi bi-reply-fill"></i> Reply</a></h5>
                                        <time datetime="2020-01-01">01 Jan, 2020</time>
                                        <p>
                                            Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam
                                            aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed
                                            necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus.
                                            Amet nesciunt nesciunt qui illum omnis est et dolor recusandae.

                                            Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in
                                            porro aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi.
                                            Pariatur distinctio labore omnis incidunt et illum. Expedita et dignissimos
                                            distinctio laborum minima fugiat.

                                            Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis
                                            error dolorum non autem quisquam vero rerum neque.
                                        </p>
                                    </div>
                                </div>

                                <div id="comment-reply-2" class="comment comment-reply">
                                    <div class="d-flex">
                                        <div class="comment-img"><img src="{{ asset('assets/img/blog/comments-4.jpg') }}"
                                                alt="">
                                        </div>
                                        <div>
                                            <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i
                                                        class="bi bi-reply-fill"></i> Reply</a></h5>
                                            <time datetime="2020-01-01">01 Jan, 2020</time>
                                            <p>
                                                Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia
                                                dolores cupiditate et. Ut unde qui eligendi sapiente omnis ullam.
                                                Placeat porro est commodi est officiis voluptas repellat quisquam
                                                possimus. Perferendis id consectetur necessitatibus.
                                            </p>
                                        </div>
                                    </div>

                                </div><!-- End comment reply #2-->

                            </div><!-- End comment reply #1-->

                        </div><!-- End comment #2-->

                        <div id="comment-3" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="{{ asset('assets/img/blog/comments-5.jpg') }}"
                                        alt=""></div>
                                <div>
                                    <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan, 2020</time>
                                    <p>
                                        Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia
                                        nihil ut accusantium tempore. Nesciunt expedita id dolor exercitationem
                                        aspernatur aut quam ut. Voluptatem est accusamus iste at.
                                        Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est
                                        consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et
                                        optio veniam. Quam officia sit nostrum dolorem.
                                    </p>
                                </div>
                            </div>

                        </div><!-- End comment #3 -->

                        <div id="comment-4" class="comment">
                            <div class="d-flex">
                                <div class="comment-img"><img src="{{ asset('assets/img/blog/comments-6.jpg') }}"
                                        alt=""></div>
                                <div>
                                    <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i
                                                class="bi bi-reply-fill"></i> Reply</a></h5>
                                    <time datetime="2020-01-01">01 Jan, 2020</time>
                                    <p>
                                        Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit
                                        tempore. Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in
                                        fugiat.
                                    </p>
                                </div>
                            </div>

                        </div><!-- End comment #4 -->

                        <div class="reply-form">
                            <h4>Leave a Reply</h4>
                            <p>Your email address will not be published. Required fields are marked * </p>
                            <form action="">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input name="name" type="text" class="form-control"
                                            placeholder="Your Name*">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input name="email" type="text" class="form-control"
                                            placeholder="Your Email*">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <input name="website" type="text" class="form-control"
                                            placeholder="Your Website">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
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
