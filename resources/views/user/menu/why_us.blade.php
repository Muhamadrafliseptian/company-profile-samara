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
                    <div class="col-sm-6 mb-4">
                        <div class="card detail">
                            <div class="card-body">
                                <h5 class="card-title">{{ $data->why_us_name }}</h5>
                                <p class="card-text">{{ $data->why_us_deskripsi }}
                                </p>
                                <a href="{{ url('/why_us/' . $data->why_us_slug) }}" class="btn-sm btn-primary text-end">Read
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <i>
                            <b>
                                " Data Tidak Ada "
                            </b>
                        </i>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
