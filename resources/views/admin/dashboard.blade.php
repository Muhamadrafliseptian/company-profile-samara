@php
use Carbon\Carbon;
@endphp

@extends('admin.layouts.template')

@section('title', 'Dashboard')

@section('css')

    <link rel="stylesheet" href="{{ url('/template') }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection

@section('breadcrumb')
    <section class="content-header">
        <h1>
            @yield('title')
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                @yield('title')
            </li>
        </ol>
    </section>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible">
                <h4>
                    <i class="icon fa fa-check"></i> Sukses
                </h4>
                Selamat Datang <b>{{ Auth::user()->nama }}</b>. di Halaman Admin <b>{{ $data_profil->nama_perusahaan }}
</b>
            </div>
        </div>
    </div>

    @if ($data_profil_perusahaan == 0)
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible">
                    <h4>
                        <i class="icon fa fa-times"></i> Perhatian
                    </h4>
                    Data <strong>PROFIL PERUSAHAAN</strong> masih kosong. Silahkan Isi Terlebih Dahulu. Klik <a
                        href="{{ url('/admin/profil_perusahaan') }}" target="_blank">LINK</a> berikut untuk menuju ke
                    Halaman Profil
                    Perusahaan
                </div>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="info-box">
                <span class="info-box-icon bg-blue"><i class="fa fa-image"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Blog</span>
                    <span class="info-box-number">{{ $data_blog }}</span>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-google-plus"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Client</span>
                    <span class="info-box-number">{{ $data_client }}</span>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-envelope"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Pesan</span>
                    <span class="info-box-number">{{ $data_pesan }}</span>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Users</span>
                    <span class="info-box-number">{{ $data_users }}</span>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-book"></i> Informasi Login
                    </h3>
                    <div class="pull-right">
                        <a href="{{ url('/admin/akun/informasi_login') }}">
                            Selengkapnya
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Nama</th>
                                <th>Login Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 0;
                            @endphp

                            @foreach ($data_informasi_login as $data)
                                <tr>
                                    <td class="text-center">{{ ++$no }}.</td>
                                    <td>{{ $data->nama }}</td>
                                    <td class="text-center">
                                        {{ Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->isoFormat('dddd, D MMMM Y H:mm:s') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ url('/template') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/template') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function() {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>

@endsection
