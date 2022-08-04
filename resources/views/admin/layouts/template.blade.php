<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focus Admin: Creative Admin Dashboard | @yield('title') </title>

    @include('admin.layouts.partials.icon.style')

    @include('admin.layouts.partials.css.style')

    @yield('css')
</head>

<body>

    @include('admin.layouts.partials.sidebar.sidebar')

    @include('admin.layouts.partials.header.header')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                @yield('breadcrumb')

                <section id="main-content">

                    @yield('content')


                    @include('admin.layouts.partials.footer.footer')
                </section>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    @include('admin.layouts.partials.js.style')

    @yield('js')
</body>

</html>
