@extends('frontend.layouts.app')
@section('title','Downloads - 60 Mile Degree College')
@push('styles')
<style>

    .schedule-activity {
    text-align: center;
}

.schedule-activity a {
    display: inline-block;
}
</style>
@endpush
@section('content')

 


    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Event Details</h1>
              <p class="mb-0">
                Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo
                odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum
                debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat
                ipsum dolorem.
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route('frontend.index') }}">Home</a></li>
            <li class="current">Downloads</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Event Section -->
    <section id="event" class="event section">

      <div class="container">

        <div class="row">
          <div class="col-lg-8">
            

            

            <div class="event-content">

              

              <h3 class="mt-4">Downloads</h3>
              <div class="schedule-table">
                <div class="schedule-row">
                  <div class="schedule-time">Admisiions Form (XI)</div>
                  <div class="schedule-activity">
                    
                    <p><a href="#">downlaod</a></p>
                  </div>
                </div>
                <div class="schedule-row">
                  <div class="schedule-time">Admisiions Form (XII)</div>
                  <div class="schedule-activity">
                    
                    <p><a href="#">downlaod</a></p>
                  </div>
                </div>
                <div class="schedule-row">
                  <div class="schedule-time">Admisiions Form (ADS)</div>
                  <div class="schedule-activity">
                    
                    <p><a href="#">downlaod</a></p>
                  </div>
                </div>
                <div class="schedule-row">
                  <div class="schedule-time">Admisiions Form (ADA)</div>
                  <div class="schedule-activity">
                    
                    <p><a href="#">downlaod</a></p>
                  </div>
                </div>
                
              </div>

             
            </div>
          </div>

          
        </div>

      </div>

    </section><!-- /Event Section -->

 

  

@endsection