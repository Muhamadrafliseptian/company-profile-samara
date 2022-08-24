@extends('admin.layouts.template')

@section('title', 'Study Case')

@section('css')

    <link rel="stylesheet" href="{{ url('/template') }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

@endsection

@section('breadcrumb')
    <section class="content-header">
        <h1>
            @yield('title')
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/admin/dashboard') }}">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li class="active">
                @yield('title')
            </li>
        </ol>
    </section>
@endsection

@section('content')

    @if (empty($data_partner->count()))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible">
                    <h4>
                        <i class="icon fa fa-times"></i> Perhatian
                    </h4>
                    Data <strong>Partner</strong> masih kosong. Silahkan Isi Terlebih Dahulu. Klik <a
                        href="{{ url('/admin/master/partner') }}" target="_blank">LINK</a> berikut untuk menuju ke Halaman
                    Partner
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">
                            <i class="fa fa-edit"></i> Data @yield('title')
                        </h3>
                        <a href="{{ url('/admin/master/study_case/create') }}"
                            class="btn btn-primary btn-sm btn-social pull-right">
                            <i class="fa fa-plus"></i> Tambah
                        </a>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Partner</th>
                                    <th>Judul Study Case</th>
                                    <th class="text-center">Dibuat Oleh</th>
                                    <th class="text-center">Tanggal Buat</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 0;
                                @endphp
                                @foreach ($data_study_case as $data)
                                    <tr>
                                        <td class="text-center">{{ ++$no }}.</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection

@section('js')
    <script src="{{ url('/template') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/template') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function() {
            $('#example1').DataTable()
        });
    </script>
@endsection
