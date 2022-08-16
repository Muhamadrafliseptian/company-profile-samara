<section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Benefits</h2>
            <h3><span>What is benefits can you got?</span></h3>
        </div>
        <div class="row">
            @php
                use App\Models\Pengaturan\Benefit;
                $data_benefit = Benefit::get();
            @endphp
            @forelse ($data_benefit as $benefit)
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon">
                            <i class="{{ $benefit->benefit_icon }}"></i>
                        </div>
                        <h4 class="title">
                            <a href="">{{ $benefit->benefit_judul }}</a>
                        </h4>
                        <p class="description">
                            {{ $benefit->benefit_deskripsi }}
                        </p>
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
