@extends('admin.layouts.template')

@section('title', 'Tambah Menu')

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
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-plus"></i> Tambah Data
                    </h3>
                </div>
                <form action="{{ url('/admin/pengaturan/menu') }}" id="tambahMenu" method="POST">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="menu_nama"> Nama Menu </label>
                                    <input type="text" class="form-control" name="menu_nama" value="{{ old('menu_nama') }}" id="menu_nama"
                                        placeholder="Masukkan Nama Menu">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="menu_icon"> Icon Menu </label>
                                    <input type="text" class="form-control" name="menu_icon" value="{{ old('menu_icon') }}" id="menu_icon"
                                        placeholder="Masukkan Icon Menu">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="menu_url"> URL Menu </label>
                                    <input type="text" class="form-control" name="menu_url" value="{{ old('menu_url') }}" id="menu_url"
                                        placeholder="Masukkan URL Menu">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="menu_id"> Child Menu </label>
                                    <select name="menu_id" class="form-control select2" id="menu_id" value="{{ old('menu_id') }}" style="width: 100%;">
                                        <option value="">- Pilih -</option>
                                        @forelse ($data_menu as $menu)
                                            <option value="{{ $menu->id }}">
                                                {{ $menu->menu_nama }}
                                            </option>
                                        @empty
                                            <option value="">Tidak Ada</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
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
                    a("#tambahMenu").validate({
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
