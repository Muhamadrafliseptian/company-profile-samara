@extends('admin.layouts.template')

@section('title', 'Edit Menu Role')

@section('css')

    <link rel="stylesheet" href="{{ url('/template') }}/bower_components/select2/dist/css/select2.min.css">

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
                <a href="{{ url('/admin/pengaturan/menu') }}">
                 <i class="fa fa-bars"></i> Menu</a>
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
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-edit"></i> Edit Data
                    </h3>
                </div>
                <form action="{{ url('/admin/pengaturan/menu/' . encrypt($edit->id)) }}" id="editMenu" method="POST">
                    @method('PUT')
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="menu_nama"> Nama Menu </label>
                                    <input type="text" class="form-control" name="menu_nama" id="menu_nama"
                                        placeholder="Masukkan Nama Menu" value="{{ $edit->menu_nama }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="menu_icon"> Icon Menu </label>
                                    <input type="text" class="form-control" name="menu_icon" id="menu_icon"
                                        placeholder="Masukkan Icon Menu" value="{{ $edit->menu_icon }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="menu_url"> URL Menu </label>
                                    <input type="text" class="form-control" name="menu_url" id="menu_url"
                                        placeholder="Masukkan URL Menu" value="{{ $edit->menu_url }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="menu_aktif"> Aktif Menu Sebagai </label>
                                    <select name="menu_aktif" class="form-control select2" id="menu_aktif"
                                        style="width: 100%;">
                                        <option value="">- Pilih -</option>
                                        <option value="0" {{ $edit->menu_aktif == 0 ? 'selected' : '' }}> Menu Utama
                                        </option>
                                        <option value="1" {{ $edit->menu_aktif == 1 ? 'selected' : '' }}> Sub Menu
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="menu_akses"> Akses Menu </label>
                                    <select name="menu_akses" class="form-control select2" id="menu_akses"
                                        style="width: 100%;">
                                        <option value="">- Pilih -</option>
                                        @foreach ($data_role as $data)
                                            <option value="{{ $data->id }}"
                                                {{ $edit->menu_akses == $data->id ? 'selected' : '' }}>
                                                {{ $data->role }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-danger btn-sm btn-social">
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

@endsection

@section('js')
    <script type="text/javascript">
        $('.select2').select2()
    </script>
     <script>
        function editMenu(id) {
            $.ajax({
                url: "/admin/pengaturan/menu/edit",
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
                        a("#editMenu").validate({
                            ignore: "",
                            rules: {
                                 menu_nama: {
                                    required: !0
                                },
                                menu_icon: {
                                    required: !0
                                },
                                menu_url: {
                                    required: !0
                                }
                            },
                            messages: {
                                menu_nama: {
                                    required: "nama menu harap di isi!"
                                },
                                menu_icon: {
                                    required: "icon menu harap di isi!"
                                },
                                menu_url: {
                                    required: "url menu harap di isi!"
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
