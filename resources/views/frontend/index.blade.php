@extends('frontend.layouts.app')
@section('title','Home')
@push('styles')
<style>
    .hero .hero-container {
        background: linear-gradient(
            rgba(0, 0, 0, 0.6),
            rgba(0, 0, 0, 0.6)
        ), url('{{ asset('storage/banner/colg-banner.jpeg') }}') center / cover no-repeat !important;
    }

.featured-content {
    padding-right: 30px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100%;
}

.featured-content .biography {
    line-height: 1.8;
    text-align: center;
}

.featured-content h2 {
    margin-bottom: 10px;
}

.featured-content .title {
    margin-bottom: 20px;
}

.featured-image {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.featured-image img {
    width: 100%;
    max-width: 350px;
    height: 350px;
    object-fit: cover;
    display: block;
    border-radius: 10px;
}

/* Mobile */
@media (max-width: 991px) {
    .featured-content {
        padding-right: 0;
        margin-bottom: 30px;
        text-align: center;
    }

    .featured-content .biography {
        text-align: center;
    }

    .featured-image img {
        max-width: 300px;
        height: 300px;
    }
}
</style>
@endpush

@section('content')
    <!-- Hero Section -->
    

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="hero-container">
        <div class="hero-content">
          <h1>Shaping Minds for Tomorrow's World</h1>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis magna vel dolor mattis hendrerit. Vestibulum sodales dignissim ipsum id commodo.</p>
           -->
          
        </div>
      </div>

     

      <div class="event-banner">
        <div class="container">
          <div class="row align-items-center">
            
            <img src="{{ asset('storage/administration.png') }}" />
            
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row align-items-center">

    <!-- Text LEFT -->
    <div class="col-lg-8 col-md-7">
        <div class="featured-content">

            <div class="faculty-badge">Featured Faculty</div>

            <h2>Professor Ihsan Ali Rind</h2>

            <p class="title">
                Principal of College &amp; Professor of Zoology
            </p>

            <p class="biography">
                It is my pleasure to welcome you to our institution, where we are
                committed to providing quality education, developing strong
                character, and preparing our students to meet the challenges of
                a changing world.

                We believe that education is not only about academic excellence
                but also about building confidence, discipline, integrity, and a
                sense of responsibility.
            </p>

        </div>
    </div>

    <!-- Image RIGHT -->
    <div class="col-lg-4 col-md-5">
        <div class="featured-image">
            <img
                src="{{ asset('storage/'.$principal->photo) }}"
                class="img-fluid"
                alt="Featured Faculty">
        </div>
    </div>

</div>

      </div>

    </section><!-- /About Section -->

    <!-- Featured Programs Section -->
   



   
    
   
  


@endsection
 
 
 
 
 