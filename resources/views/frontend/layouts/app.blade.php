<html lang="en"><head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <meta name="robots" content="noindex, nofollow">
    <link href="{{ asset('storage/logo/final-logo.png') }}" rel="icon">
  <link href="{{ asset('storage/logo/final-logo.png') }}" rel="apple-touch-icon">
    <style>
      .faculty--staff .faculty-profile .profile-image img {
    width: 100%;
    height: 500px !important;
    object-fit: cover;
    transition: all 0.3s ease;
}

/* College logo */
/* Force-override default theme styles */
/* Container override to ensure flex alignment works */
.header .container-fluid,
.header .container-xl {
    display: flex !important;
    align-items: center !important;
    justify-content: space-between !important;
}

/* Logo alignment */
.header .logo {
    margin-right: auto !important;
    margin-left: 20px !important;
    display: flex !important;
    align-items: center !important;
}

/* Logo sizing */
.header .logo img.responsive-header-logo {
    width: 100px !important;
    height: 100px !important;
    max-height: none !important;
    object-fit: contain !important;
    object-position: center !important;
    border-radius: 50% !important;
}

/* Tablet */
@media (min-width: 768px) {
    .header .logo img.responsive-header-logo {
        width: 100px !important;
        height: 100px !important;
    }
}

/* Desktop */
@media (min-width: 1200px) {
    .header .logo img.responsive-header-logo {
        width: 100px !important;
        height: 100px !important;
    }
}

</style>
   <!-- Favicons -->
    {{-- styles starts here --}}
     @include('frontend.partials.styles')
    {{-- styles ends here --}}
    @stack('styles')
  <!-- =======================================================
  * Template Name: MySchool
  * Template URL: https://bootstrapmade.com/myschool-bootstrap-school-template/
  * Updated: Jul 28 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

 {{-- header starts here --}}
     @include('frontend.partials.header')
    {{-- header ends here --}}

  <main class="main">

    @yield('content')
  </main>
    {{-- footer starts here --}}
      @include('frontend.partials.footer')
      {{-- header ends here --}}
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  

   


   {{-- scripts starts here --}}
      @include('frontend.partials.scripts')
   {{-- scripts ends here --}}
  <!-- Vendor JS Files -->

</body></html>