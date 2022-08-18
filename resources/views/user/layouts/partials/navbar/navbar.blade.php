@php
use App\Models\ProfilPerusahaan;
use App\Models\Solusi\KategoriSolusi;
use App\Models\Solusi\Solusi;
$data_profil = ProfilPerusahaan::first();
@endphp

<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo mt-4 mb-4 img-fluid">
            <a href="{{ url('/') }}">
                @if (empty($data_profil->logo))
                    <img src="{{ asset('assets/img/new-logo.png') }}" height="150%" width="140%" alt="">
                @else
                    <img src="{{ $data_profil->logo }}" height="150%" width="140%" alt="">
                @endif
            </a>
        </h1>
        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto {{ Request::is('/') ? ' active ' : ' ' }}" href="{{ url('/') }}">
                        HOME
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ Request::is('about_us') ? ' active ' : ' ' }}"
                        href="{{ url('about_us') }}">
                        ABOUT US
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#services">
                        <span>SOLUTIONS</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        @php
                            $data_kategori_solusi = KategoriSolusi::get();
                        @endphp

                        @foreach ($data_kategori_solusi as $data)
                            <li class="dropdown">
                                <a href="#">
                                    <span>{{ $data->kategori_solusi }}</span>
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                                @php
                                    $data_solusi = Solusi::where('id_kategori_solusi', $data->id)->get();
                                @endphp
                                <ul>
                                    @foreach ($data_solusi as $data)
                                        <li>
                                            <a href="{{ url('/solusi/' . $data->solusi_slug) }}">
                                                {{ $data->solusi_nama }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li>
                    <a class="nav-link scrollto {{ Request::is('study_case') ? ' active ' : ' ' }}"
                        href="{{ url('study_case') }}">
                        STUDY CASE
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ Request::is('why_us') ? ' active ' : ' ' }}"
                        href="{{ url('why_us') }}">
                        WHY US
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#"
                        class="{{ Request::is('blog/berita') ? ' active ' : ' ' }} && {{ Request::is('blog-press') ? ' active ' : ' ' }} && {{ Request::is('blog-event') ? ' active ' : ' ' }}">
                        <span>BLOG</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li class="dropdown">
                            <a href="{{ url('blog-event') }}"
                                class="{{ Request::is('blog-event') ? ' active ' : ' ' }}">
                                <span>Event</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ url('blog/berita') }}"
                                class="{{ Request::is('blog/berita') ? ' active ' : ' ' }}">
                                <span>Newsblog</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ url('blog-press') }}"
                                class="{{ Request::is('blog-press') ? ' active ' : ' ' }}">
                                <span>Press</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ url('blog/lowongan_kerja') }}">
                                <span>Lowongan Kerja</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('contact_us') ? ' active ' : ' ' }}"
                        href="{{ url('contact_us') }}">CONTACT US
                    </a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
