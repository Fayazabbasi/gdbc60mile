<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>AdminLTE v4 | Dashboard</title>

    <!--begin::Theme Init (prevents flash of incorrect theme on load, #6043)-->
     @stack('scripts')
    <!--end::Theme Init-->

    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->

    <!--begin::Primary Meta Tags-->
    <meta name="title" content="AdminLTE v4 | Dashboard" />
    <meta name="author" content="ColorlibHQ" />
    <meta
      name="description"
      content="AdminLTE is a free Bootstrap 5 admin dashboard template with almost 50 example pages, built with vanilla JS and designed with accessibility in mind."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard, accessible admin panel"
    />
    <!--end::Primary Meta Tags-->

    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    


        <!-- styles here -->

        @include('backend.partials.styles')

       
       @stack('styles')
       

  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="skip-links"><a href="#main" class="skip-link">Skip to main content</a><a href="#navigation" class="skip-link">Skip to navigation</a></div>
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      

        <!-- nav here -->

      <!--end::Header-->
      <!--begin::Sidebar-->
      
 
        <!-- nav here -->
           @include('backend.partials.nav')


          <!-- sidebar here -->

          @include('backend.partials.sidebar')


         <!-- main here -->

           @yield('content')
          
      <!--end::App Main-->
      <!--begin::Footer-->
     

        <!-- footer here -->
 
          @include('backend.partials.footer')

      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    


       <!-- scripts here -->
       
        @include('backend.partials.scripts')

    <!--end::Script-->
  </body>
  <!--end::Body-->
</html>
