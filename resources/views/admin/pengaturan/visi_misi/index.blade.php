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
    </div>

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
