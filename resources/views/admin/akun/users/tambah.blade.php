@extends('admin.layouts.template')

@section('title', 'Tambah Users')

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

    @if ($data_role->count() < 0)
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible">
                    <h4>
                        <i class="icon fa fa-times"></i> Perhatian
                    </h4>
                    Data <strong>ROLE</strong> masih kosong. Silahkan Isi Terlebih Dahulu. Klik <a
                        href="{{ url('/admin/akun/role') }}" target="_blank">LINK</a> berikut untuk menuju ke Halaman Role
                </div>
            </div>
        </div>
    @else
        <form action="{{ url('/admin/akun/users') }}" method="POST" enctype="multipart/form-data" id="tambahUsers">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">
                                <i class="fa fa-upload"></i> Upload Gambar
                            </h3>
                        </div>
                        <div class="box-body">
                            <center>
                                <img src="{{ url('/gambar/gambar_user.png') }}" class="img-fluid gambar-preview"
                                    id="tampilGambar" style="width: 100%; margin-bottom: 10px;">
                            </center>
                            <input type="file" class="form-control" name="foto" id="foto" value="{{ old('foto') }}"
                                onchange="previewImage()">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">
                                <i class="fa fa-plus"></i> Tambah Data
                            </h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nama"> Nama </label>
                                <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}"
                                    placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="email"> Email </label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"
                                    placeholder="Masukkan Email">
                            </div>
                            <div class="form-group">
                                <label for="id_role"> Role </label>
                                <select name="id_role" class="form-control select2" id="id_role" value="{{ old('id_role') }}" style="width: 100%">
                                    <option value="">- Pilih -</option>
                                    @foreach ($data_role as $data)
                                        <option value="{{ $data->id }}">
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
                            <button type="submit" class="btn btn-primary btn-sm btn-social">
                                <i class="fa fa-plus"></i> Tambah
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endif


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
                    a("#tambahUsers").validate({
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
