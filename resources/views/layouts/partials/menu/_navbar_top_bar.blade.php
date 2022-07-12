<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>

        <div class="social-links d-none d-md-flex align-items-center">
            <a href="{{ url('https://www.facebook.com/lifeatintegrasia') }}" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="{{ url('https://www.facebook.com/lifeatintegrasia') }}" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="{{ url('https://www.instagram.com/integrasiautama') }}" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="{{ url('https://www.youtube.com/channel/UC7fpFh2NY23LH2dMuHtzHWA') }}" class="youtube"><i class="bi bi-youtube"></i></a>
            <a href="{{ url('https://www.linkedin.com/company/pt-integrasia-utama') }}" class="linkedin me-2"><i class="bi bi-linkedin"></i></i></a>
            {{-- <div class="getstarted scrollto"> --}}
                {{-- <a class="href="{{ url('free-download') }}" class="btn btn-outline-danger p-3 btn-block">Free Download</a> --}}
            {{-- </div> --}}
        <div class="list-group">
            <button type="button" onclick="window.location.href='{{ url('free-download') }}'" class="list-group-item list-group-item-action {{ Request::is('free-download') ? ' active ' : ' ' }}" aria-current="true">
                Free Download
            </button>

            {{-- <a  class="nav-active p-3 btn-lg download" href="{{ url('free-download') }}">Free Download</a> --}}
        </div>

            {{-- login di hide --}}
            {{-- <a href="#" class="btn btn-success p-3 btn-block">Login</a> --}}
        </div>
    </div>
</section>
