@extends('frontend.layouts.app')
@section('title','About Us - 60 Mile Degree College')
@section('content')
    


  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Campus &amp; Facilities</h1>
              <p class="mb-0">Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Campus Facilities</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Campus Facilities Section -->
    <section id="campus-facilities" class="campus-facilities section">

      <div class="container">

        <!-- Campus Overview -->
        <div class="campus-overview">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="overview-content">
                <h1>Inspiring Spaces for Learning</h1>
                <p class="lead-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

                <div class="campus-stats">
                  <div class="stat-item">
                    <span class="stat-number">150</span>
                    <span class="stat-label">Acres</span>
                  </div>
                  <div class="stat-item">
                    <span class="stat-number">42</span>
                    <span class="stat-label">Buildings</span>
                  </div>
                  <div class="stat-item">
                    <span class="stat-number">18k</span>
                    <span class="stat-label">Students</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="overview-image">
                <img src="assets/img/education/campus-3.webp" alt="Campus Overview" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

        <!-- Facility Categories -->
        <div class="facility-categories">
          <div class="categories-header">
            <h2>World-Class Facilities</h2>
            <p>Suspendisse potenti. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
          </div>

          <div class="categories-grid">
            <div class="facility-card academic-spaces">
              <div class="card-image">
                <img src="assets/img/education/campus-4.webp" alt="Academic Spaces" class="img-fluid">
              </div>
              <div class="card-content">
                <div class="category-icon">
                  <i class="bi bi-mortarboard"></i>
                </div>
                <h3>Academic Excellence</h3>
                <ul class="facility-features">
                  <li>State-of-the-art lecture halls</li>
                  <li>Interactive learning labs</li>
                  <li>Collaborative study spaces</li>
                  <li>Research facilities</li>
                </ul>
                <a href="#" class="facility-link">Explore Academic Spaces</a>
              </div>
            </div>

            <div class="facility-card sports-wellness">
              <div class="card-image">
                <img src="assets/img/education/campus-5.webp" alt="Sports &amp; Wellness" class="img-fluid">
              </div>
              <div class="card-content">
                <div class="category-icon">
                  <i class="bi bi-heart"></i>
                </div>
                <h3>Sports &amp; Wellness</h3>
                <ul class="facility-features">
                  <li>Olympic-size swimming pool</li>
                  <li>Multi-purpose gymnasium</li>
                  <li>Wellness center</li>
                  <li>Outdoor sports courts</li>
                </ul>
                <a href="#" class="facility-link">Explore Wellness Facilities</a>
              </div>
            </div>

            <div class="facility-card student-life">
              <div class="card-image">
                <img src="assets/img/education/campus-1.webp" alt="Student Life" class="img-fluid">
              </div>
              <div class="card-content">
                <div class="category-icon">
                  <i class="bi bi-people"></i>
                </div>
                <h3>Student Life</h3>
                <ul class="facility-features">
                  <li>Modern dormitories</li>
                  <li>Student union building</li>
                  <li>Dining commons</li>
                  <li>Recreation centers</li>
                </ul>
                <a href="#" class="facility-link">Explore Student Life</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Virtual Tour Section -->
        

        <!-- Campus Gallery -->
        <div class="campus-gallery">
          <div class="gallery-header">
            <h2>Campus Life in Pictures</h2>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum.</p>
          </div>

          <div class="gallery-showcase swiper init-swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 4000
                },
                "slidesPerView": 1,
                "spaceBetween": 0,
                "centeredSlides": true,
                "navigation": {
                  "nextEl": ".gallery-next",
                  "prevEl": ".gallery-prev"
                },
                "pagination": {
                  "el": ".swiper-pagination",
                  "clickable": true
                },
                "breakpoints": {
                  "768": {
                    "slidesPerView": 1.5
                  },
                  "1024": {
                    "slidesPerView": 2.5
                  }
                }
              }
            </script>
            <div class="swiper-wrapper" id="swiper-wrapper-5112a4b310387e67a" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1166.4px, 0px, 0px); transition-delay: 0ms;">
              

              

              

              

              
            <div class="swiper-slide" role="group" aria-label="2 / 5" style="width: 518.4px;" data-swiper-slide-index="1">
                <div class="gallery-item">
                  <img src="assets/img/education/facilities-2.webp" alt="Science Lab" class="img-fluid" loading="lazy">
                  <div class="item-overlay">
                    <div class="overlay-content">
                      <h4>Science Laboratory</h4>
                      <p>Cutting-edge equipment for innovative research and discovery</p>
                    </div>
                  </div>
                </div>
              </div><div class="swiper-slide" role="group" aria-label="3 / 5" style="width: 518.4px;" data-swiper-slide-index="2">
                <div class="gallery-item">
                  <img src="assets/img/education/facilities-3.webp" alt="Student Union" class="img-fluid" loading="lazy">
                  <div class="item-overlay">
                    <div class="overlay-content">
                      <h4>Student Union</h4>
                      <p>The heart of campus social life and student activities</p>
                    </div>
                  </div>
                </div>
              </div><div class="swiper-slide swiper-slide-prev" role="group" aria-label="4 / 5" style="width: 518.4px;" data-swiper-slide-index="3">
                <div class="gallery-item">
                  <img src="assets/img/education/facilities-4.webp" alt="Recreation Center" class="img-fluid" loading="lazy">
                  <div class="item-overlay">
                    <div class="overlay-content">
                      <h4>Recreation Center</h4>
                      <p>Modern fitness facilities and wellness programs</p>
                    </div>
                  </div>
                </div>
              </div><div class="swiper-slide swiper-slide-active" role="group" aria-label="5 / 5" style="width: 518.4px;" data-swiper-slide-index="4">
                <div class="gallery-item">
                  <img src="assets/img/education/facilities-5.webp" alt="Arts Building" class="img-fluid" loading="lazy">
                  <div class="item-overlay">
                    <div class="overlay-content">
                      <h4>Arts Building</h4>
                      <p>Creative spaces for artistic expression and performance</p>
                    </div>
                  </div>
                </div>
              </div><div class="swiper-slide swiper-slide-next" role="group" aria-label="1 / 5" style="width: 518.4px;" data-swiper-slide-index="0">
                <div class="gallery-item">
                  <img src="assets/img/education/facilities-1.webp" alt="Library" class="img-fluid" loading="lazy">
                  <div class="item-overlay">
                    <div class="overlay-content">
                      <h4>Central Library</h4>
                      <p>A quiet haven for research and study with over 2 million volumes</p>
                    </div>
                  </div>
                </div>
              </div></div>

            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 5" aria-current="true"></span></div>
            <div class="swiper-button-prev gallery-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-5112a4b310387e67a"></div>
            <div class="swiper-button-next gallery-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-5112a4b310387e67a"></div>
          <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>

        <!-- Campus Map -->
        

      </div>

    </section><!-- /Campus Facilities Section -->

  </main>
  
 

@endsection