   <!-- ======= Header ======= -->
   <header id="header" class="d-flex align-items-center">
       <div class="container d-flex align-items-center justify-content-between">

           <h1 class="logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/img/new-logo.png') }}"
                       height="100" width="100" alt=""><span>.</span></a></h1>
           <!-- Uncomment below if you prefer to use an image logo -->
           <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

           <nav id="navbar" class="navbar">
               <ul>
                   <li><a class="nav-link scrollto {{ Request::is('/') ? ' active ' : ' ' }}"
                           href="{{ url('/') }}">HOME</a></li>
                   <li><a class="nav-link scrollto {{ Request::is('about-us-coba') ? ' active ' : ' ' }}"
                           href="{{ url('about-us-coba') }}">ABOUT US</a></li>
                   <li class="dropdown"><a href="{{ url('solution') }}"><span>SOLUTIONS</span> <i
                               class="bi bi-chevron-down"></i></a>
                       <ul>
                           <li class="dropdown"><a href="{{ url('business-solutions') }}"><span>BUSINESS SOLUTIONS<i
                                           class="bi bi-chevron-right"></i></a>
                               <ul>
                                   <li><a href="{{ url('geosplatial-platforming') }}">Geospatial Platforming</a></li>
                                   <li><a href="{{ url('transportation-logistik') }}">Transportation & Logistics</a></li>
                                   <li><a href="{{ url('geosplatial-aset-management') }}">Geospatial Asset Management</a></li>
                                   <li><a href="{{ url('smart-plantation') }}">Smart Plantation</a></li>
                                   <li><a href="{{ url('geosplatial-homan-resourch') }}">Geospatial Human Resource</a></li>
                                   <li><a href="{{ url('multimedia-ondemand') }}">Multimedia on Demand</a></li>
                                   <li><a href="{{ url('project-management') }}">Project Management</a></li>
                                   <li><a href="{{ url('other-solution') }}">Other Solution</a></li>
                               </ul>
                           </li>
                           <li class="dropdown"><a href="#"><span>DEVELOPER SOLUTIONS<i
                                           class="bi bi-chevron-right"></i></a>
                               <ul>
                                   <li><a href="{{ url('developer-modules') }}">Developer Modules/Engine</a></li>
                               </ul>
                           </li>
                       </ul>
                   </li>
                   <li><a class="nav-link scrollto {{ Request::is('study-case') ? ' active ' : ' ' }}" href="{{ url('study-case') }}">STUDY CASE</a></li>
                   <li><a class="nav-link scrollto {{ Request::is('why-us') ? ' active ' : ' ' }}" href="{{ url('why-us') }}">WHY US</a></li>
                   <li class="dropdown"><a href="{{ url('blog-coba') }}"
                           class="{{ Request::is('blog-coba') ? ' active ' : ' ' }} && {{ Request::is('blog-press') ? ' active ' : ' ' }}"><span>BLOG</span>
                           <i class="bi bi-chevron-down"></i></a>
                       <ul>
                           <li class="dropdown"><a href="{{ url('blog-event') }}"><span>Event</a>
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
                   <li><a class="nav-link" href="{{ url('contact-us') }}">CONTACT US</a></li>
                   <li><a class="nav-link " href="#">FREE DOWNLOAD</a></li>
                   <!-- Authentication Links -->
                   @guest
                       @if (Route::has('login'))
                           <li><a class="nav-link {{ Request::is('login') ? ' active ' : ' ' }}"
                                   href="{{ route('login') }}">LOGIN</a></li>
                       @endif

                       @if (Route::has('register'))
                           <li><a class="nav-link {{ Request::is('register') ? ' active ' : ' ' }}"
                                   href="{{ route('register') }}">REGISTER</a></li>
                       @endif
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
