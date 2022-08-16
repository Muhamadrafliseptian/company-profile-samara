@extends('admin.layouts.template')

@section('title', 'Users')

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
                        <i class="fa fa-users"></i> Data @yield('title')
                    </h3>
                    <div class="pull-right">
                        <a href="{{ url('/admin/akun/users/create') }}" class="btn btn-primary btn-sm btn-social">
                            <i class="fa fa-plus"></i> Tambah
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
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
                            @foreach ($data_users as $data)
                                <tr>
                                    <td class="text-center">{{ ++$no }}.</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->nama }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('/admin/akun/users/' . encrypt($data->id) . '/edit') }}"
                                            class="btn btn-warning btn-sm btn-social">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        @if ($data->created_by == 0)
                                            -
                                        @else
                                            <form action="{{ url('/admin/akun/users/' . encrypt($data->id)) }}"
                                                method="POST" style="display: inline;">
                                                @method('DELETE')
                                                @csrf
                                                <input type="hidden" name="gambarLama" value="{{ $data->foto }}">
                                                <button type="submit" class="btn btn-danger btn-sm btn-delete btn-social">
                                                    <i class="fa fa-trash-o"></i> Hapus
                                                </button>
                                            </form>
                                        @endif
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
