<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title') </title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <meta name="robots" content="noindex, nofollow">

  <!-- Favicons -->
  {{-- styles starts here --}}
     @include('partials.styles')
    {{-- styles ends here --}}

  <!-- =======================================================
  * Template Name: UniPulse
  * Template URL: https://bootstrapmade.com/unipulse-bootstrap-university-template/
  * Updated: Mar 02 2026 with Bootstrap v5.3.8
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page" data-aos-easing="ease-in-out" data-aos-duration="600" data-aos-delay="0">

    {{-- header starts here --}}
     @include('partials.header')
    {{-- header ends here --}}

     {{-- main content starts here --}}
        <main class="main">

        @yield('content')
        

       </main>  
    
     {{-- main content ends here --}}



      {{-- footer starts here --}}
      @include('partials.footer')
      {{-- header ends here --}}

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center active"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

   


   {{-- scripts starts here --}}
      @include('partials.scripts')
   {{-- scripts ends here --}}
  <!-- Vendor JS Files -->
  
</body></html>


