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
