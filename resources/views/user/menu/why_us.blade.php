@extends('user.app')

@section('title', 'Why Us')

@section('content')
    <section id="mapGIS" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center text-light">Why Us</h1>
        </div>
    </section>
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>WHY CHOOSE US?</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur
              ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
              quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
              Quia fugiat sit in iste officiis commodi quidem hic quas.
            </p>
          </div>
          <div class="row">
            @forelse ($data_why_us as $data)
            <div
              class="col-xl-3 col-md-6 d-flex align-items-stretch"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <div class="icon-box">
                <div class="icon"><i class="{{ $data->why_us_icon }}"></i></div>
                <h4><a href="">{{ $data->why_us_name }}</a></h4>
                <p>
                  {{ $data->why_us_deskripsi }}
                </p>
                <a href="{{ url('/why_us/' . $data->why_us_slug) }}" class="btn btn-primary description mt-5 mb-0">
                Read More
                </a>
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
@endsection
