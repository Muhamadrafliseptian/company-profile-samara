@extends('layouts.appAdmin')
@section('study-case')


  <!-- ======= Hero Section ======= -->
  <section id="mapGIS" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1 class="text-center text-light">
Geospatial & Platforming</h1>
    </div>
  </section>
  <br>
  <br>
{{-- <div class="container">
<h5><span><b>Description</b></span></h5>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque accusamus assumenda quo quia sint animi debitis, eaque impedit consequuntur, nisi optio, molestiae ipsa repudiandae. Dolores numquam nulla ut magnam. Tempore? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet nulla odio, omnis iste exercitationem ea totam nemo et labore, aut quia doloremque veritatis non cum enim esse, sunt voluptate unde! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione vitae officiis fugit eligendi sunt molestiae necessitatibus, nisi dolorum. Quisquam dolore esse perspiciatis provident soluta impedit voluptates error, perferendis recusandae porro?</p>
  <div class="text-end">
</div> --}}
{{--
  </div>
  <!-- End Hero -->

<div class="container">
    <section id="featured-services" class="featured-services">
    <img class="img-fluid rounded mx-auto d-block"  data-aos="fade-up" src="assets/img/mapGIS.png" alt="">
    </section>
    <br> --}}

{{-- <section id="featured-services" class="featured-services section-bg">
        <img class="rounded mx-auto d-block w-50"  data-aos="fade-right" src="assets/img/uimapGIS.png" alt="">
        </div>
        </section> --}}
  <main id="main">
     <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>PARTNERS</h2>
          <h3>Check Our<span>Partners</span></h3>
        </div>

        {{-- <div class="card">
            {{-- <div class="card-header">
                Featured
            </div> --}}
            {{-- <img src="{{ asset('assets/img/clients/client-1.png') }}" width="150px">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div> --}}
        {{-- </div> --}}

        <div class="card w-100">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="{{ asset('assets/img/clients/client-1.png') }}" class="img-fluid rounded-start " alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <button type="button" class="btn btn-primary text-right">more</button>
                </div>
                </div>
            </div>
        </div>

    <!-- ======= Featured Services Section ======= -->
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section>

   {{-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-right">
<div class="section-title section-bg">
          <h3 class="mb-2"><span>Why Us?</span></h3>
          <h4>As a Partner of some satellite provider, we be able to provide end to <br> end services from data acquisition, data processing and analysis to meet the customer requirement.
</h4>
        </div>
      </div>
   </section> --}}
    <!-- ======= Services Section ======= -->


  </main><!-- End #main -->


@endsection
