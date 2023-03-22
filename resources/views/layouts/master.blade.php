<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @yield('custom_css_files')
    <title>@yield('title','Laravel8')</title>
  </head>
  <body>
    
    <div class="content-wrapper">
        @include('includes.header')
        <div class="d-flex flex-column h-100">
          <!-- FOR DEMO PURPOSE -->
          <section class="hero text-white py-5 flex-grow-1">
            @yield('page-content')
          </section>
          @include('includes.footer')
        </div>        
    </div>
    
    @include('includes.library_scripts')
    @yield('customjs_scripts')

  </body>
</html>