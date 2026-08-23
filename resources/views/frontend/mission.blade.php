@extends('frontend.layouts.app')
@section('title','About Us - 60 Mile Degree College')
@section('content')
    

    <!-- Page Title -->
    <div class="page-title">
      <
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">About Us </a></li>
            <li class="current">Mission And Vision</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- History Section -->
    <section id="history" class="history section">

      <div class="container">

        <div class="hero-content text-center mb-5">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <span class="section-badge">Mission</span>
              
              <p class="hero-description">To produce professional graduates to cater the socio-economic requirements of the national and international market for sustainable development.</p>
            </div>

            <div class="col-lg-6">
              <span class="section-badge">Vision</span>
              <p class="hero-description">To provide quality and state-of-the-art education to students in the prescribed areas of Engineering, Science & Technology, in order to make them outstanding professionals and better human beings; so that they become capable of contributing effectively and amicably towards sustainable development.</p>
            </div>
          </div>
        </div>

        

      </div>

    </section><!-- /History Section -->

    <!-- Leadership Section -->
    <!-- <section id="leadership" class="leadership section">

      <div class="container">

        <div class="intro-section">
          <div class="content-wrapper">
            <span class="intro-label">Leadership Excellence</span>
            <h2 class="intro-title">Visionary Leaders Shaping Tomorrow's Education</h2>
            <p class="intro-description">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae ultricies eget, tempor sit amet ante. Donec eu libero sit amet quam egestas semper.</p>
          </div>
        </div>

        <div class="leadership-grid">
          <div class="featured-leader">
            <div class="leader-image-large">
              <img src="assets/img/education/teacher-3.webp" alt="Principal" class="img-fluid">
            </div>
            <div class="leader-details">
              <h3>Dr. Margaret Thompson</h3>
              <span class="leader-title">Principal &amp; Educational Director</span>
              <p class="leader-bio">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris viverra veniam sit amet lacus cursus venenatis. Etiam consectetur aliquam lorem quis viverra.</p>
              <div class="leader-stats">
                <div class="stat-item">
                  <span class="stat-number">15</span>
                  <span class="stat-label">Years Leading</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">250+</span>
                  <span class="stat-label">Graduates</span>
                </div>
                <div class="stat-item">
                  <span class="stat-number">PhD</span>
                  <span class="stat-label">Education</span>
                </div>
              </div>
              <div class="social-connect">
                <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="social-link"><i class="bi bi-envelope"></i></a>
                <a href="#" class="social-link"><i class="bi bi-globe"></i></a>
              </div>
            </div>
          </div>

          <div class="leadership-team-grid">
            <div class="team-member">
              <div class="member-photo">
                <img src="assets/img/person/person-m-4.webp" alt="Vice Principal" class="img-fluid">
                <div class="member-overlay">
                  <div class="member-social">
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-envelope"></i></a>
                  </div>
                </div>
              </div>
              <div class="member-info">
                <h4>James Wilson</h4>
                <span class="member-role">Vice Principal</span>
                <p class="member-description">Nunc dignissim risus id metus molestie tempor. Cras vestibulum bibendum augue praesent mattis.</p>
              </div>
            </div>

            <div class="team-member">
              <div class="member-photo">
                <img src="assets/img/person/person-f-6.webp" alt="Academic Coordinator" class="img-fluid">
                <div class="member-overlay">
                  <div class="member-social">
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-envelope"></i></a>
                  </div>
                </div>
              </div>
              <div class="member-info">
                <h4>Elena Rodriguez</h4>
                <span class="member-role">Academic Coordinator</span>
                <p class="member-description">Praesent sapien massa convallis a pellentesque nec egestas non nisi cras adipiscing.</p>
              </div>
            </div>

            <div class="team-member">
              <div class="member-photo">
                <img src="assets/img/person/person-m-9.webp" alt="Student Affairs" class="img-fluid">
                <div class="member-overlay">
                  <div class="member-social">
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-envelope"></i></a>
                  </div>
                </div>
              </div>
              <div class="member-info">
                <h4>Michael Chen</h4>
                <span class="member-role">Student Affairs Director</span>
                <p class="member-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
              </div>
            </div>

            <div class="team-member">
              <div class="member-photo">
                <img src="assets/img/person/person-f-11.webp" alt="Curriculum Head" class="img-fluid">
                <div class="member-overlay">
                  <div class="member-social">
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-envelope"></i></a>
                  </div>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Mitchell</h4>
                <span class="member-role">Curriculum Head</span>
                <p class="member-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.</p>
              </div>
            </div>

            <div class="team-member">
              <div class="member-photo">
                <img src="assets/img/person/person-m-13.webp" alt="Operations Manager" class="img-fluid">
                <div class="member-overlay">
                  <div class="member-social">
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-envelope"></i></a>
                  </div>
                </div>
              </div>
              <div class="member-info">
                <h4>David Kumar</h4>
                <span class="member-role">Operations Manager</span>
                <p class="member-description">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt.</p>
              </div>
            </div>

            <div class="team-member">
              <div class="member-photo">
                <img src="assets/img/person/person-f-14.webp" alt="Admissions Director" class="img-fluid">
                <div class="member-overlay">
                  <div class="member-social">
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-envelope"></i></a>
                  </div>
                </div>
              </div>
              <div class="member-info">
                <h4>Lisa Anderson</h4>
                <span class="member-role">Admissions Director</span>
                <p class="member-description">Ut enim ad minima veniam quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="leadership-philosophy">
          <div class="philosophy-content">
            <h3>Our Leadership Philosophy</h3>
            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt.</p>
            <div class="philosophy-points">
              <div class="point">
                <i class="bi bi-lightbulb"></i>
                <span>Innovation-driven educational approach</span>
              </div>
              <div class="point">
                <i class="bi bi-people"></i>
                <span>Student-centered leadership practices</span>
              </div>
              <div class="point">
                <i class="bi bi-graph-up"></i>
                <span>Continuous improvement mindset</span>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>/Leadership Section -->

 

@endsection