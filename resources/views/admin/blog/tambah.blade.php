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
                <a href="{{ url('/admin/blog') }}">
                    <i class="fa fa-upload"></i> Blog</a>
            </li>
            <li class="active">
                @yield('title')
            </li>
        </ol>
    </section>
@endsection

@section('content')

    @if ($data_kategori->count() < 0)
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible">
                    <h4>
                        <i class="icon fa fa-times"></i> Perhatian
                    </h4>
                    Data <strong>Kategori</strong> masih kosong. Silahkan Isi Terlebih Dahulu. Klik <a
                        href="{{ url('/admin/master/kategori') }}" target="_blank">LINK</a> berikut untuk menuju ke Halaman
                    Kategori
                </div>
            </div>
        </div>
    @else
        <form action="{{ url('/admin/blog') }}" method="POST" enctype="multipart/form-data" id="tambahBlog">
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
                                <img src="{{ url('/gambar/upload-gambar.jpg') }}" class="img-fluid gambar-preview"
                                    id="tampilGambar" style="width: 100%; margin-bottom: 10px;">
                            </center>
                            <input type="file" class="form-control" name="gambar" id="gambar"
                                value="{{ old('gambar') }}" onchange="previewImage()">
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="id_kategori"> Kategori </label>
                                        <select name="id_kategori" class="form-control select2" id="id_kategori"
                                            value="{{ old('id_kategori') }}">
                                            <option value="">- Pilih -</option>
                                            @foreach ($data_kategori as $item)
                                                <option value="{{ $item->id }}">
                                                    {{ $item->nama_kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title"> Judul </label>
                                        <input type="text" class="form-control" name="title" id="title"
                                            placeholder="Masukkan Judul" value="{{ old('title') }}">
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
    @endif


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
                    a("#tambahBlog").validate({
                        ignore: "",
                        rules: {
                            gambar: {
                                required: !0
                            },
                            id_kategori: {
                                required: !0
                            },
                            title: {
                                required: !0
                            },
                            deskripsi: {
                                required: !0
                            }
                        },
                        messages: {
                            gambar: {
                                required: "Kolom Gambar Harap di Isi!"
                            },
                            id_kategori: {
                                required: "Kolom Kategori Harap di IsI!"
                            },
                            title: {
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
