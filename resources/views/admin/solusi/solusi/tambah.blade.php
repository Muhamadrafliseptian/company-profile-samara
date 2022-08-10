@extends('admin.layouts.template')

@section('title', 'Tambah Solusi')

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
                        <i class="fa fa-book"></i> Data @yield('title')
                    </h3>
                </div>
                <form action="{{ url('/admin/solusi/solusi/') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="solusi_gambar"> Gambar </label>
                                    <center>
                                        <img src="{{ url('/gambar/upload-gambar.png') }}" class="img-fluid"
                                            style="width: 50%">
                                    </center>
                                    <input type="file" class="form-control" name="solusi_gambar" id="solusi_gambar">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="solusi_nama"> Nama Solusi </label>
                                            <input type="text" class="form-control" name="solusi_nama"
                                                placeholder="Masukkan Nama Solusi">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="id_kategori_solusi"> Kategori Solusi </label>
                                            <select name="id_kategori_solusi" class="form-control" id="id_kategori_solusi">
                                                <option value="">- Pilih -</option>
                                                @foreach ($data_kategori_solusi as $data)
                                                    <option value="{{ $data->id }}">
                                                        {{ $data->kategori_solusi }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="solusi_deskripsi"> Deskripsi </label>
                                    <textarea name="solusi_deskripsi" class="form-control" id="solusi_deskripsi" rows="5"
                                        placeholder="Masukkan Solusi Deskripsi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="solusi_video"> Video </label>
                                    <input type="file" class="form-control" name="solusi_video" id="solusi_video">
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
