
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

<a href="{{ route('frontend.index') }}" class="logo d-flex align-items-center me-auto me-xl-0">
  <img src="{{ asset('storage/logo/final-logo.png') }}"
       alt="Government Degree College 60 Mile"
       class="responsive-header-logo">
</a>


      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('frontend.index') }}" class="active">Home</a></li>
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="{{ route('frontend.mission') }}">Vision and Mission</a></li>
              <li><a href="{{ route('frontend.principal') }}">Principal of College</a></li>
              <li><a href="{{ route('frontend.faculty-members') }}">Faculty &amp; Staff</a></li>
              <li><a href="{{ route('structure.organization') }}">Organizational structure</a></li>
              <li><a href="{{ route('frontend.gallery') }}">Picture Gallery</a></li>
              
              <li><a href="{{ route('frontend.campus-facilities') }}">Campus &amp; Facilities</a></li>
            </ul>
          </li>
          <li><a href="{{ route('front-programs.index') }}">Programs</a></li>
          <li><a href="{{ route('frontend.admissions') }}">Admissions</a></li>
          <li><a href="{{ route('frontend.downloads') }}">Downloads</a></li>
          
          <li><a href="{{ route('frontend.fee-structure') }}">Fee structure</a></li>
          <!-- <li><a href="students-life.html">Students Life</a></li> -->
          <!-- <li><a href="news.html">News</a></li> -->
          <li><a href="{{ route('frontend.events') }}">Events</a></li>
          <!-- <li><a href="alumni.html">Alumni</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>More Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="news-details.html">News Details</a></li>
              <li><a href="event-details.html">Event Details</a></li>
              <li><a href="privacy.html">Privacy</a></li>
              <li><a href="terms-of-service.html">Terms of Service</a></li>
              <li><a href="404.html">Error 404</a></li>
              <li><a href="starter-page.html">Starter Page</a></li>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="{{ route('frontend.contact') }}">Contact And Grievance</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>