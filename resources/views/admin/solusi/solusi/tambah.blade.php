@extends('admin.layouts.template')

@section('title', 'Tambah Solusi')

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
                <a href="{{ url('/admin/dashboard') }}">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li class="active">
                <a href="{{ url('/admin/solusi/solusi') }}">
                 <i class="fa fa-bars"></i> Solusi</a>
            </li>
            <li class="active">
                @yield('title')
            </li>
        </ol>
    </section>
@endsection

@section('content')

    <form action="{{ url('/admin/solusi/solusi') }}" method="POST" enctype="multipart/form-data" id="tambahSolusi">
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
                                style="width: 100%; margin-bottom: 10px" id="tampilGambar">
                        </center>
                        <input type="file" class="form-control" name="solusi_gambar" id="solusi_gambar" value="{{ old('solusi_gambar') }}"
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

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="solusi_nama"> Nama Solusi </label>
                                    <input type="text" class="form-control" name="solusi_nama" value="{{ old('solusi_nama') }}" id="solusi_nama"
                                        placeholder="Masukkan Nama Solusi">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_kategori_solusi"> Kategori Solusi </label>
                                    <select name="id_kategori_solusi" class="form-control select2" id="id_kategori_solusi" value="{{ old('id_kategori_solusi') }}">
                                        <option value="">- Pilih -</option>
                                        @foreach ($data_kategori_solusi as $data)
                                            <option value="{{ $data->id }}">
                                                {{ $data->kategori_solusi }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="solusi_deskripsi"> Deskripsi </label>
                            <textarea name="solusi_deskripsi" class="form-control" id="solusi_deskripsi" rows="5" value="{{ old('solusi_deskripsi') }}"
                                placeholder="Masukkan Solusi Deskripsi"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="solusi_video"> Video </label>
                            <input type="file" class="form-control" name="solusi_video" id="solusi_video" value="{{ old('solusi_video') }}">
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
            const image = document.querySelector("#solusi_gambar");
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

        $('.select2').select2()

            ! function(a, i, r) {
                var e = {};
                e.UTIL = {
                    setupFormValidation: function() {
                        a("#tambahSolusi").validate({
                                ignore: "",
                                rules: {
                                    solusi_gambar: {
                                        required: !0,
                                        accept: "jpg, png, jpeg"
                                    },
                                    solusi_nama: {
                                        required: !0
                                    },
                                    id_kategori_solusi: {
                                        required: !0
                                    },
                                    solusi_deskripsi: {
                                        required: !0
                                    },
                                    solusi_video: {
                                        required: !0
                                    }
                                },
                                messages: {
                                    solusi_gambar: {
                                        required: "Kolom Gambar Solusi Harap di Isi!",
                                        accept: "Ekstensi File Tidak Sesuai Dengan Format!"
                                    },
                                    solusi_nama: {
                                        required: "Kolom Gambar Solusi Harap di Isi!",
                                    },
                                    id_kategori_solusi: {
                                        required: "Kolom Kategori Solusi Harap di Isi!",
                                    },
                                    solusi_deskripsi: {
                                        required: "Kolom Deskripsi Solusi Harap di Isi!",
                                    },
                                    solusi_video: {
                                        required:  "Kolom Video Solusi Harap di Isi!",
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
