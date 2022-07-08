@extends('layouts.appAdmin')
@section('free-download')
    <div class="section-title">
        <p class="fs-1 text-info mt-5" >Integrasia Utama Download Page</p>
    </div>

    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
            <p class="fs-3 text-info mb-3" >OSLOG Mobile</p>
             {{-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> --}}
          <img src="{{ asset('assets/img/OSLOG-Mobile-Phone.png') }}" class="img-fluid rounded mx-auto d-block" alt="...">

        </div>
        <p class="fs-5 text-info text-center mb-5">This mobile apps is working as a tools of OSLOG. The main function of OSLOG are:</p>
        <p class=" text-info text-center"><i class="bi bi-check-lg"></i> Real-time monitoring vehicle status At Pool</p>
        <p class=" text-info text-center"><i class="bi bi-check-lg"></i> Real-time monitoring vehicle status At Customer Point</p>
        <p class=" text-info text-center"><i class="bi bi-check-lg"></i> Real-time monitoring vehicle status On Trip</p>
        <p class=" text-info text-center"><i class="bi bi-check-lg"></i> Real-time monitoring vehicle status At Maintenance</p>
        <p class=" text-info text-center"><i class="bi bi-check-lg"></i> Real-time monitoring vehicle status At Geofence</p>
        <p class=" text-info text-center"><i class="bi bi-check-lg"></i> Real-time monitoring vehicle activities</p>
        <p class=" text-info text-center"><i class="bi bi-check-lg"></i> Real-time monitoring vehicle status Last Position Tracking</p>
    <div class="text-center">
        {{-- <a name="" id="" class="btn btn-white shadow-lg fw-bold bg-body rounded-pill p-2 px-4 mb-5 mt-2 " href="#" >Download</a> --}}
{{-- <button class="button-63" role="button">Button 63</button> --}}
<button class="button-71" onclick="window.location.href='#'" role="button">Download</button>

    </div>
    </div>

    </section>

        <div class="row">

           <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets/img/hp1.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>OSLOG tekan biaya Logistics</h4>
                <a href="">see more</a>
              </div>
            </div>
          </div>
 <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets/img/hp2.png') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>OSLOG tekan biaya Logistics</h4>
                <a href="">see more</a>
              </div>
            </div>
          </div>
 <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>OSLOG tekan biaya Logistics</h4>
                <a href="">see more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
   <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
  <!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection

<style>

/* CSS */
.button-63 {
  align-items: center;
  background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
  border: 0;
  border-radius: 8px;
  box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
  box-sizing: border-box;
  color: #FFFFFF;
  display: flex;
  font-family: Phantomsans, sans-serif;
  font-size: 20px;
  justify-content: center;
  line-height: 1em;
  max-width: 100%;
  min-width: 140px;
  padding: 19px 24px;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  cursor: pointer;
}

.button-63:active,
.button-63:hover {
  outline: 0;
}

@media (min-width: 768px) {
  .button-63 {
    font-size: 24px;
    min-width: 196px;
  }
}
</style>

<style>

/* CSS */
.button-71 {
  background-color: #0078d0;
  border: 0;
  border-radius: 56px;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: system-ui,-apple-system,system-ui,"Segoe UI",Roboto,Ubuntu,"Helvetica Neue",sans-serif;
  font-size: 18px;
  font-weight: 600;
  outline: 0;
  padding: 16px 21px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transition: all .3s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-71:before {
  background-color: initial;
  background-image: linear-gradient(#fff 0, rgba(255, 255, 255, 0) 100%);
  border-radius: 125px;
  content: "";
  height: 50%;
  left: 4%;
  opacity: .5;
  position: absolute;
  top: 0;
  transition: all .3s;
  width: 92%;
}

.button-71:hover {
  box-shadow: rgba(255, 255, 255, .2) 0 3px 15px inset, rgba(0, 0, 0, .1) 0 3px 5px, rgba(0, 0, 0, .1) 0 10px 13px;
  transform: scale(1.05);
}

@media (min-width: 768px) {
  .button-71 {
    padding: 16px 48px;
  }
}
</style>
