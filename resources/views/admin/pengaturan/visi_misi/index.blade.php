@extends('admin.layouts.template')

@section('title', 'Visi Misi')

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
            <div class="box {{ empty($visi_misi) ? 'box-primary' : 'box-warning' }}">
                <div class="box-header">
                    <h4 class="box-title">
                        @if (empty($visi_misi))
                            <i class="fa fa-plus"></i> Tambah Visi Misi
                        @else
                            <i class="fa fa-edit"></i> Edit Visi Misi
                        @endif
                    </h4>
                </div>
                @if (empty($visi_misi))
                    <form action="{{ url('/admin/pengaturan/visi_misi') }}" method="POST">
                    @else
                        <form action="{{ url('/admin/pengaturan/visi_misi/' . encrypt($visi_misi->id)) }}" method="POST">
                            @method('PUT')
                @endif
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group row">
                        <h3 for="visi" class="col-sm-2">Visi</h3>
                        <div class="col-sm-10">
                            <textarea id="visi" name="visi" rows="10" cols="80">
                                    {{ empty($visi_misi->visi) ? 'Masukkan Visi Perusahaan' : $visi_misi->visi }}
                                </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <h3 for="misi" class="col-sm-2">Misi</h3>
                        <div class="col-sm-10">
                            <textarea id="misi" name="misi" rows="10" cols="80">
                                    {{ empty($visi_misi->misi) ? 'Masukkan Misi Perusahaan' : $visi_misi->misi }}
                                </textarea>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-danger btn-sm btn-social">
                            <i class="fa fa-times"></i> Batal
                        </button>
                        @if (empty($visi_misi))
                            <button type="submit" class="btn btn-primary btn-sm btn-social">
                                <i class="fa fa-plus"></i> Tambah
                            </button>
                        @else
                            <button type="submit" class="btn btn-success btn-sm btn-social">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                        @endif
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <<<<<<< HEAD=======<div class="row">
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">
                            <i class="fa fa-plus"></i> Tambah @yield('title')
                        </h3>
                    </div>
                    <form action="{{ url('/admin/pengaturan/visi_misi/tambah_misi') }}" id="tambahMisi" method="POST">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="judul"> Judul </label>
                                <input type="text" class="form-control" name="judul" value="{{ old('judul') }}"
                                    id="judul" placeholder="Masukkan Judul">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi"> Deskripsi </label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi" value="{{ old('deskripsi') }}" rows="5"
                                    placeholder="Masukkan Deskripsi"></textarea>
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
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">
                            <i class="fa fa-bars"></i> Data Misi
                        </h3>
                    </div>
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 0;
                                @endphp
                                @foreach ($data_misi as $data)
                                    <tr>
                                        <td class="text-center">{{ ++$no }}.</td>
                                        <td>{{ $data->judul }}</td>
                                        <td>{{ $data->deskripsi }}</td>
                                        <td class="text-center">
                                            <button onclick="editMisi('{{ $data->id }}')"
                                                class="btn btn-warning btn-social btn-sm text-white"
                                                data-target="#modal-default" data-toggle="modal">
                                                <i class="fa fa-edit"></i> Edit
                                            </button>
                                            <form action="{{ url('/admin/pengaturan/visi_misi/' . encrypt($data->id)) }}"
                                                method="POST" style="display: inline;">
                                                @method('DELETE')
                                                @csrf
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

    <!-- Edit Data -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">
                        <i class="fa fa-edit"></i> Edit Data
                    </h4>
                </div>
                <form action="{{ url('/admin/pengaturan/visi_misi/simpan_misi') }}" id="editMisi" method="POST">
                    @method('PUT')
                    {{ csrf_field() }}
                    <div class="modal-body" id="modal-content-edit">

                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger btn-sm btn-social pull-left">
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
    <!-- END -->
    >>>>>>> 23ca5203bfc190de5581cc86ca803a7c529b65c6

@endsection

@section('js')

    <script src="{{ url('/template') }}/bower_components/ckeditor/ckeditor.js"></script>
    <script>
        $(function() {
            CKEDITOR.replace('visi')
            CKEDITOR.replace('misi')
        })
    </script>
@endsection
