   <!-- ======= Header ======= -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/dropdown-style.css') }}"> --}}

   <header id="header" class="d-flex align-items-center">
       <div class="container d-flex align-items-center justify-content-between">

           <h1 class="logo mt-4 mb-4 img-fluid"><a href="{{ url('/') }}"><img src="{{ asset('assets/img/new-logo.png') }}"
                       height="150%" width="140%" alt=""></a></h1>
           <!-- Uncomment below if you prefer to use an image logo -->
           <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

           <nav id="navbar" class="navbar">
               <ul>
                   <li><a class="nav-link scrollto {{ Request::is('/') ? ' active ' : ' ' }}"
                           href="{{ url('/') }}">HOME</a></li>
                   <li><a class="nav-link scrollto {{ Request::is('about-us-coba') ? ' active ' : ' ' }}"
                           href="{{ url('about-us-coba') }}">ABOUT US</a></li>

                    {{-- CODE ASLI SOLUTIONS --}}

                     <li class="dropdown"><a href="#services"><span>SOLUTIONS</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>BUSINESS SOLUTIONS<i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ url('geosplatial-platforming') }}">Geospatial Platforming</a></li>
                  <li><a href="{{ url('transportation-logistik') }}">Transportation & Logistics</a></li>
                  <li><a href="{{ url('geosplatial-aset-management') }}">Geospatial Asset Management</a></li>
                  <li><a href="{{ url('smart-plantation') }}">Smart Plantation</a></li>
                  <li><a href="{{ url('geosplatian-homan-resourch') }}">Geospatial Human Resource</a></li>
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


                    {{-- <li id="" class="dropdown"><a href=""><span>SOLUTIONS</span> <i class="bi bi-chevron-down"></i></a>
                       <ul class="">
                    <div class="">
                        <div class="sub-nav-col left">
                            <a href="{{ url('business-solutions') }}" class="sub-nav-box" id="box">
                                <p>BUSINESS SOLUTIONS</p>
                            </a>
                            <a href="{{ url('geosplatial-platforming') }}" class="sub-nav-box" id="box">
                                <p>Geospatial Platforming</p>
                            </a>
                            <a href="{{ url('transportation-logistik') }}" class="sub-nav-box" id="box">
                                <p>Transportation & Logistics</p>
                            </a>
                            <a href="{{ url('geosplatial-aset-management') }}" class="sub-nav-box" id="box">
                                <p>Geospatial Asset Management</p>
                            </a>
                            <a href="{{ url('smart-plantation') }}" class="sub-nav-box" id="box">
                                <p>Smart Plantation</p>
                            </a>
                            <a href="{{ url('geosplatial-homan-resourch') }}" class="sub-nav-box" id="box">
                                <p>Geospatial Human Resource</p>
                            </a>
                            <a href="{{ url('multimedia-ondemand') }}" class="sub-nav-box" id="box">
                                <p>Multimedia on Demand</p>
                            </a>
                            <a href="{{ url('project-management') }}" class="sub-nav-box" id="box">
                                <p>Project Management</p>
                            </a>
                            <a href="{{ url('other-solution') }}" class="sub-nav-box" id="box">
                                <p>Other Solution</p>
                            </a>
                        </div>
                        <div class="sub-nav-col right">
                            <a href="#" class="sub-nav-box" id="box">
                                <p>DEVELOPER SOLUTIONS</p>
                            </a>
                            <a href="{{ url('developer-modules') }}" class="sub-nav-box" id="box">
                                <p>Developer Modules/Engine</p>
                        </div>
                    </div>
                </li>
                       </ul>
                   </li> --}}

                   <li><a class="nav-link scrollto {{ Request::is('study-case') ? ' active ' : ' ' }}" href="{{ url('study-case') }}">STUDY CASE</a></li>
                   <li><a class="nav-link scrollto {{ Request::is('why-us') ? ' active ' : ' ' }}" href="{{ url('why-us') }}">WHY US</a></li>
                   <li class="dropdown"><a href="{{ url('blog-coba') }}"
                           class="{{ Request::is('blog-coba') ? ' active ' : ' ' }} && {{ Request::is('blog-press') ? ' active ' : ' ' }} && {{ Request::is('blog-event') ? ' active ' : ' ' }}"><span>BLOG</span>
                           <i class="bi bi-chevron-down"></i></a>
                       <ul>
                           <li class="dropdown"><a href="{{ url('blog-event') }}" class="{{ Request::is('blog-event') ? ' active ' : ' ' }}"><span>Event</a>
                           </li>
                           <li class="dropdown"><a href="{{ url('blog-coba') }}"
                                   class="{{ Request::is('blog-coba') ? ' active ' : ' ' }}"><span>Newsblog</a>
                           </li>
                           <li class="dropdown"><a href="{{ url('blog-press') }}"
                                   class="{{ Request::is('blog-press') ? ' active ' : ' ' }}"><span>Press</a>
                           </li>
                           <li class="dropdown"><a href="{{ url('blog-lowongan-kerja') }}"><span>Lowongan Kerja</a>
                           </li>
                       </ul>
                   </li>
                   <li><a class="nav-link {{ Request::is('contact-us') ? ' active ' : ' ' }}" href="{{ url('contact-us') }}">CONTACT US</a></li>
                   {{-- <li><a class="nav-link " href="{{ url('free-download') }}">FREE DOWNLOAD</a></li> --}}
                   <!-- Authentication Links -->
                   @guest
                       @if (Route::has('login'))
                           <li><a class="nav-link {{ Request::is('login') ? ' active ' : ' ' }}"
                                   href="{{ route('login') }}">LOGIN</a></li>
                       @endif

                       {{-- @if (Route::has('register'))
                           <li><a class="nav-link {{ Request::is('register') ? ' active ' : ' ' }}"
                                   href="{{ route('register') }}">REGISTER</a></li>
                       @endif --}}
                   @else
                       <li class="nav-item dropdown">
                           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{ Auth::user()->name }}
                           </a>

                           <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   {{ __('Logout') }}
                               </a>

                               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                   @csrf
                               </form>
                           </div>
                       </li>
                   @endguest
               </ul>
               <i class="bi bi-list mobile-nav-toggle"></i>
           </nav><!-- .navbar -->

       </div>
   </header><!-- End Header -->
