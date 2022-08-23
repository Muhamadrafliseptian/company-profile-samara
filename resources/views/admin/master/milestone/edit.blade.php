@extends('admin.layouts.template')

@section('title', 'Milestone')

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
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-edit"></i> Edit Data
                    </h3>
                </div>
                <form action="{{ url('/admin/master/milestone/' . encrypt($edit->id)) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    {{ csrf_field() }}
                    <input type="hidden" name="gambarLama" value="{{ $edit->milestone_gambar }}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="milestone_judul"> Judul </label>
                            <input type="text" class="form-control" name="milestone_judul" id="milestone_judul"
                                placeholder="Masukkan Judul" value="{{ $edit->milestone_judul }}">
                        </div>
                        <div class="form-group">
                            <label for="milestone_gambar"> Gambar </label>
                            <center>
                                @if (empty($edit->milestone_gambar))
                                    <img src="{{ url('/gambar/upload-gambar.jpg') }}" class="img-fluid gambar-preview"
                                        id="tampilGambar" style="width: 100%; margin-bottom: 10px;">
                                @else
                                    <img src="{{ url('/storage/' . $edit->milestone_gambar) }}"
                                        class="img-fluid gambar-preview" id="tampilGambar"
                                        style="width: 100%; margin-bottom: 10px;">
                                @endif
                            </center>
                            <input type="file" class="form-control" name="milestone_gambar"
                                value="{{ old('milestone_gambar') }}" id="milestone_gambar">
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
        <div class="col-md-8">
            <div class="box box-warning">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-upload"></i> Data @yield('title')
                    </h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Judul</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 0;
                            @endphp
                            @foreach ($data_milestone as $data)
                                <tr>
                                    <td class="text-center">{{ ++$no }}.</td>
                                    <td>{{ $data->milestone_judul }}</td>
                                    <td class="text-center">
                                        @if ($data->milestone_status == 0)
                                            <form
                                                action="{{ url('/admin/master/milestone/' . encrypt($data->id) . '/aktifkan') }}"
                                                method="POST">
                                                @method('PUT')
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-success btn-sm btn-social">
                                                    <i class="fa fa-sign-in"></i> Aktifkan
                                                </button>
                                            </form>
                                        @else
                                            <form
                                                action="{{ url('/admin/master/milestone/' . encrypt($data->id) . '/non_aktifkan') }}"
                                                method="POST">
                                                @method('PUT')
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-info btn-sm btn-social">
                                                    <i class="fa fa-times"></i> Non - Aktifkan
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('/admin/master/milestone/' . encrypt($data->id) . '/edit') }}"
                                            class="btn btn-warning btn-sm btn-social">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ url('/admin/master/milestone/' . encrypt($data->id)) }}"
                                            method="POST" style="display: inline;">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" name="gambarLama"
                                                value="{{ encrypt($data->milestone_gambar) }}">
                                            <button type="submit" class="btn btn-danger btn-sm btn-delete btn-social">
                                                <i class="fa fa-trash-o"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ url('/template') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/template') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function() {
            $('#example1').DataTable()
        });
    </script>
@endsection
