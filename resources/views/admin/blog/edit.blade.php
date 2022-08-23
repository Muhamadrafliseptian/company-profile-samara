@extends('admin.layouts.template')

@section('title', 'Edit Blog')

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
                        href="{{ url('/admin/kategori') }}" target="_blank">LINK</a> berikut untuk menuju ke Halaman
                    Kategori
                </div>
            </div>
        </div>
    @else
        <form action="{{ url('/admin/blog/' . encrypt($edit->id)) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            {{ csrf_field() }}
            <input type="hidden" name="gambarLama" value="{{ $edit->gambar }}">
            <div class="row">
                <div class="col-md-4">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3 class="box-title">
                                <i class="fa fa-upload"></i> Upload Gambar
                            </h3>
                        </div>
                        <div class="box-body">
                            @if (empty($edit->gambar))
                                <center>
                                    <img src="{{ url('/gambar/upload-gambar.jpg') }}" class="img-fluid gambar-preview"
                                        style="width: 100%; margin-bottom: 5px;" id="tampilGambar">
                                </center>
                            @else
                                <center>
                                    <img src="{{ url('/storage/' . $edit->gambar) }}" class="img-fluid gambar-preview"
                                        style="width: 100%; margin-bottom: 5px;" id="tampilGambar">
                                </center>
                            @endif
                            <input type="file" class="form-control" name="gambar" id="gambar"
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
                                        <label for="id_kategori"> Nama Kategori </label>
                                        <select name="id_kategori" class="form-control select2" id="id_kategori"
                                            style="width: 100%">
                                            <option value="">- Pilih -</option>
                                            @foreach ($data_kategori as $data)
                                                <option value="{{ $data->id }}"
                                                    {{ $edit->id_kategori == $data->id ? 'selected' : '' }}>
                                                    {{ $data->nama_kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title"> Judul </label>
                                        <input type="text" class="form-control" name="title" id="title"
                                            placeholder="Masukkan Judul" value="{{ $edit->title }}">
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
                            <a href="{{ url('/admin/blog') }}" class="btn btn-warning btn-sm btn-social pull-right">
                                <i class="fa fa-sign-out"></i> Kembali
                            </a>
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
    </script>
@endsection
