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
              <h1 class="heading-title">Downloads</h1>
              
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
                @foreach($admissions as $admission)
                <div class="schedule-row">
                  <div class="schedule-time">{{$admission->title}}</div>
                  <div class="schedule-activity">
                    
                    <p> @if($admission->attachment)
                <a href="{{ asset('storage/' . $admission->attachment) }}"
                  target="_blank"
                  class="btn btn-sm btn-primary">
                    <i class="bi bi-eye"></i> Download
                </a>
      @endif</p>
                  </div>
                  
                </div>
                @endforeach
                
              </div>

             
            </div>
          </div>

          
        </div>

        <div class="row">
          <div class="col-lg-8">
            
            <div class="event-content">

              <h3 class="mt-4">Notices</h3>
              <div class="schedule-table">

                @foreach($notices as $notice)

                <div class="schedule-row">
                  <div class="schedule-time">{{$notice->title}}</div>
                  <div class="schedule-activity">
                    
                    <p> @if($notice->attachment)
                <a href="{{ asset('storage/' . $notice->attachment) }}"
                  target="_blank"
                  class="btn btn-sm btn-primary">
                    <i class="bi bi-eye"></i> Download
                </a>
      @endif</p>
                  </div>
                </div>

                @endforeach
                   
              </div>
             
            </div>
          </div>
 
        </div>
      </div>

    </section><!-- /Event Section -->

 

  

@endsection