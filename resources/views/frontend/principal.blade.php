@extends('frontend.layouts.app')
@section('title','About Us - 60 Mile Degree College')
@section('content')
    

 

    <!-- Page Title -->
    <div class="page-title">
      
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Principal of College</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Faculty  Staff Section -->
    <section id="faculty--staff" class="faculty--staff section">

      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-lg-6">
            <div class="faculty-search-bar">
              <div class="search-input-wrapper">
                <i class="bi bi-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Find faculty by name or expertise...">
              </div>
            </div>
          </div>
        </div>

        <div class="faculty-showcase">
          <div class="row g-5">
            <!-- Featured Faculty Member -->
            <div class="col-12 mb-5">
              <div class="featured-faculty">
                <div class="row align-items-center">
                  <div class="col-lg-4">
                    <div class="featured-image">
                      <img src="{{ asset('storage/' . $principal->photo) }}" class="img-fluid" alt="Featured Faculty">
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="featured-content">
                      <div class="faculty-badge">Featured Faculty</div>
                      <h2>Professor Ihsan Ali Rind</h2>
                      <p class="title">Principal of College &amp; Professor of Zoology</p>
                      <p class="biography">It is my pleasure to welcome you to our institution, where we are committed to providing quality education, developing strong character, and preparing our students to meet the challenges of a changing world.
                         We believe that education is not only about academic excellence but also about
                          building confidence, discipline, integrity, and a sense of responsibility. The dedicated 
                          faculty members and hardworking staff work together to create a condusive learning environment, where the 
                          students can discover their potential, develop their critical thinking skills, and pursue their aspirations.
                           I encourage our students to learn with curiosity, develop mutual respect , explore opportunities, 
                           and strive for excellence in every walk of life. Together, with the support of the parents 
                           and the community, we can build a brighter and successful future for our students.</p>
                      <div class="expertise-areas">
                        <span>Zoology</span>
                        <span>Genetics</span>
                        
                      </div>
                      <div class="contact-actions">
                        <a href="#" class="contact-btn">Contact</a>
                        <div class="social-links">
                          <a href="#"><i class="bi bi-linkedin"></i></a>
                          <a href="#"><i class="bi bi-envelope"></i></a>
                          <a href="#"><i class="bi bi-globe"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

           

            
            
            
          </div>
        </div>


      </div>

    </section><!-- /Faculty  Staff Section -->



 

@endsection