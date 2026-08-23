@extends('frontend.layouts.app')
@section('title','About Us - 60 Mile Degree College')
@push('styles')
<style>

.faculty--staff .faculty-profile {
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    text-align: center !important;
}

.faculty--staff .faculty-profile .profile-image {
    width: 150px !important;
    height: 150px !important;
    min-width: 150px !important;
    margin: 0 auto 20px !important;
    border-radius: 50% !important;
    overflow: hidden !important;
}

.faculty--staff .faculty-profile .profile-image img {
    width: 150px !important;
    height: 150px !important;
    max-width: none !important;
    object-fit: cover !important;
    object-position: center !important;
    display: block !important;
    border-radius: 50% !important;
}

.faculty--staff .faculty-profile .profile-content {
    width: 100% !important;
    text-align: center !important;
}

.faculty--staff .faculty-profile .profile-content h3 {
    text-align: center !important;
    margin-bottom: 8px;
}

.faculty--staff .faculty-profile .profile-content .position {
    text-align: center !important;
    margin-bottom: 8px;
}

.faculty--staff .faculty-profile .profile-content .department-info {
    text-align: center !important;
}

.faculty--staff .faculty-profile .research-focus {
    justify-content: center !important;
}

</style>
@endpush
@section('content')
    


    <!-- Page Title -->
    <div class="page-title">
      
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Faculty Staff</li>
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
        <hr>
         <div class="faculty-showcase">
          <div class="row g-5">
            <!-- Featured Faculty Member -->
            
             <h4>Administrative Staff</h4>
            <!-- Faculty List -->
             @if(!empty($administrators))
               @foreach($administrators as $administrator)
            <div class="col-lg-6">
              <div class="faculty-profile">
                <div class="profile-image">
                  <img src="{{ asset('storage/' . $administrator->photo) }}" alt="{{ $administrator->name }}" class="img-fluid" alt="Faculty">
                </div>
                <div class="profile-content">
                  <h3>{{ $administrator->specialization }}</h3>
                  <p class="position">{{ $administrator->name }}</p>
                  <div class="department-info">{{ $administrator->qualification }}</div>
                  <!-- <div class="research-focus">
                    <span>Maths</span>
                    <span>Calculus</span>
                  </div> -->
                </div>
                <!-- <div class="profile-actions">
                  <a href="#" class="view-profile">View Profile</a>
                </div> -->
              </div>
            </div>
               @endforeach
            @endif

            

            

            

            

            
          </div>
        </div>
<hr>
        <div class="faculty-showcase">
          <div class="row g-5">
            <!-- Featured Faculty Member -->
            
             <h4>Teaching Staff</h4>
            <!-- Faculty List -->
             @if(!empty($lecturers))
               @foreach($lecturers as $lecturer)
            <div class="col-lg-6">
              <div class="faculty-profile">
                <div class="profile-image">
                  <img src="{{ asset('storage/' . $lecturer->photo) }}" alt="{{ $lecturer->name }}" class="img-fluid" alt="Faculty">
                </div>
                <div class="profile-content">
                  <h3>{{ $lecturer->specialization }}</h3>
                  <p class="position">{{ $lecturer->name }}</p>
                  <div class="department-info">{{ $lecturer->qualification }}</div>
                  <!-- <div class="research-focus">
                    <span>Maths</span>
                    <span>Calculus</span>
                  </div> -->
                </div>
                <!-- <div class="profile-actions">
                  <a href="#" class="view-profile">View Profile</a>
                </div> -->
              </div>
            </div>
               @endforeach
            @endif

            

            

            

            

            
          </div>
        </div>

<hr>
        <div class="faculty-showcase">
          <div class="row g-5">
            <!-- Featured Faculty Member -->
            
             <h4>Non Teaching Staff</h4>
            <!-- Faculty List -->
             @if(!empty($workers))
               @foreach($workers as $worker)
            <div class="col-lg-6">
              <div class="faculty-profile">
                <div class="profile-image">
                  <img src="{{ asset('storage/' . $worker->photo) }}" alt="{{ $worker->name }}" class="img-fluid" alt="Faculty">
                </div>
                <div class="profile-content">
                  <h3>{{ $worker->specialization }}</h3>
                  <p class="position">{{ $worker->name }}</p>
                  <div class="department-info">{{ $worker->qualification }}</div>
                  <!-- <div class="research-focus">
                    <span>Maths</span>
                    <span>Calculus</span>
                  </div> -->
                </div>
                <!-- <div class="profile-actions">
                  <a href="#" class="view-profile">View Profile</a>
                </div> -->
              </div>
            </div>
               @endforeach
            @endif

            

            

            

            

            
          </div>
        </div>

        <div class="load-more-section text-center mt-5">
          <a href="#" class="load-more-btn">Show More Faculty</a>
        </div>

      </div>

    </section><!-- /Faculty  Staff Section -->

  
 

@endsection