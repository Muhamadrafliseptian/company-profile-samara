@extends('admin.layouts.template')

@section('title', 'Benefit')

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
                <form action="{{ url('/admin/pengaturan/benefit') }}" id="tambahBenefit" method="POST">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="benefit_judul"> Judul </label>
                            <input type="text" class="form-control" name="benefit_judul"
                                value="{{ old('benefit_judul') }}" id="benefit_judul" placeholder="Masukkan Judul">
                        </div>
                        <div class="form-group">
                            <label for="benefit_deskrispi"> Deskripsi </label>
                            <textarea name="benefit_deskripsi" class="form-control" value="{{ old('benefit_deskripsi') }}" id="benefit_deskripsi"
                                rows="10" placeholder="Masukkan Deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-danger btn-sm btn-rounded">
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
                        <i class="fa fa-tags"></i> Benefit
                    </h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 0;
                            @endphp
                            @foreach ($data_benefit as $data)
                                <tr>
                                    <td class="text-center">{{ ++$no }}.</td>
                                    <td>{{ $data->benefit_judul }}</td>
                                    <td>{{ $data->benefit_deskripsi }}</td>
                                    <td class="text-center">
                                        <button onclick="editBenefit({{ $data->id }})" type="button"
                                            class="btn btn-warning btn-sm btn-social" data-toggle="modal"
                                            data-target="#modal-default">
                                            <i class="fa fa-edit"></i> Edit
                                        </button>
                                        <form action="{{ url('/admin/pengaturan/benefit/' . encrypt($data->id)) }}"
                                            method="POST" style="display: inline;">
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
                <form action="{{ url('/admin/pengaturan/benefit/simpan') }}" id="editBenefit" method="POST">
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
        function editBenefit(id) {
            $.ajax({
                url: "/admin/pengaturan/benefit/edit",
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
                        a("#tambahBenefit").validate({
                                ignore: "",
                                rules: {
                                    benefit_icon: {
                                        required: !0
                                    },
                                    benefit_judul: {
                                        required: !0
                                    },
                                    benefit_deskripsi: {
                                        required: !0
                                    }
                                },
                                messages: {
                                    benefit_icon: {
                                        required: "icon benefit harap di isi!"
                                    },
                                    benefit_judul: {
                                        required: "judul benefit harap di isi!"
                                    },
                                    benefit_deskripsi: {
                                        required: "deskripsi benefit harap di isi!"
                                    },
                                },
                                submitHandler: function(a) {
                                    a.submit()
                                }
                            }),
                            a("#editBenefit").validate({
                                ignore: "",
                                rules: {
                                    benefit_icon: {
                                        required: !0
                                    },
                                    benefit_judul: {
                                        required: !0
                                    },
                                    benefit_deskripsi: {
                                        required: !0
                                    }
                                },
                                messages: {
                                    benefit_icon: {
                                        required: "icon benefit harap di isi!"
                                    },
                                    benefit_judul: {
                                        required: "judul benefit harap di isi!"
                                    },
                                    benefit_deskripsi: {
                                        required: "deskripsi benefit harap di isi!"
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
