@extends('admin.layouts.template')

@section('title', 'Tambah Menu Role')

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
                <form action="{{ url('/admin/pengaturan/menu') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="menu_nama"> Nama Menu </label>
                                    <input type="text" class="form-control" name="menu_nama" id="menu_nama"
                                        placeholder="Masukkan Nama Menu">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="menu_icon"> Icon Menu </label>
                                    <input type="text" class="form-control" name="menu_icon" id="menu_icon"
                                        placeholder="Masukkan Icon Menu">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="menu_url"> URL Menu </label>
                                    <input type="text" class="form-control" name="menu_url" id="menu_url"
                                        placeholder="Masukkan URL Menu">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="menu_aktif"> Aktif Menu Sebagai </label>
                                    <select name="menu_aktif" class="form-control" id="menu_aktif">
                                        <option value="">- Pilih -</option>
                                        <option value="0"> Menu Utama </option>
                                        <option value="1"> Sub Menu </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="menu_akses"> Akses Menu </label>
                                    <select name="menu_akses" class="form-control" id="menu_akses">
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
