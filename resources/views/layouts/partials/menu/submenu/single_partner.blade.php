@extends('layouts.appAdmin')
@section('single_partner')
 <section id="geospatialplatform" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1 class="text-center text-light">
Why Us?
</h1>
<h5 class="text-center text-light">
Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quaerat, molestiae aut enim placeat officiis debitis ab eum reiciendis, laboriosam, asperiores aperiam? Ipsam porro quidem exercitationem sequi, possimus est? Velit!
</h5>
    </div>
  </section>
        </div>
        </div>
      <div class="container" data-aos="fade-up">
<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>After Sales Services</h2>
          <h3> <span>We Delivered
 to You</span></h3>
        </div>
      </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6 ">
            {{-- <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0110981970392!2d106.78601371468598!3d-6.262267595467255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1a206b09c8b%3A0xc34e1845b9a02a81!2sIntegrasia%20Utama!5e0!3m2!1sid!2sid!4v1656501375004!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> --}}
            <img class="img-fluid mb-4 mb-lg-0" style="border:0; width: 100%; height: 384px;" src="{{ url('assets/img/hp1.png') }}" alt="">
          </div>
          <div class="col-lg-6">
           <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore necessitatibus natus incidunt nihil suscipit adipisci asperiores, minus quidem labore est ipsum reiciendis cupiditate doloremque laudantium delectus, repudiandae dolore architecto soluta?</P>
          </div>
        </div>
      </div>
    </section>
  <main id="main">
     <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Benefits</h2>
          <h3>What is <span>benefits</span> can you got?</h3>
        </div>
    <!-- ======= Featured Services Section ======= -->
       <div class="row">
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Vision</h3>
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Integration Brings Value</h5>
                  <p> Lorem ipsum dolor sit amet, consectetur</p>
                </div>
              </li>
               <h3>Mission</h3>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                  <p>We strive to ensure that integration system and technologies across the board in your business will ultimately bring value.</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                  <p>In order to be able to do this, we will conduct our MISSION to be committed to provide integrated solutions and benefit the customers with innovation and ‘state of the art’ technology.</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                  <p>Socially responsible to the community and become an environmental friendly company, and contribute to the country with excellent services and products.</p>
                </div>
              </li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset('assets/img/whyus1.png') }}" class="img-fluid" alt="">
          </div>
        </div>

      </div>

      </div>
    </section>
   <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
         <div class="col-lg-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
          <br>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="{{ url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0110981970392!2d106.78601371468598!3d-6.262267595467255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1a206b09c8b%3A0xc34e1845b9a02a81!2sIntegrasia%20Utama!5e0!3m2!1sid!2sid!4v1656501375004!5m2!1sid!2sid') }}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>
          <div class="col-lg-6">
                <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Visit Our Head Office (Jakarta):</h3>
              <p>Radio Dalam Square 1A</p>
            <p>Jl. Radio Dalam, Kel.Gandaria Utara, Kebayoran Baru</p><p>Jakarta Selatan 12140</p><p>Indonesia</p>
            </div>
            <div class="d-inline-flex">
            <div class="info-box  mb-4 me-2" style="width: 18rem">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
           <div class="info-box  mb-4" style="width: 20rem">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main>
    @endsection
