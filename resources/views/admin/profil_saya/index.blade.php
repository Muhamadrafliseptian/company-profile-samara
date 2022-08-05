@extends('admin.layouts.template')

@section('title', 'Profil Saya')

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
                        <i class="fa fa-edit"></i> Edit Profil <b>{{ Auth::user()->nama }}</b>
                    </h3>
                </div>
                <form action="{{ url('/admin/profil_saya/' . encrypt(Auth::user()->id)) }}" method="POST">
                    @method('PUT')
                    {{ csrf_field() }}
                    <input type="hidden" name="gambarLama" value="{{ Auth::user()->foto }}">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <center>
                                        @if (empty(Auth::user()->foto))
                                            <img src="{{ url('/gambar/gambar_user.png') }}" class="img-fluid gambar-preview"
                                                style="margin-bottom: 10px;" id="tampilGambar">
                                        @else
                                            <img src="{{ url('/storage/' . Auth::user()->foto) }}"
                                                class="img-fluid gambar-preview" style="margin-bottom: 10px"
                                                id="tampilGambar">
                                        @endif
                                    </center>
                                    <input type="file" class="form-control" name="foto" id="foto"
                                        onchange="previewImage()">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="nama"> Nama </label>
                                    <input type="text" class="form-control" name="nama" id="nama"
                                        placeholder="Masukkan Nama" value="{{ Auth::user()->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="email"> Email </label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Masukkan Email" value="{{ Auth::user()->email }}">
                                </div>
                                <button class="btn btn-primary btn-block">
                                    <i class="fa fa-edit"></i> Ganti Password
                                </button>
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
