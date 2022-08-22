@extends('admin.layouts.template')

@section('title', 'Role')

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
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-plus"></i> Tambah Data
                    </h3>
                </div>
                <form action="{{ url('/admin/akun/role') }}" method="POST" id="tambahRole">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="role"> Role </label>
                            <input type="text" class="form-control" name="role" id="role" value="{{ old('role') }}"
                                placeholder="Masukkan Role">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-danger btn-sm btn-social">
                            <i class="fa fa-times"></i> Batal
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm btn-social">
                            <i class="fa fa-plus"></i> Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-8">
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
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 0;
                            @endphp
                            @foreach ($data_role as $role)
                                <tr>
                                    <td class="text-center">{{ ++$no }}.</td>
                                    <td>{{ $role->role }}</td>
                                    <td class="text-center">
                                        <button onclick="aturMenu({{ $role->id }})"
                                            class="btn btn-info btn-sm btn-social" data-toggle="modal"
                                            data-target="#atur-menu">
                                            <i class="fa fa-pencil"></i> Atur Menu
                                        </button>
                                        <button onclick="editRole({{ $role->id }})" type="button"
                                            class="btn btn-warning btn-sm btn-social" data-toggle="modal"
                                            data-target="#modal-default">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                        <form action="{{ url('/admin/akun/role/' . encrypt($role->id)) }}" method="POST"
                                            style="display: inline;">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm btn-delete btn-social">
                                                <i class="fa fa-trash-o"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Data -->
    <div class="modal fade" id="atur-menu">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">
                        <i class="fa fa-edit"></i> Atur Menu
                    </h4>
                </div>
                <form action="{{ url('/admin/akun/pengaturan/menu_role/') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="modal-body" id="modal-atur-menu">

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger btn-sm btn-social pull-left">
                            <i class="fa fa-times"></i> Batal
                        </button>
                        <button type="submit" class="btn btn-success btn-sm btn-social">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END -->

    <!-- Edit Data -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">
                        <i class="fa fa-edit"></i> Edit Data
                    </h4>
                </div>
                <form action="{{ url('/admin/akun/role/simpan') }}" method="POST" id="editRole">
                    @method('PUT')
                    {{ csrf_field() }}
                    <div class="modal-body" id="modal-content-edit">

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger btn-sm btn-social pull-left">
                            <i class="fa fa-times"></i> Batal
                        </button>
                        <button type="submit" class="btn btn-success btn-sm btn-social">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END -->

@endsection

@section('js')

    <script src="{{ url('/template') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/template') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        function editRole(id) {
            $.ajax({
                url: "/admin/akun/role/edit",
                type: "GET",
                data: {
                    id: id
                },
                success: function(data) {
                    $("#modal-content-edit").html(data);
                    return true;
                }
            })
        }

        function aturMenu(id) {
            $.ajax({
                url: "{{ url('/admin/akun/role/menu_role') }}",
                type: "GET",
                data: {
                    id: id
                },
                success: function(data) {
                    $("#modal-atur-menu").html(data);
                    return true;
                }
            })
        }

        $(function() {
                $('#example1').DataTable()
                $('#example2').DataTable()
            })

            ! function(a, i, r) {
                var e = {};
                e.UTIL = {
                    setupFormValidation: function() {
                        a("#tambahRole").validate({
                                ignore: "",
                                rules: {
                                    role: {
                                        required: !0
                                    }
                                },
                                messages: {
                                    role: {
                                        required: "Kolom Role Harap di Isi!"
                                    }
                                },
                                submitHandler: function(a) {
                                    a.submit()
                                }
                            }),
                            a("#editRole").validate({
                                ignore: "",
                                rules: {
                                    role: {
                                        required: !0
                                    },
                                },
                                messages: {
                                    role: {
                                        required: "Kolom Role Harap di Isi!"
                                    },
                                },
                                submitHandler: function(a) {
                                    a.submit()
                                }
                            })
                    }
                }, a(r).ready(function(a) {
                    e.UTIL.setupFormValidation()
                })
            }(jQuery, window, document);
    </script>

@endsection
