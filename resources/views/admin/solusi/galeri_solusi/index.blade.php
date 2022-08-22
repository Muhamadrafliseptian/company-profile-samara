@extends('admin.layouts.template')

@section('title', 'Galeri Solusi')

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
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-plus"></i> Tambah
                    </h3>
                </div>
                <form action="{{ url('/admin/solusi/galeri_solusi') }}" method="POST" id="galeriSolusi" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="id_solusi"> Solusi </label>
                            <select name="id_solusi" class="form-control" id="id_solusi">
                                <option value="">- Pilih -</option>
                                @foreach ($data_solusi as $data)
                                    <option value="{{ $data->id }}">
                                        {{ $data->solusi_nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="galeri_gambar"> Gambar </label>
                            <br>
                            <img src="{{ url('/gambar/upload.jpg') }}" class="img-fluid" style="width: 100%;">
                            <input type="file" class="form-control" name="galeri_gambar" value="{{ old('galeri_gambar') }}"d="galeri_gambar">
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
        <div class="col-md-8">
            <div class="box">

                <div class="row">
                    @foreach ($data_galeri_solusi as $galeri)
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">
                                        <i class="fa fa-image"></i> Galeri Gambar
                                        <b>{{ $galeri->getSolusi->solusi_nama }}</b>
                                    </h3>
                                </div>
                                <form action="">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="id_solusi"> Solusi </label>
                                            <select name="id_solusi" class="form-control" id="id_solusi">
                                                <option value="">- Pilih -</option>
                                                @foreach ($data_solusi as $data)
                                                    <option value="{{ $data->id }}"
                                                        {{ $data->id == $galeri->id_solusi ? 'selected' : '' }}>
                                                        {{ $data->solusi_nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="galeri_gambar"> Gambar </label>
                                            @if (empty($galeri->galeri_gambar))
                                            @else
                                                <img src="{{ url('/storage/' . $galeri->galeri_gambar) }}"
                                                    class="img-fluid" style="width: 100%; margin-bottom: 10px;">
                                            @endif
                                            <input type="file" class="form-control" name="galeri_gambar"
                                                id="galeri_gambar">
                                        </div>
                                    </div>
                                    <div class="box-footer">
                                        <button type="reset" class="btn btn-danger btn-sm btn-social">
                                            <i class="fa fa-times"></i> Batal
                                        </button>
                                        <button type="reset" class="btn btn-success btn-sm btn-social">
                                            <i class="fa fa-save"></i> Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
