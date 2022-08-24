@php
use App\Models\ProfilPerusahaan;
$data_profil = ProfilPerusahaan::first();
@endphp

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Contact</h2>
            <p>
                Silahkan Isi Form di Bawah Ini Jika Ada Pertanyaan.
            </p>
        </div>

        <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>
                            @if (empty($data_profil->alamat))
                                -
                            @else
                                {{ $data_profil->alamat }}
                            @endif
                        </p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>
                            @if (empty($data_profil->email))
                                -
                            @else
                                {{ $data_profil->email }}
                            @endif
                        </p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>
                            @if (empty($data_profil->no_hp))
                                -
                            @else
                                {{ $data_profil->no_hp }}
                            @endif
                        </p>
                    </div>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                        frameborder="0" style="border: 0; width: 100%; height: 290px" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="{{ url('/kirim_komentar') }}" method="POST" role="form" class="info">
                    {{ csrf_field() }}
                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <label for="nama" class="mb-2">Nama Anda</label>
                            <input type="text" name="nama" class="form-control" id="nama" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email" class="mb-2">Email Anda</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="subjek" class="mb-2"> Subjek </label>
                        <input type="text" class="form-control" name="subjek" id="subjek" required />
                    </div>
                    <div class="form-group mb-3">
                        <label for="pesan" class="mb-2"> Pesan </label>
                        <textarea class="form-control" name="pesan" rows="7" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
