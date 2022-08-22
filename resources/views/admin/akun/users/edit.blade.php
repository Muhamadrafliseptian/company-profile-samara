@extends('admin.layouts.template')

@section('title', 'Edit Users')

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
                <a href="{{ url('/admin/akun/users') }}">
                 <i class="fa fa-users"></i> Users</a>
            </li>
            <li class="active">
                @yield('title')
            </li>
        </ol>
    </section>
@endsection

@section('content')

    <form action="{{ url('/admin/akun/users/' . encrypt($edit->id)) }}" method="POST" enctype="multipart/form-data"
        id="editUsers">
        @method('PUT')
        {{ csrf_field() }}
        <input type="hidden" name="gambarLama" value="{{ $edit->foto }}">
        <div class="row">
            <div class="col-md-4">
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">
                            <i class="fa fa-upload"></i> Upload Gambar
                        </h3>
                    </div>
                    <div class="box-body">
                        <center>
                            @if (empty($edit->foto))
                                <img src="{{ url('/gambar/gambar_user.png') }}" class="img-fluid gambar-preview"
                                    id="tampilGambar" style="width: 100%; margin-bottom: 10px;">
                            @else
                                <img src="{{ url('/storage/' . $edit->foto) }}" class="img-fluid gambar-preview"
                                    id="tampilGambar" style="width: 100%; margin-bottom: 10px;">
                            @endif
                        </center>
                        <input type="file" class="form-control" name="foto" id="foto" onchange="previewImage()">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">
                            <i class="fa fa-edit"></i> Edit Data
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama"> Nama </label>
                            <input type="text" class="form-control" name="nama" id="nama"
                                placeholder="Masukkan Nama" value="{{ $edit->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="email"> Email </label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Masukkan Email" value="{{ $edit->email }}">
                        </div>
                        <div class="form-group">
                            <label for="id_role"> Role </label>
                            <select name="id_role" class="form-control select2" id="id_role" style="width: 100%">
                                <option value="">- Pilih -</option>
                                @foreach ($data_role as $data)
                                    <option value="{{ $data->id }}"
                                        {{ $edit->id_role == $data->id ? 'selected' : '' }}>
                                        {{ $data->role }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-danger btn-sm btn-social">
                            <i class="fa fa-times"></i> Batal
                        </button>
                        <button type="submit" class="btn btn-success btn-sm btn-social">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <a href="{{ url('/admin/akun/users') }}" class="btn btn-warning btn-sm btn-social pull-right">
                            <i class="fa fa-sign-out"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

@section('js')

    <script type="text/javascript">
        $('.select2').select2();

        function previewImage() {
            const image = document.querySelector("#foto");
            const imgPreview = document.querySelector(".gambar-preview");
            imgPreview.style.display = "block";
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
                $("#tampilGambar").addClass('mb-3');
                $("#tampilGambar").height("250");
            }
        }

        ! function(a, i, r) {
            var e = {};
            e.UTIL = {
                setupFormValidation: function() {
                    a("#editUsers").validate({
                        ignore: "",
                        rules: {
                            nama: {
                                required: !0
                            },
                            email: {
                                required: !0
                            },
                            id_role: {
                                required: !0
                            }
                        },
                        messages: {
                            nama: {
                                required: "Kolom Role Harap di Isi!"
                            },
                            email: {
                                required: "Kolom Email Harap di Isi!"
                            },
                            id_role: {
                                required: "Kolom Role Harap di IsI!"
                            }
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
