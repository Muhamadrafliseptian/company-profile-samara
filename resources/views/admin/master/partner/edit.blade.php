@extends('admin.layouts.template')

@section('title', 'Parnert')

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
                    <div class="box-title">
                        <i class="fa fa-edit"></i> Edit Data
                    </div>
                </div>
                <form action="{{ url('/admin/master/partner/' . encrypt($edit->id)) }}" method="POST" id="editPartner"
                    enctype="multipart/form-data">
                    @method('PUT')
                    {{ csrf_field() }}
                    <input type="hidden" name="gambarLama" value="{{ $edit->partner_logo }}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="partner_nama"> Nama Parnert </label>
                            <input type="text" class="form-control" name="partner_nama" value="{{ $edit->partner_nama }}"
                                id="partner_nama" placeholder="Masukkan Nama Partner">
                        </div>
                        <div class="form-group">
                            <label for="partner_logo"> Logo Parnert </label>
                            @if (empty($edit->partner_logo))
                                <img src="{{ url('/gambar/upload-gambar.jpg') }}" class="img-fluid gambar-preview"
                                    id="tampilGambar" style="margin-bottom: 10px; width: 100%;">
                            @else
                                <img src="{{ url('/storage/' . $edit->partner_logo) }}" class="img-fluid gambar-preview"
                                    id="tampilGambar" style="margin-bottom: 10px; width: 100%;">
                            @endif
                            <input type="file" class="form-control" name="partner_logo" value="{{ old('partner_logo') }}"
                                id="partner_logo" onchange="previewImage()">
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
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-users"></i> Data @yield('title')
                    </h3>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Nama</th>
                                <th>Logo</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 0;
                            @endphp
                            @foreach ($data_partner as $data)
                                <tr>
                                    <td class="text-center">{{ ++$no }}.</td>
                                    <td>{{ $data->partner_nama }}</td>
                                    <td>{{ $data->partner_logo }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('/admin/master/partner/' . encrypt($data->id) . '/edit') }}"
                                            class="btn btn-warning btn-sm btn-social">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ url('/admin/master/partner/' . encrypt($data->id)) }}"
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

            ! function(a, i, r) {
                var e = {};
                e.UTIL = {
                    setupFormValidation: function() {
                        a("#tambahPartner").validate({
                            ignore: "",
                            rules: {
                                partner_nama: {
                                    required: !0
                                },
                                partner_logo: {
                                    required: !0
                                },
                            },
                            messages: {
                                partner_nama: {
                                    required: "nama partner harap di isi!"
                                },
                                partner_logo: {
                                    required: "logo partner harap di isi!"
                                },
                            },
                            submitHandler: function(a) {
                                a.submit()
                            }
                        })
                    }
                }, a(r).ready(function(a) {
                    e.UTIL.setupFormValidation()
                })
            }(jQuery, window, document);

        function previewImage() {
            const image = document.querySelector("#partner_logo");
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
