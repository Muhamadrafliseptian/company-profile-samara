<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    @yield('css')

    @include('admin.layouts.partials.css.style')

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        @include('admin.layouts.partials.header.header')
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ url('/template') }}/dist/img/user2-160x160.jpg" class="img-circle"
                            alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>{{ Auth::user()->nama }}</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                    class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>

                @include('admin.layouts.partials.sidebar.sidebar')

            </section>
        </aside>

        <div class="content-wrapper">
            @yield('breadcrumb')

            <section class="content">
                @yield('content')
            </section>
        </div>

        @include('admin.layouts.partials.footer.footer')

        <div class="control-sidebar-bg"></div>
    </div>

    @include('admin.layouts.partials.js.style')

    @yield('js')
</body>

</html>
