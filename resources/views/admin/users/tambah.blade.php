@extends('admin.layouts.template')

@section('title', 'Tambah Users')

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
                        <i class="fa fa-plus"></i> Tambah Data
                    </h3>
                </div>
                <form action="{{ url('/admin/users') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="foto"> Foto </label>
                                    <center>
                                        <img src="{{ url('/gambar/gambar_user.png') }}" class="img-fluid gambar-preview"
                                            id="tampilGambar" style="margin-bottom: 10px">
                                    </center>
                                    <input type="file" class="form-control" name="foto" id="foto"
                                        onchange="previewImage()">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="nama"> Nama </label>
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        placeholder="Masukkan Nama">
                                </div>
                                <div class="form-group">
                                    <label for="email"> Email </label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Masukkan Email">
                                </div>
                                <div class="form-group">
                                    <label for="id_role"> Role </label>
                                    <select name="id_role" class="form-control" id="id_role">
                                        <option value="">- Pilih -</option>
                                        @foreach ($data_role as $data)
                                            <option value="{{ $data->id }}">
                                                {{ $data->role }}
                                            </option>
                                        @endforeach
                                    </select>
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
            const image = document.querySelector("#foto");
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
