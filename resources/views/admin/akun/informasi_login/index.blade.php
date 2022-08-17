@php
use Carbon\Carbon;
@endphp

@extends('admin.layouts.template')

@section('title', 'Informasi Login')

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

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-book"></i> Data @yield('title')
                    </h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Nama</th>
                                <th class="text-center">Login Tanggal</th>
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
