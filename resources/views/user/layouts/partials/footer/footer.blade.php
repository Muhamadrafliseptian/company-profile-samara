@php
use App\Models\ProfilPerusahaan;
$profil_perusahaan = ProfilPerusahaan::first();
@endphp
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>{{ empty($profil_perusahaan->nama_perusahaan) ? '-' : $profil_perusahaan->nama_perusahaan }}
                    </h3>
                    <p>
                        {{ empty($profil_perusahaan->alamat) ? '-' : $profil_perusahaan->alamat }} <br>
                        {{ empty($profil_perusahaan->negara) ? '-' : $profil_perusahaan->negara }},
                        {{ empty($profil_perusahaan->kode_pos) ? '-' : $profil_perusahaan->kode_pos }}<br>
                        <br><br>
                        <strong>Phone:</strong> {{ empty($profil_perusahaan->no_hp) ? '-' : $profil_perusahaan->no_hp }}
                        <br>
                        <strong>Email:</strong> {{ empty($profil_perusahaan->email) ? '-' : $profil_perusahaan->email }}
                        <br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Tentang Aplikasi</h4>
                    <p class="text-light">
                        {!! $profil_perusahaan->deskripsi !!}
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a href="#">Web Design</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="#">Web Development</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="#">Product Management</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i> <a href="#">Marketing</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="#">Graphic Design</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Beberapa Sosial Media Kami</h4>
                    <p class="text-light">
                        Silahkan Hubungi Sosial Media Kami di Bawah Ini.
                    </p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Pejuang Pemuda</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/"><b>Pejuang Cinta</b></a>
        </div>
    </div>
</footer>
