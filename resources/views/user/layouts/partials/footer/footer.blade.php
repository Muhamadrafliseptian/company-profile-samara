@php
use App\Models\ProfilPerusahaan;
$profil_perusahaan = ProfilPerusahaan::first();
@endphp

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>
                        <span>
                            {{ empty($profil_perusahaan->nama_perusahaan) ? '-' : $profil_perusahaan->nama_perusahaan }}
                        </span>
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
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Maps</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.011098197208!2d106.78600835053683!3d-6.262267595445047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1a206b09c8b%3A0xc34e1845b9a02a81!2sIntegrasia%20Utama!5e0!3m2!1sid!2sid!4v1660922539087!5m2!1sid!2sid" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Pejuang Pemuda</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by PEJUANG RUPIAH
        </div>
    </div>
</footer>
