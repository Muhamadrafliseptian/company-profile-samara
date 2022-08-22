@extends('admin.layouts.template')

@section('title', 'Tambah Lowongan Kerja')

@section('breadcrumb')
    <section class="content-header">
        <h1>
            @yield('title')
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/admin/dashboard/lowongan_kerja') }}">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li class="active">
                <a href="{{ url('/admin/blog/lowongan_kerja') }}">
                 <i class="fa fa-upload"></i> Lowongan Kerja</a>
            </li>
            <li class="active">
                @yield('title')
            </li>
        </ol>
    </section>
@endsection

@section('content')

    <form action="{{ url('/admin/blog/lowongan_kerja') }}" method="POST" id="tambahLowonganKerja"
        enctype="multipart/form-data">
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
                        <input type="file" class="form-control" name="lowongan_foto" id="lowongan_foto" value="{{ old('lowongan_foto') }}"
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
                                    <label for="lowongan_nama"> Nama Lowongan </label>
                                    <input type="text" class="form-control" name="lowongan_nama" id="lowongan_nama" value="{{ old('lowongan_nama') }}">
                                        placeholder="Masukkan Nama Lowongan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lowongan_gaji"> Gaji Lowongan </label>
                                    <input type="number" class="form-control" name="lowongan_gaji" id="lowongan_gaji" value="{{ old('lowongan_gaji') }}">
                                        placeholder="Masukkan Nominal Gaji" min="1000">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lowongan_alamat"> Alamat Lowongan </label>
                            <input type="text" class="form-control" name="lowongan_alamat" id="lowongan_alamat" value="{{ old('lowongan_alamat') }}">
                                placeholder="Masukkan Alamat Lowongan">
                        </div>
                        <div class="form-group">
                            <label for="lowongan_deskripsi"> Deskripsi Alamat </label>
                            <textarea name="lowongan_deskripsi" class="form-control" id="lowongan_deskripsi" rows="5" value="{{ old('lowongan_deskripsi') }}">
                                placeholder="Masukkan Deskripsi Lowongan"></textarea>
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
                        a("#tambahLowonganKerja").validate({
                                ignore: "",
                                rules: {
                                    lowongan_foto: {
                                        required: !0,
                                        accept: "jpg, png, jpeg"
                                    },
                                    lowongan_nama: {
                                        required: !0
                                    },
                                    lowongan_gaji: {
                                        required: !0
                                    },
                                    lowongan_alamat: {
                                        required: !0
                                    },
                                    lowongan_deskripsi: {
                                        required: !0
                                    }
                                },
                                messages: {
                                    lowongan_foto: {
                                        required: "Kolom Gambar Lowongan Kerja Harap di Isi!",
                                        accept: "Ekstensi File Tidak Sesuai Dengan Format!"
                                    },
                                    lowongan_nama: {
                                        required: "nama lowongan kerja Harap di Isi!",
                                    },
                                    lowongan_gaji: {
                                        required: "jumlah gaji lowongan kerja Harap di Isi!",
                                    },
                                    lowongan_alamat: {
                                        required: "alamat lowongan kerja Harap di Isi!",
                                    },
                                    lowongan_deskripsi: {
                                        required:  "deskripsi lowongan kerja Harap di Isi!",
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
