@extends('layouts.default')

@section('content')

    <div class="page-title light-background">
      <div class="container"></div>
    </div>
    <br>
    <!-- Services Section -->
    <section id="services" class="services section">

      <div class="container">
        <div class="row gy-4 justify-content-center">

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up">
              <div class="services-icon">
                <i class="bi bi-bullseye"></i>
              </div>
              <div>
                <h3>Technology</h3>
                <p>Separated they live in Bookmarksgrove right at the coast</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="100">
              <div class="services-icon">
                <i class="bi bi-command"></i>
              </div>
              <div>
                <h3>Web Design</h3>
                <p>Separated they live in Bookmarksgrove right at the coast</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="200">
              <div class="services-icon">
                <i class="bi bi-bar-chart"></i>
              </div>
              <div>
                <h3>Branding</h3>
                <p>Separated they live in Bookmarksgrove right at the coast</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /Services Section -->

    

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p>Happy Customers</p>
        <h2>Testimonials</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-1.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Adam Aderson</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-2.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Lukas Devlin</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-3.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Kayla Bryant</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @stop