<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Integrasia Utama</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 @include('layouts.partials.css.style')

  <!-- =======================================================
  * Template Name: BizLand - v3.7.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
    @include('layouts.partials.menu._navbar_top_bar')
    @include('layouts.partials.menu._navbar')

    @yield('content')
    @yield('index')
    @yield('about-us')
    @yield('solution')
    @yield('business-solutions')
    @yield('geosplatial-platforming')
    @yield('transportation-logistik')
    @yield('geosplatial-aset-management')
    @yield('smart-plantation')
    @yield('geosplatial-homan-resourch')
    @yield('multimedia-ondemand')
    @yield('project-management')
    @yield('other-solution')

    @yield('developer-modules')
    @yield('study-case')
    @yield('why-us')
    @yield('blog')
    @yield('blog-event')
    @yield('contact-us')





    @include('layouts.partials.menu._footer')
    @include('layouts.partials.js.javascript')
</body>
</html>
