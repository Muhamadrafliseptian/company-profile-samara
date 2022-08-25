<div class="container">
        <section id="box" class="icon-box">
             <div class="row icon-boxes">
                <div class="section-title">
                    <h2>Benefit</h2>
                    <h3><span>We Achieved People’s Trust By Our Great Service</span></h3>
                    <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                        vitae autem.</p>
                </div>
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
@php
use App\Models\Pengaturan\Benefit;
$data_benefit = Benefit::get();
@endphp
<section id="featured-services" class="featured-services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Benefits</h2>
            <h3 class="text-dark">What is <span class="text-primary">benefits</span> can you got?</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio tempore porro optio aspernatur
                pariatur libero neque, repudiandae voluptatum facere beatae accusantium iure perferendis.
                Repudiandae quod fuga omnis, officiis ab libero?</p>
        </div>
        <div class="row">
            @foreach ($data_benefit as $benefit)
                <div class="col-sm-6 mb-4">
                    <div class="card detail">
                        <div class="card-body">
                            <h5 class="card-title">{{ $benefit->benefit_judul }}</h5>
                            <p class="card-text">{{ $benefit->benefit_deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</section>
