@extends('admin.layouts.template')

@section('title', 'Tambah Lowongan Kerja')

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
                <form action="{{ url('/admin/blog/lowongan_kerja') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="lowongan_foto"> Foto </label>
                                    <center>
                                        <img src="{{ url('/gambar/upload-gambar.png') }}" class="img-fluid gambar-preview"
                                            style="width: 50%; margin-bottom: 10px" id="tampilGambar">
                                    </center>
                                    <input type="file" class="form-control" name="lowongan_foto" id="lowongan_foto"
                                        onchange="previewImage()">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lowongan_nama"> Nama Lowongan </label>
                                            <input type="text" class="form-control" name="lowongan_nama"
                                                id="lowongan_nama" placeholder="Masukkan Nama Lowongan">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lowongan_gaji"> Gaji Lowongan </label>
                                            <input type="number" class="form-control" name="lowongan_gaji"
                                                id="lowongan_gaji" placeholder="Masukkan Nominal Gaji" min="1000">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lowongan_alamat"> Alamat Lowongan </label>
                                    <input type="text" class="form-control" name="lowongan_alamat" id="lowongan_alamat"
                                        placeholder="Masukkan Alamat Lowongan">
                                </div>
                                <div class="form-group">
                                    <label for="lowongan_deskripsi"> Deskripsi Alamat </label>
                                    <textarea name="lowongan_deskripsi" class="form-control" id="lowongan_deskripsi" rows="5"
                                        placeholder="Masukkan Deskripsi Lowongan"></textarea>
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
    </script>

@endsection
