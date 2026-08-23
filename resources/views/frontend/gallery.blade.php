@extends('frontend.layouts.app')
@section('title','About Us - 60 Mile Degree College')
@section('content')
    


    <!-- Page Title -->
    <div class="page-title">
      
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Picture Gallery</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Students Life Section -->
    <section id="students-life" class="students-life section">

     

        

      
          <!-- rows -->
          <div class="row g-3">


             <!-- columns -->
            <div class="col-lg-3">
              <div class="activity-card">
                <div class="activity-image">
                  <img src="{{ asset('frontend/assets/imgs/activities-3.png') }}" alt="Research projects" class="img-fluid" loading="lazy">
                </div>
                
              </div>
            </div>

            <div class="col-lg-3">
              <div class="activity-card">
                <div class="activity-image">
                  <img src="{{ asset('frontend/assets/imgs/activities-6.png') }}" alt="Cultural activities" class="img-fluid" loading="lazy">
                </div>
                
              </div>
            </div>

            <div class="col-lg-3">
              <div class="activity-card">
                <div class="activity-image">
                  <img src="{{ asset('frontend/assets/imgs/activities-9.png') }}" alt="Sports activities" class="img-fluid" loading="lazy">
                </div>
                
              </div>
            </div>

            <div class="col-lg-3">
              <div class="activity-card">
                <div class="activity-image">
                  <img src="{{ asset('frontend/assets/imgs/activities-6.png') }}" alt="Cultural activities" class="img-fluid" loading="lazy">
                </div>
                
              </div>
            </div> 
            <!-- end coloumn -->

           <!-- end row -->
          </div>







        
    </section><!-- /Students Life Section -->



  
 

@endsection