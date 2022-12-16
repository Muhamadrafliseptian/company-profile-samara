@extends('admin.layouts.template')

@section('title', 'Edit Projects')

@section('css')

    <link rel="stylesheet" href="{{ url('/template') }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/template') }}/bower_components/select2/dist/css/select2.min.css">

@endsection

@section('breadcrumb')
    <section class="content-header">
        <h1>
            @yield('title')
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/admin/pengaturan/projects') }}">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li class="active">
                <a href="{{ url('/admin/pengaturan/projects') }}">
                    <i class="fa fa-upload"></i> Projects</a>
            </li>
            <li class="active">
                @yield('title')
            </li>
        </ol>
    </section>
@endsection

@section('content')
        <form action="{{ url('/admin/pengaturan/projects/' . encrypt($edit->id)) }}" id="editProjects" method="POST" enctype="multipart/form-data">
            @method('PUT')
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3 class="box-title">
                                <i class="fa fa-edit"></i> Upload Gambar
                            </h3>
                        </div>
                        <div class="box-body">
                            @if (empty($edit->image))
                                <center>
                                    <img src="{{ url('/gambar/upload-gambar.jpg') }}" class="img-fluid gambar-preview"
                                        style="width: 100%; margin-bottom: 5px;" id="tampilGambar">
                                </center>
                            @else
                                <center>
                                    <img src="{{ url('/storage/' . $edit->image) }}" class="img-fluid gambar-preview"
                                        style="width: 100%; margin-bottom: 5px;" id="tampilGambar">
                                </center>
                            @endif
                            <input type="file" class="form-control" name="image" id="gambar"
                                onchange="previewImage()">
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="icon"> Icon </label>
                                        <input type="text" class="form-control" name="icon" id="icon"
                                            placeholder="Masukkan Judul" value="{{ $edit->icon }}">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="judul"> Judul </label>
                                        <input type="text" class="form-control" name="judul" id="judul"
                                            placeholder="Masukkan Judul" value="{{ $edit->judul }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi"> Deskripsi </label>
                                <textarea id="deskripsi" name="deskripsi" rows="10" cols="80">
                                    {{ $edit->deskripsi }}
                                </textarea>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="reset" class="btn btn-danger btn-sm btn-social">
                                <i class="fa fa-times"></i> Batal
                            </button>
                            <button type="submit" class="btn btn-success btn-sm btn-social">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                            <a href="{{ url('/admin/pengaturan/projects') }}" class="btn btn-warning btn-sm btn-social pull-right">
                                <i class="fa fa-sign-out"></i> Kembali
                            </a>
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
            const image = document.querySelector("#gambar");
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
                    a("#editProjects").validate({
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
