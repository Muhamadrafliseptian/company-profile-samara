   <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/img/new-logo.png') }}" height="100" width="100" alt=""><span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ Request::is('/')? " active ":" " }}" href="{{ url('/') }}">HOME</a></li>
          <li><a class="nav-link scrollto {{ Request::is('about-us-coba')? " active ":" " }}" href="{{ url('about-us-coba') }}">ABOUT US</a></li>
          <li class="dropdown"><a href="#services"><span>SOLUTIONS</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>BUSINESS SOLUTIONS<i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Geospatial Platforming</a></li>
                  <li><a href="#">Transportation & Logistics</a></li>
                  <li><a href="#">Geospatial Asset Management</a></li>
                  <li><a href="#">Smart Plantation</a></li>
                  <li><a href="#">Geospatial Human Resource</a></li>
                  <li><a href="#">Multimedia on Demand</a></li>
                  <li><a href="#">Project Management</a></li>
                </ul>
              </li>
               <li class="dropdown"><a href="#"><span>DEVELOPER SOLUTIONS<i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Developer Modules/Engine</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto " href="#portfolio">STUDY CASE</a></li>
          <li><a class="nav-link scrollto" href="#team">WHY US</a></li>
          <li class="dropdown"><a href="{{ url('blog-coba') }}"
          class="{{ Request::is('blog-coba')? " active ":" " }} && {{ Request::is('blog-press')? " active ":" " }}"><span>BLOG</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Event</a>
              </li>
               <li class="dropdown"><a href="{{ url('blog-coba') }}" class="{{ Request::is('blog-coba')? " active ":" " }}"><span>Newsblog</a>
              </li>
              <li class="dropdown"><a href="{{ url('blog-press') }}" class="{{ Request::is('blog-press')? " active ":" " }}"><span>Press</a>
              </li>
              <li class="dropdown"><a href="{{ url('blog-lowongan-kerja') }}"><span>Lowongan Kerja</a>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">CONTACT US</a></li>
          <li><a class="nav-link scrollto" href="#contact">FREE DOWNLOAD</a></li>
          <li><a class="nav-link scrollto" href="#contact">LOGIN</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
