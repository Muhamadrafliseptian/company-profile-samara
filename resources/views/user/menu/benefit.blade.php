<div class="container">
        <section id="box" class="icon-box">
             <div class="row icon-boxes">
            @php
                use App\Models\Pengaturan\Benefit;
                $data_benefit = Benefit::get();
            @endphp
            @forelse ($data_benefit as $benefit)
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="{{ $benefit->benefit_icon }}"></i></div>
          <div class="icon-box">
            <h4 class="title"><a href="">{{ $benefit->benefit_judul }}</a></h4>
            <p class="description">{{ $benefit->benefit_deskripsi }}</p>
          </div>
        </div>
         @empty
                <div class="col-md-12">
                    <div class="alert alert-danger text-center">
                        <i>
                            <b>
                                " Data Tidak Ada "
                            </b>
                        </i>
                    </div>
                </div>
            @endforelse
        </div>
      </div>
</section>
