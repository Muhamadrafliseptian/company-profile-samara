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
                @yield('title')
            </li>
        </ol>
    </section>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-edit"></i> Edit Data
                    </h3>
                </div>
                <form action="{{ url('/admin/blog/lowongan_kerja/' . encrypt($edit->id)) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="lowongan_foto"> Foto </label>
                                    <center>
                                        @if (empty($edit->lowongan_foto))
                                            <img src="{{ url('/gambar/upload-gambar.png') }}"
                                                class="img-fluid gambar-preview" style="width: 50%; margin-bottom: 10px"
                                                id="tampilGambar">
                                        @else
                                            <img src="{{ url('/storage/' . $edit->lowongan_foto) }}"
                                                class="img-fluid gambar-preview" style="width: 50%; margin-bottom: 10px"
                                                id="tampilGambar">
                                        @endif
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
                                                id="lowongan_nama" placeholder="Masukkan Nama Lowongan"
                                                value="{{ $edit->lowongan_nama }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lowongan_gaji"> Gaji Lowongan </label>
                                            <input type="number" class="form-control" name="lowongan_gaji"
                                                id="lowongan_gaji" placeholder="Masukkan Nominal Gaji" min="1000"
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
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-danger btn-sm btn-social">
                            <i class="fa fa-times"></i> Batal
                        </button>
                        <button type="submit" class="btn btn-success btn-sm btn-social">
                            <i class="fa fa-save"></i> Simpan
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
