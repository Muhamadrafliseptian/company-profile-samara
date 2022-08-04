@extends('admin.layouts.template')

@section('title', 'Users')

@section('breadcrumb')
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <div class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            @yield('title')
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-title">
                    <div class="pull-right">
                        <form action="" method="get" style="flex-direction: row; ">
                            <input type="search" name="keyword" style="width: 200px;" placeholder="Search"
                                value="" />
                            <input type="submit" class="button button-primary" value="Cari">
                        </form>
                    </div>
                </div>
                <div class="bootstrap-data-table-panel">
                    <div class="table-responsive">
                        <table id="row-select" class="display table table-bordred table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Email</th>
                                    <th>Nama</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 0;
                                @endphp
                                @foreach ($data_user as $data)
                                    <tr>
                                        <td class="text-center">{{ ++$no }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-warning btn-sm">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ url('/template/theme') }}/js/lib/data-table/datatables.min.js"></script>
    <script src="{{ url('/template/theme') }}/js/lib/data-table/dataTables.buttons.min.js"></script>>
    <script src="{{ url('/template/theme') }}/js/lib/data-table/datatables-init.js"></script>
@endsection
