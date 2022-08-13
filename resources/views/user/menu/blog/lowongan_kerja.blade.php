@extends('user.app')
@section('content')
    <section id="geospatialplatform" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center text-light">
                Lowongan Kerja
            </h1>
            <h5 class="text-center text-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quaerat, molestiae aut enim placeat
                officiis debitis ab eum reiciendis, laboriosam, asperiores aperiam? Ipsam porro quidem exercitationem sequi,
                possimus est? Velit!
            </h5>
        </div>
    </section>
    <div class="container mt-5">
        @foreach ($data_lowongan_kerja as $data)
            <div class="card w-100 mb-3" style="border: none; box-shadow: 0px 2px 2px rgb(211, 211, 211)">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ url('/storage/' . $data->lowongan_foto) }}"  class="img-fluid h-100 rounded-start"
                            alt="..." />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-dark">{{ $data->lowongan_nama }}</h5>
                            <p>
                                <a href="" style="text-decoration: none"><b>{{ $data->lowongan_alamat }}</b></a>
                            </p>
                            <p class="card-text">Rp. {{ $data->lowongan_gaji }}</p>
                            <p class="card-text text-secondary">
                                {{ $data->lowongan_deskripsi }}
                            </p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                            <a href="" class="text-end">
                                <p><i class="fa-solid fa-arrow-right"></i></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    </body>
@endsection
