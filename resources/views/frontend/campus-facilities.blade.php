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
                
                <img src="{{ asset('storage/' . 'gallery/s8gIOJtlxlyMalQer3AsT4YUmt0U46uxmBKdMFRJ.jpg') }}" alt="Campus Overview" class="img-fluid">
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
                <img src="{{ asset('storage/' . 'gallery/yWS1kmKTOojmemyQfZEXcdGAt0sdNlKaBQCVHjK3.jpg') }}" alt="Academic Spaces" class="img-fluid">
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
                <img src="{{ asset('storage/' . 'gallery/MX6lRXqb74pQ3DebRvpHbUf0tKjnizp3e5jImY0z.jpg') }}" alt="Sports &amp; Wellness" class="img-fluid">
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
                <img src="{{ asset('storage/' . 'gallery/xIvP9e53lEZQ9OsesMtCzlFUkO5XYgdTZh1sPFlf.jpg') }}" alt="Student Life" class="img-fluid">
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

         <div class="gallery-showcase swiper init-swiper">

    <script type="application/json" class="swiper-config">
    {
    "loop": true,
    "speed": 600,
    "autoplay": {
        "delay": 4000
    },
    "slidesPerView": 3,
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
        "320": {
            "slidesPerView": 3
        },
        "768": {
            "slidesPerView": 3
        },
        "1024": {
            "slidesPerView": 3
        }
    }
}
    </script>

    <div class="swiper-wrapper">

        {{-- Laboratory Gallery Images --}}
        @foreach($galleries->where('category', 'Laboratories') as $gallery)

            <div class="swiper-slide">

                <div class="gallery-item">

                    <img
                        src="{{ asset('storage/' . $gallery->image) }}"
                        alt="{{ $gallery->title }}"
                        class="img-fluid"
                        loading="lazy"
                    >

                    <div class="item-overlay">

                        <div class="overlay-content">

                            <h4>{{ $gallery->title }}</h4>

                            @if($gallery->description)
                                <p>{{ $gallery->description }}</p>
                            @endif

                        </div>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

    {{-- Pagination --}}
    <div class="swiper-pagination"></div>

    {{-- Navigation --}}
    <div class="swiper-button-prev gallery-prev"></div>
    <div class="swiper-button-next gallery-next"></div>

</div>

        <!-- Campus Map -->
        

      </div>

    </section><!-- /Campus Facilities Section -->

  </main>
  
 

@endsection