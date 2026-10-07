@extends('frontend.layouts.app')
@section('title', 'Contact')

@section('content')

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">Contact</h1>
              <p class="mb-0">
                Have a question, need information, or would like to get in touch with Government Degree College 60 Mile? We are here to assist you. Whether you are a student, parent, or visitor, you can contact us for information about admissions, academic programs, college facilities, notices, and other educational matters.

Please use the contact form below to send us your message. Our college administration will review your inquiry and respond as soon as possible. We welcome your questions, suggestions, and feedback as we continue to provide quality education and support to our students.

              </p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container">

        <div class="row gy-4 mb-5">
          <div class="col-lg-4">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <h3>Our Address</h3>
              <p>Government Degree College 60 Mile.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-telephone"></i>
              </div>
              <h3>Contact Number</h3>
              <p>Mobile: +92333 7083339<br>
                Email: Gdc60mile@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-clock"></i>
              </div>
              <h3>Opening Hour</h3>
              <p>Monday - Fri: 9:00AM - 1:30PM<br>
                Saturday - Sunday: Closed</p>
            </div>
          </div>
        </div>
          
        <div class="row">
          <div class="col-lg-12">
            <div class="form-wrapper">
              <form action="{{ route('contact.store') }}" method="post" role="form" class="php-email-form">
                 @csrf  
              <div class="row">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-person"></i></span>
                      <input type="text" name="name" class="form-control" placeholder="Your name*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                      <input type="email" class="form-control" name="email" placeholder="Email address*" required="">
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-phone"></i></span>
                      <input type="text" class="form-control" name="phone" placeholder="Phone number*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-list"></i></span>
                      <select name="subject" class="form-control" required="">
                        
                        <option value="">I am *</option>
                        <option value="Service 1">Student</option>
                        <option value="Service 2">Parent</option>
                        <option value="Service 3">Other</option>
                        
                      </select>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                      <textarea class="form-control" name="message" rows="6" placeholder="Write a message*" required=""></textarea>
                    </div>
                  </div>
                  <div class="my-3">
                    <!-- <div class="loading">Loading</div> -->
                    <!-- <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div> -->
                     @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
           @endif
           @if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                  </div>
                  <div class="text-center">
                    <button type="submit">Submit Message</button>
                  </div>

                </div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- /Contact Section -->

@endsection