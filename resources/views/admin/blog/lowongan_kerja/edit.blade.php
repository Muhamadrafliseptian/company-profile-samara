@extends('admin.layouts.template')

@section('title', 'Edit Lowongan Kerja')

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

    <form action="{{ url('/admin/blog/lowongan_kerja/' . encrypt($edit->id)) }}" id="editLowonganKerja" method="POST" enctype="multipart/form-data">
        @method('PUT')
        {{ csrf_field() }}
        <input type="hidden" name="gambarLama" value="{{ $edit->lowongan_foto }}">
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
                            @if (empty($edit->lowongan_foto))
                                <img src="{{ url('/gambar/upload-gambar.jpg') }}" class="img-fluid gambar-preview"
                                    style="width: 100%; margin-bottom: 10px" id="tampilGambar">
                            @else
                                <img src="{{ url('/storage/' . $edit->lowongan_foto) }}" class="img-fluid gambar-preview"
                                    style="width: 100%; margin-bottom: 10px;" id="tampilGambar">
                            @endif
                        </center>
                        <input type="file" class="form-control" name="lowongan_foto" id="lowongan_foto"
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
                                    <label for="lowongan_nama"> Nama Lowongan </label>
                                    <input type="text" class="form-control" name="lowongan_nama" id="lowongan_nama"
                                        placeholder="Masukkan Nama Lowongan" value="{{ $edit->lowongan_nama }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lowongan_gaji"> Gaji Lowongan </label>
                                    <input type="number" class="form-control" name="lowongan_gaji" id="lowongan_gaji"
                                        placeholder="Masukkan Nominal Gaji" min="1000"
                                        value="{{ $edit->lowongan_gaji }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lowongan_alamat"> Alamat Lowongan </label>
                            <input type="text" class="form-control" name="lowongan_alamat" id="lowongan_alamat"
                                placeholder="Masukkan Alamat Lowongan" value="{{ $edit->lowongan_alamat }}">
                        </div>
                        <div class="form-group">
                            <label for="lowongan_deskripsi"> Deskripsi Alamat </label>
                            <textarea name="lowongan_deskripsi" class="form-control" id="lowongan_deskripsi" rows="5"
                                placeholder="Masukkan Deskripsi Lowongan">{{ $edit->lowongan_deskripsi }}</textarea>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-danger btn-sm btn-social">
                            <i class="fa fa-times"></i> Batal
                        </button>
                        <button type="submit" class="btn btn-success btn-sm btn-social">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <a href="{{ url('/admin/blog/lowongan_kerja') }}"
                            class="btn btn-warning btn-sm btn-social pull-right">
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
        function previewImage() {
            const image = document.querySelector("#lowongan_foto");
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
                        a("#editLowonganKerja").validate({
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
