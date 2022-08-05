@extends('admin.layouts.template')

@section('title', 'Visi Misi')

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
            <div class="box {{ empty($data_visi) ? 'box-primary' : 'box-warning' }}">
                <div class="box-header">
                    <h3 class="box-title">
                        @if (empty($data_visi))
                            <i class="fa fa-plus"></i> Tambah @yield('title')
                        @else
                            <i class="fa fa-edit"></i> Edit @yield('title')
                        @endif
                    </h3>
                </div>
                @if (empty($data_visi))
                    <form action="{{ url('/admin/pengaturan/visi_misi/tambah_visi') }}" method="POST">
                    @else
                        <form action="{{ url('/admin/pengaturan/visi_misi/simpan_visi') }}" method="POST">
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ encrypt($data_visi->id) }}">
                @endif
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="judul"> Judul </label>
                        <input type="text" class="form-control" name="judul" id="judul"
                            placeholder="Masukkan Judul" value="{{ empty($data_visi->judul) ? '' : $data_visi->judul }}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi"> Deskripsi </label>
                        <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5" placeholder="Masukkan Deskripsi">{{ empty($data_visi->deskripsi) ? '' : $data_visi->deskripsi }}</textarea>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="reset" class="btn btn-danger btn-sm btn-social">
                        <i class="fa fa-times"></i> Batal
                    </button>
                    @if (empty($data_visi))
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
    <div class="row">
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-plus"></i> Tambah @yield('title')
                    </h3>
                </div>
                <form action="{{ url('/admin/pengaturan/visi_misi/tambah_misi') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="judul"> Judul </label>
                            <input type="text" class="form-control" name="judul" id="judul"
                                placeholder="Masukkan Judul">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi"> Deskripsi </label>
                            <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5" placeholder="Masukkan Deskripsi"></textarea>
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
                <form action="{{ url('/admin/pengaturan/visi_misi/simpan_misi') }}" method="POST">
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

@endsection

@section('js')

    <script src="{{ url('/template') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/template') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function() {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })

        function editMisi(id) {
            $.ajax({
                url: "{{ url('/admin/pengaturan/visi_misi/edit_misi') }}",
                type: "GET",
                data: {
                    id: id
                },
                success: function(data) {
                    $("#modal-content-edit").html(data);
                    return true;
                }
            });
        }
    </script>

@endsection
