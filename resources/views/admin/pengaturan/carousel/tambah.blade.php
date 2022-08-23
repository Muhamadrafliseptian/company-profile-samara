@extends('admin.layouts.template')

@section('title', 'Tambah Carousel')

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
                <a href="{{ url('/admin/pengaturan/carousel') }}">
                 <i class="fa fa-image"></i> Carousel</a>
            </li>
            <li class="active">
                @yield('title')
            </li>
        </ol>
    </section>
@endsection

@section('content')

    <form action="{{ url('/admin/pengaturan/carousel/') }}" method="POST" id="tambahCarousel" enctype="multipart/form-data">
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
                        <div class="form-group">
                            <label for="carousel_gambar"> Gambar </label>
                            <center>
                                <img src="{{ url('/gambar/upload-gambar.jpg') }}" class="img-fluid gambar-preview"
                                    id="tampilGambar" style="width: 100%; margin-bottom: 10px">
                            </center>
                            <input type="file" class="form-control" name="carousel_gambar" value="{{ old('carousel_gambar') }}" id="carousel_gambar"
                                onchange="previewImage()">
                        </div>
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
                            <label for="carousel_judul"> Judul </label>
                            <input type="text" class="form-control" name="carousel_judul" value="{{ old('carousel_judul') }}" id="carousel_judul"
                                placeholder="Masukkan Judul">
                        </div>
                        <div class="form-group">
                            <label for="carousel_deskripsi"> Deskripsi </label>
                            <textarea name="carousel_deskripsi" class="form-control" value="{{ old('carousel_deskripsi') }}" id="carousel_deskripsi" rows="10"
                                placeholder="Masukkan Deskripsi"></textarea>
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

    <script type="text/javascript">
        function previewImage() {
            const image = document.querySelector("#carousel_gambar");
            const imgPreview = document.querySelector(".gambar-preview");
            imgPreview.style.display = "block";
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
                $("#tampilGambar").addClass('mb-3');
                $("#tampilGambar").width("100%");
                $("#tampilGambar").height("300");
            }
        }
    </script>
    <script>
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
                    a("#tambahCarousel").validate({
                            ignore: "",
                            rules: {
                                carousel_gambar: {
                                    required: !0
                                },
                                carousel_judul: {
                                    required: !0
                                },
                                carousel_deskripsi: {
                                    required: !0
                                }
                            },
                            messages: {
                                carousel_gambar: {
                                    required: "gambar carousel harap di isi!"
                                },
                                carousel_judul: {
                                    required: "judul carousel harap di isi!"
                                },
                                carousel_deskripsi: {
                                    required: "deskripsi carousel harap di isi!"
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
