@extends('user.app')
@section('content')
<section id="detailStudyCase" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>{{ $detail->study_case_judul }}</h1>
            <h4>{!! $detail->study_case_deskripsi !!}</h4>
          </div>
          <p class="text-primary">{{ $detail->getPartner->partner_nama }}</p>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 detailStudyCase-img" data-aos="fade-up">
          <img src="{{ url('/Storage/' . $detail->study_case_gambar) }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
@endsection
