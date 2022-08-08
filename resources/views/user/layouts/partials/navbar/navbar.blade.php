<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo mt-4 mb-4 img-fluid">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/img/new-logo.png') }}" height="150%" width="140%" alt="">
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
                    <a class="nav-link scrollto {{ Request::is('about-us-coba') ? ' active ' : ' ' }}"
                        href="{{ url('about-us-coba') }}">
                        ABOUT US
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#services">
                        <span>SOLUTIONS</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li class="dropdown">
                            <a href="#">
                                <span>BUSINESS SOLUTIONS</span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ url('geosplatial-platforming') }}">
                                        Geospatial Platforming
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('transportation-logistik') }}">
                                        Transportation & Logistics
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('geosplatial-aset-management') }}">
                                        Geospatial Asset Management
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('smart-plantation') }}">
                                        Smart Plantation
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('geosplatial-homan-resourch') }}">
                                        Geospatial Human Resource
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Multimedia on Demand</a>
                                </li>
                                <li>
                                    <a href="#">Project Management</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">
                                <span>DEVELOPER SOLUTIONS </span>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">Developer Modules/Engine</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="nav-link scrollto {{ Request::is('study-case') ? ' active ' : ' ' }}"
                        href="{{ url('study-case') }}">
                        STUDY CASE
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ Request::is('why-us') ? ' active ' : ' ' }}"
                        href="{{ url('why-us') }}">
                        WHY US
                    </a>
                </li>
                <li class="dropdown">
                    <a href="{{ url('blog-coba') }}"
                        class="{{ Request::is('blog-coba') ? ' active ' : ' ' }} && {{ Request::is('blog-press') ? ' active ' : ' ' }} && {{ Request::is('blog-event') ? ' active ' : ' ' }}">
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
                            <a href="{{ url('blog-coba') }}"
                                class="{{ Request::is('blog-coba') ? ' active ' : ' ' }}">
                                <span>Newsblog</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ url('blog-press') }}"
                                class="{{ Request::is('blog-press') ? ' active ' : ' ' }}">
                                <span>Press</span>
                            </a>
                        </li>
                        <li class="dropdown"><a href="{{ url('blog-lowongan-kerja') }}"><span>Lowongan Kerja</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link {{ Request::is('contact-us') ? ' active ' : ' ' }}"
                        href="{{ url('contact-us') }}">CONTACT US
                    </a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
