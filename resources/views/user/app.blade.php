<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ empty($profil_perusahaan->nama_perusahaan) ? '' : $profil_perusahaan->nama_perusahaan }}   </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    @include('user.layouts.css.style')

    @yield('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <script></script>

</head>

<body>
    @include('user.layouts.partials.topbar.topbar')
    @include('user.layouts.partials.navbar.navbar')

    <main id="main">
        @yield('content')

        @include('user.menu.contact_us')
    </main>

    @include('user.layouts.partials.footer.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

</body>
@include('user.layouts.js.style')

@yield('js')

</html>
