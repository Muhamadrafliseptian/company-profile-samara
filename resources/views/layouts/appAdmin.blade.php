<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Integrasia Utama</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('layouts.partials.css.style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    @yield('cobaan')

    @yield('content')
    @yield('index')
    @yield('about-us')
    @yield('solution')
    @yield('blog-lowongan-kerja')
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
    @yield('single_partner')
    @yield('why-us')
    @yield('why-us-details1-')
    @yield('blog')
    @yield('blog-event')
    @yield('blog-press')
    @yield('blog-single')
    @yield('contact-us')
    @yield('free-download')

    @include('layouts.partials.menu._footer')
</body>
@include('layouts.partials.js.javascript')

</html>
