{{-- @php
use App\Models\ProfilPerusahaan;
$data_profil = ProfilPerusahaan::first();
@endphp

<section id="topbar" class="d-flex">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center">
                <a href="mailto:contact@example.com">
                    @if (empty($data_profil->email))
                        -
                    @else
                        {{ $data_profil->email }}
                    @endif
                </a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4">
                <span>
                    @if (empty($data_profil->no_hp))
                        -
                    @else
                        {{ $data_profil->no_hp }}
                    @endif
                </span>
            </i>
        </div>

        <div class="social-links d-none d-md-flex align-items-center">
            <div class="m-3">
                <a href="{{ url('https://www.facebook.com/lifeatintegrasia') }}" class="twitter shadow "><i
                        class="bi bi-twitter"></i></a>
                <a href="{{ url('https://www.facebook.com/lifeatintegrasia') }}" class="facebook shadow"><i
                        class="bi bi-facebook"></i></a>
                <a href="{{ url('https://www.instagram.com/integrasiautama') }}" class="instagram shadow"><i
                        class="bi bi-instagram"></i></a>
                <a href="{{ url('https://www.youtube.com/channel/UC7fpFh2NY23LH2dMuHtzHWA') }}"
                    class="youtube shadow"><i class="bi bi-youtube"></i></a>
                <a href="{{ url('https://www.linkedin.com/company/pt-integrasia-utama') }}" class="linkedin  shadow"><i
                        class="bi bi-linkedin"></i></i></a>
                <a href="{{ url('free-download') }}" class="button-72 text-light">
                    Free Download
                </a>
            </div>
        </div>
    </div>
</section> --}}
