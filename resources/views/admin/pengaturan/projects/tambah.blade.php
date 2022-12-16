@extends('admin.layouts.template')

@section('title', 'Tambah Projects')

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
                <a href="{{ url('/admin/pengaturan/projects') }}">
                    <i class="fa fa-upload"></i> Project Solution</a>
            </li>
            <li class="active">
                @yield('title')
            </li>
        </ol>
    </section>
@endsection

@section('content')
<form action="{{ url('/admin/pengaturan/projects') }}" method="POST" enctype="multipart/form-data" id="tambahProjects">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">
                                <i class="fa fa-plus"></i> Upload Gambar
                            </h3>
                        </div>
                        <div class="box-body">
                            <center>
                                <img src="{{ url('/gambar/upload-gambar.jpg') }}" class="img-fluid image-preview"
                                    id="tampilGambar" style="width: 100%; margin-bottom: 10px;">
                            </center>
                            <input type="file" class="form-control" name="image" id="image"
                                value="{{ old('image') }}" onchange="previewImage()">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                        <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">
                                        <i class="fa fa-plus"> Tambah Data</i>
                                    </h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="icon"> Icon </label>
                                        <input type="text" class="form-control" name="icon" id="icon"
                                            placeholder="Masukkan Icon" value="{{ old('icon') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="judul"> Title </label>
                                        <input type="text" class="form-control" name="judul" id="judul"
                                            placeholder="Masukkan Judul" value="{{ old('judul') }}">
                                    </div>
                                </div>
                                    </div>
                            <div class="form-group">
                                <label for="deskripsi"> Deskripsi </label>
                                <textarea id="deskripsi" name="deskripsi" rows="10" cols="80">
                                    Masukkan Deskripsi
                                </textarea>
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


@endsection

@section('js')

    <script src="{{ url('/template') }}/bower_components/ckeditor/ckeditor.js"></script>
    <script>
        $(function() {
            CKEDITOR.replace('deskripsi')
        })
    </script>
    <script type="text/javascript">
        $('.select2').select2();

        function previewImage() {
            const image = document.querySelector("#image");
            const imgPreview = document.querySelector(".image-preview");
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
                    a("#tambahProjects").validate({
                        ignore: "",
                        rules: {
                            image: {
                                required: !0
                            },
                            icon: {
                                required: !0
                            },
                            judul: {
                                required: !0
                            },
                            deskripsi: {
                                required: !0
                            }
                        },
                        messages: {
                            image: {
                                required: "Kolom Gambar Harap di Isi!"
                            },
                            icon: {
                                required: "Kolom Icon Harap di IsI!"
                            },
                            judul: {
                                required: "Kolom Judul Harap di Isi!"
                            },
                            deskripsi: {
                                required: "Kolom Deskripsi Harap di Isi!"
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
