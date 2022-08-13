@extends('admin.layouts.template')

@section('title', 'Tambah Menu')

@section('css')

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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="menu_url"> URL Menu </label>
                                    <input type="text" class="form-control" name="menu_url" id="menu_url"
                                        placeholder="Masukkan URL Menu">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="menu_id"> Aktif Menu Sebagai </label>
                                    <select name="menu_id" class="form-control select2" id="menu_id" style="width: 100%;">
                                        <option value="">- Pilih -</option>
                                        @forelse ($data_menu as $menu)
                                            <option value="{{ $menu->id }}">
                                                {{ $menu->menu_nama }}
                                            </option>
                                        @empty
                                            <option value="">Tidak Ada</option>
                                        @endforelse
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
        $('.select2').select2()
    </script>
@endsection
