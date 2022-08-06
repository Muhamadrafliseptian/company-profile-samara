@extends('admin.layouts.template')

@section('title', 'Edit Carousel')

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
                        <i class="fa fa-edit"></i> Edit Data
                    </h3>
                </div>
                <form action="{{ url('/admin/pengaturan/carousel/' . encrypt($edit->id)) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    {{ csrf_field() }}
                    <input type="hidden" name="gambarLama" value="{{ $edit->gambarLama }}">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="carousel_gambar"> Gambar </label>
                                    <center>
                                        @if (empty($edit->carousel_gambar))
                                            <img src="{{ url('/gambar/gambar-upload.jpg') }}"
                                                class="img-fluid gambar-preview" id="tampilGambar"
                                                style="margin-bottom: 10px">
                                        @else
                                            <img src="{{ url('/storage/' . $edit->carousel_gambar) }}"
                                                class="img-fluid gambar-preview" id="tampilGambar"
                                                style="margin-bottom: 10px">
                                        @endif
                                    </center>
                                    <input type="file" class="form-control" name="carousel_gambar" id="carousel_gambar"
                                        onchange="previewImage()">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="carousel_judul"> Judul </label>
                                    <input type="text" class="form-control" name="carousel_judul" id="carousel_judul"
                                        placeholder="Masukkan Judul" value="{{ $edit->carousel_judul }}">
                                </div>
                                <div class="form-group">
                                    <label for="carousel_deskripsi"> Deskripsi </label>
                                    <textarea name="carousel_deskripsi" class="form-control" id="carousel_deskripsi" rows="10"
                                        placeholder="Masukkan Deskripsi">{{ $edit->carousel_deskripsi }}</textarea>
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

@endsection
