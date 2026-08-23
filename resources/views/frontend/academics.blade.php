@extends('layouts.app')
@section('title','Academics - 60 Mile Degree College')
@section('content')
     

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Academics</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Academics</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Academics Section -->
    <section id="academics" class="academics section">

      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>Academics</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-lg-8 text-center aos-init aos-animate" data-aos="zoom-in" data-aos-delay="150">
            <div class="intro-block">
              <h3 class="intro-title">Shaping Tomorrow's Leaders Through Innovation</h3>
              <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit duis sed odio sit amet.</p>
              <div class="intro-actions mt-4">
                <a href="#" class="action-btn primary-btn">Browse Courses</a>
                <a href="#" class="action-btn outline-btn">Get a Brochure</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row g-4 mt-4 mb-5">
          <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="stat-box">
              <div class="stat-icon">
                <i class="bi bi-journal-bookmark"></i>
              </div>
              <div class="stat-info">
                <h2><span data-purecounter-start="0" data-purecounter-end="52" data-purecounter-duration="0" class="purecounter">52</span>+</h2>
                <p>Academic Majors</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="stat-box">
              <div class="stat-icon">
                <i class="bi bi-mortarboard"></i>
              </div>
              <div class="stat-info">
                <h2><span data-purecounter-start="0" data-purecounter-end="34" data-purecounter-duration="0" class="purecounter">34</span></h2>
                <p>Advanced Degrees</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="stat-box">
              <div class="stat-icon">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
              <div class="stat-info">
                <h2><span data-purecounter-start="0" data-purecounter-end="88" data-purecounter-duration="0" class="purecounter">88</span>%</h2>
                <p>Employment Rate</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <div class="stat-box">
              <div class="stat-icon">
                <i class="bi bi-people"></i>
              </div>
              <div class="stat-info">
                <h2><span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="0" class="purecounter">12</span>:1</h2>
                <p>Learner-Instructor Ratio</p>
              </div>
            </div>
          </div>
        </div>

        <div class="academic-programs mb-5">
          <div class="row justify-content-center mb-4 aos-init aos-animate" data-aos="fade-down" data-aos-delay="100">
            <div class="col-lg-6 text-center">
              <div class="block-header">
                <h3>Explore Our Departments</h3>
                <p>A curated selection of undergraduate, graduate, and professional pathways</p>
              </div>
            </div>
          </div>

          <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <ul class="filter-tabs isotope-filters aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
              <li data-filter="*" class="filter-active">All Departments</li>
              <li data-filter=".filter-undergraduate">Undergraduate</li>
              <li data-filter=".filter-graduate">Graduate</li>
              <li data-filter=".filter-certificate">Professional</li>
            </ul>

            <div class="row gy-4 isotope-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" style="position: relative; height: 896.578px;">
              <div class="col-lg-4 col-md-6 program-item isotope-item filter-undergraduate" style="position: absolute; left: 0px; top: 0px;">
                <div class="dept-card">
                  <figure class="dept-image">
                    <img src="{{ asset('assets/images/education-2.png') }}" alt="" class="img-fluid">
                    <span class="dept-badge">Undergraduate</span>
                  </figure>
                  <div class="dept-body">
                    <h4>Bachelor of Engineering in Software Development</h4>
                    <p>Suspendisse potenti nullam ac tortor vitae purus faucibus ornare suspendisse sed nisi lacus.</p>
                    <ul class="dept-details">
                      <li><i class="bi bi-calendar3"></i> 4 Years</li>
                      <li><i class="bi bi-award"></i> 128 Credits</li>
                    </ul>
                    <a href="#" class="dept-link">Discover More <i class="bi bi-chevron-right"></i></a>
                  </div>
                </div>
              </div><!-- End Program Item -->

              <div class="col-lg-4 col-md-6 program-item isotope-item filter-undergraduate" style="position: absolute; left: 440px; top: 0px;">
                <div class="dept-card">
                  <figure class="dept-image">
                    <img src="{{ asset('assets/images/education-4.png') }}" alt="" class="img-fluid">
                    <span class="dept-badge">Undergraduate</span>
                  </figure>
                  <div class="dept-body">
                    <h4>Bachelor of Fine Arts in Visual Design</h4>
                    <p>Egestas pretium aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros.</p>
                    <ul class="dept-details">
                      <li><i class="bi bi-calendar3"></i> 4 Years</li>
                      <li><i class="bi bi-award"></i> 124 Credits</li>
                    </ul>
                    <a href="#" class="dept-link">Discover More <i class="bi bi-chevron-right"></i></a>
                  </div>
                </div>
              </div><!-- End Program Item -->

              <div class="col-lg-4 col-md-6 program-item isotope-item filter-graduate" style="position: absolute; left: 880px; top: 0px;">
                <div class="dept-card">
                  <figure class="dept-image">
                    <img src="{{ asset('assets/images/education-6.png') }}" alt="" class="img-fluid">
                    <span class="dept-badge">Graduate</span>
                  </figure>
                  <div class="dept-body">
                    <h4>Master of Science in Data Analytics</h4>
                    <p>Vitae congue eu consequat ac felis donec et odio pellentesque diam volutpat commodo.</p>
                    <ul class="dept-details">
                      <li><i class="bi bi-calendar3"></i> 2 Years</li>
                      <li><i class="bi bi-award"></i> 64 Credits</li>
                    </ul>
                    <a href="#" class="dept-link">Discover More <i class="bi bi-chevron-right"></i></a>
                  </div>
                </div>
              </div><!-- End Program Item -->

              <div class="col-lg-4 col-md-6 program-item isotope-item filter-graduate" style="position: absolute; left: 440px; top: 436.531px;">
                <div class="dept-card">
                  <figure class="dept-image">
                    <img src="{{ asset('assets/images/education-8.png') }}" alt="" class="img-fluid">
                    <span class="dept-badge">Graduate</span>
                  </figure>
                  <div class="dept-body">
                    <h4>Master of Public Health</h4>
                    <p>Amet venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla.</p>
                    <ul class="dept-details">
                      <li><i class="bi bi-calendar3"></i> 2 Years</li>
                      <li><i class="bi bi-award"></i> 52 Credits</li>
                    </ul>
                    <a href="#" class="dept-link">Discover More <i class="bi bi-chevron-right"></i></a>
                  </div>
                </div>
              </div><!-- End Program Item -->

              <div class="col-lg-4 col-md-6 program-item isotope-item filter-certificate" style="position: absolute; left: 880px; top: 436.531px;">
                <div class="dept-card">
                  <figure class="dept-image">
                    <img src="{{ asset('assets/images/courses-5.png') }}" alt="" class="img-fluid">
                    <span class="dept-badge">Professional</span>
                  </figure>
                  <div class="dept-body">
                    <h4>Cybersecurity Professional Certificate</h4>
                    <p>Turpis egestas pretium aenean pharetra magna ac placerat vestibulum lectus mauris.</p>
                    <ul class="dept-details">
                      <li><i class="bi bi-calendar3"></i> 8 Months</li>
                      <li><i class="bi bi-award"></i> 18 Credits</li>
                    </ul>
                    <a href="#" class="dept-link">Discover More <i class="bi bi-chevron-right"></i></a>
                  </div>
                </div>
              </div><!-- End Program Item -->

              <div class="col-lg-4 col-md-6 program-item isotope-item filter-certificate" style="position: absolute; left: 0px; top: 460.047px;">
                <div class="dept-card">
                  <figure class="dept-image">
                    <img src="{{ asset('assets/images/courses-9.png') }}" alt="" class="img-fluid">
                    <span class="dept-badge">Professional</span>
                  </figure>
                  <div class="dept-body">
                    <h4>Project Management Certificate</h4>
                    <p>Nunc consequat interdum varius sit amet mattis vulputate enim nulla aliquet porttitor lacus.</p>
                    <ul class="dept-details">
                      <li><i class="bi bi-calendar3"></i> 5 Months</li>
                      <li><i class="bi bi-award"></i> 14 Credits</li>
                    </ul>
                    <a href="#" class="dept-link">Discover More <i class="bi bi-chevron-right"></i></a>
                  </div>
                </div>
              </div><!-- End Program Item -->
            </div><!-- End Isotope Container -->
          </div>
        </div>

        <div class="instructors-showcase">
          <div class="row justify-content-center mb-4 aos-init" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 text-center">
              <div class="block-header">
                <h3>Our Distinguished Instructors</h3>
                <p>Passionate educators committed to student growth and innovation</p>
              </div>
            </div>
          </div>

          <div class="faculty-slider swiper init-swiper aos-init swiper-initialized swiper-horizontal swiper-backface-hidden" data-aos="fade-up" data-aos-delay="200">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 4000
                },
                "slidesPerView": 1,
                "spaceBetween": 30,
                "breakpoints": {
                  "576": {
                    "slidesPerView": 2
                  },
                  "992": {
                    "slidesPerView": 4
                  }
                },
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                }
              }
            </script>
            <div class="swiper-wrapper" id="swiper-wrapper-d36df54568e276d6" aria-live="off">
              <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" data-swiper-slide-index="0" style="width: 301.5px; margin-right: 30px;">
                <div class="instructor-card">
                  <div class="instructor-avatar">
                    <img src="{{ asset('assets/images/person-m-5.png') }}" alt="" class="img-fluid">
                  </div>
                  <div class="instructor-info">
                    <h4>Prof. James Mitchell</h4>
                    <span class="instructor-dept">Software Engineering</span>
                    <div class="instructor-links">
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                      <a href="#"><i class="bi bi-twitter-x"></i></a>
                      <a href="#"><i class="bi bi-envelope"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 4" data-swiper-slide-index="1" style="width: 301.5px; margin-right: 30px;">
                <div class="instructor-card">
                  <div class="instructor-avatar">
                    <img src="{{ asset('assets/images/person-f-3.png') }}" alt="" class="img-fluid">
                  </div>
                  <div class="instructor-info">
                    <h4>Dr. Amanda Torres</h4>
                    <span class="instructor-dept">Visual Design</span>
                    <div class="instructor-links">
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                      <a href="#"><i class="bi bi-twitter-x"></i></a>
                      <a href="#"><i class="bi bi-envelope"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" role="group" aria-label="3 / 4" data-swiper-slide-index="2" style="width: 301.5px; margin-right: 30px;">
                <div class="instructor-card">
                  <div class="instructor-avatar">
                    <img src="{{ asset('assets/images/person-m-11.png') }}" alt="" class="img-fluid">
                  </div>
                  <div class="instructor-info">
                    <h4>Dr. William Park</h4>
                    <span class="instructor-dept">Data Analytics</span>
                    <div class="instructor-links">
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                      <a href="#"><i class="bi bi-twitter-x"></i></a>
                      <a href="#"><i class="bi bi-envelope"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide" role="group" aria-label="4 / 4" data-swiper-slide-index="3" style="width: 301.5px; margin-right: 30px;">
                <div class="instructor-card">
                  <div class="instructor-avatar">
                    <img src="{{ asset('assets/images/person-f-7.png') }}" alt="" class="img-fluid">
                  </div>
                  <div class="instructor-info">
                    <h4>Prof. Catherine Lewis</h4>
                    <span class="instructor-dept">Public Health</span>
                    <div class="instructor-links">
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                      <a href="#"><i class="bi bi-twitter-x"></i></a>
                      <a href="#"><i class="bi bi-envelope"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>

      </div>

    </section><!-- /Academics Section -->



@endsection