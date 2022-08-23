@extends('admin.layouts.template')

@section('title', 'Parnert')

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
                    <div class="box-title">
                        <i class="fa fa-plus"></i> Tambah Data
                    </div>
                </div>
                <form action="{{ url('/admin/master/partner') }}" method="POST" id="tambahPartner" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="parnert_nama"> Nama Parnert </label>
                            <input type="text" class="form-control" name="parnert_nama" value="{{ old('parnert_nama') }}" id="parnert_nama"
                                placeholder="Masukkan Nama Parnert">
                        </div>
                        <div class="form-group">
                            <label for="parnert_logo"> Logo Parnert </label>
                            <input type="file" class="form-control" name="parnert_logo" value="{{ old('parnert_logo') }}" id="parnert_logo">
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
                        <i class="fa fa-users"></i> Data @yield('title')
                    </h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Nama</th>
                                <th>Logo</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 0;
                            @endphp
                            @foreach ($data_parnert as $data)
                                <tr>
                                    <td class="text-center">{{ ++$no }}.</td>
                                    <td>{{ $data->parnert_nama }}</td>
                                    <td>{{ $data->parnert_logo }}</td>
                                    <td class="text-center">
                                        <button onclick="editParnert({{ $data->id }})" type="button"
                                            class="btn btn-warning btn-sm btn-social" data-toggle="modal"
                                             data-target="#modal-default">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                        <form action="{{ url('/admin/master/parnert' . encrypt($data->id)) }}" method="POST"
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
                <form action="{{ url('/admin/master/parnert/simpan') }}" id="editPartner" method="POST">
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
        function editPartner(id) {
            $.ajax({
                url: "{{ url('/admin/master/parnert/edit') }}",
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

        ! function(a, i, r) {
            var e = {};
            e.UTIL = {
                setupFormValidation: function() {
                    a("#tambahPartner").validate({
                            ignore: "",
                            rules: {
                                partner_nama: {
                                    required: !0
                                },
                                partner_logo: {
                                    required: !0
                                },
                            },
                            messages: {
                                partner_nama: {
                                    required: "nama partner harap di isi!"
                                },
                                partner_logo: {
                                    required: "logo partner harap di isi!"
                                },
                            },
                            submitHandler: function(a) {
                                a.submit()
                            }
                        }),
                        a("#editPartner").validate({
                            ignore: "",
                            rules: {
                                partner_nama: {
                                    required: !0
                                },
                                partner_logo: {
                                    required: !0
                                },
                            },
                            messages: {
                                 partner_nama: {
                                    required: "nama partner harap di isi!"
                                },
                                partner_logo: {
                                    required: "logo partner harap di isi!"
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
