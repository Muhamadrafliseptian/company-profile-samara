@php
use App\Models\ProfilPerusahaan;
$data_profil = ProfilPerusahaan::first();
@endphp
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        @if (empty($data_profil->nama_perusahaan))
            -
        @else
            {{ $data_profil->nama_perusahaan }}
        @endif
        | @yield('title')
    </title>
    <link rel="icon" type="image/png" href="{{ empty($data_profil->logo) ? '' : $data_profil->logo }}" />

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
                        @if (empty(Auth::user()->foto))
                            <img src="{{ url('/gambar/gambar_user.png') }}" class="img-circle" alt="User Image">
                        @else
                            <img src="{{ url('/storage/' . Auth::user()->foto) }}" class="img-circle" alt="User Image">
                        @endif
                    </div>
                    <div class="pull-left info">
                        <p>{{ Auth::user()->nama }}</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

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
    @if (session('message'))
        {!! session('message') !!}
    @endif
    @yield('js')

    <script>
        $('.btn-delete').click(function(e) {
            let form = $(this).closest("form");
            e.preventDefault();
            swal({
                    title: "Maaf!",
                    text: "Data anda akan dihapus!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    buttons: ['Batal', 'Hapus']
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
</body>

</html>
