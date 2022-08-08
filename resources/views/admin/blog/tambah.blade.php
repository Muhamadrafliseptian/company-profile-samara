@extends('admin.layouts.template')

@section('title', 'Tambah Blog')

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
                <form action="{{ url('/admin/blog') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <center>
                                        <img src="{{ url('/gambar/gambar-upload.jpg') }}" class="img-fluid gambar-preview"
                                            id="tampilGambar" style="margin-bottom: 10px;">
                                    </center>
                                    <input type="file" class="form-control" name="gambar">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="id_kategori"> Nama Kategori </label>
                                            <select name="id_kategori" class="form-control select2" id="id_kategori"
                                                style="width: 100%">
                                                <option value="">- Pilih -</option>
                                                @foreach ($data_kategori as $data)
                                                    <option value="{{ $data->id }}">
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
                                                placeholder="Masukkan Judul">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi"> Deskripsi </label>
                                    <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5" placeholder="Masukkan Deskripsi"></textarea>
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
        $('.select2').select2()
    </script>
@endsection
