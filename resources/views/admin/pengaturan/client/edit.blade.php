@extends('admin.layouts.template')

@section('title', 'Edit Client')

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
            <li>
                <a href="{{ url('/admin/pengaturan/client') }}">
                    <i class="fa fa-dashboard"></i> Client
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
                    <div class="box-title">
                        <i class="fa fa-plus"></i> Tambah Data
                    </div>
                </div>
                <form action="{{ url('/admin/pengaturan/client/'. encrypt($edit->id)) }}" method="POST" id="editClient"
                    enctype="multipart/form-data">
                    @method('PUT')
                    {{ csrf_field() }}
                    <input type="hidden" name="gambarLama" value="{{ $edit->image }}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="partner_nama"> Nama Parnert </label>
                            <input type="text" class="form-control" name="nama" value="{{ $edit->nama }}"
                                id="nama" placeholder="Masukkan Nama Client">
                        </div>
                        <div class="form-group">
                                <label for="deskripsi"> Deskripsi </label>
                                <textarea id="deskripsi" name="deskripsi" rows="10" cols="80">
                                    Masukkan Deskripsi
                                </textarea>
                        </div>
                        <div class="form-group">
                            <label for="partner_logo"> Logo Client </label>
                            @if (empty($edit->image))
                                <img src="{{ url('/gambar/upload-gambar.jpg') }}" class="img-fluid gambar-preview"
                                    id="tampilGambar" style="margin-bottom: 10px; width: 100%;">
                            @else
                                <img src="{{ url('/storage/' . $edit->image) }}" class="img-fluid gambar-preview"
                                    id="tampilGambar" style="margin-bottom: 10px; width: 100%;">
                            @endif
                            <input type="file" class="form-control" name="image" value="{{ old('image') }}"
                                id="image" onchange="previewImage()">
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
                                <th>Deskripsi</th>
                                <th>Logo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 0;
                            @endphp
                            @foreach ($data_clients as $data)
                                <tr>
                                    <td class="text-center">{{ ++$no }}.</td>
                                    <td class="text-center">{{ $data->nama }}</td>
                                    <td>{!! Str::limit($data->deskripsi, '10') !!}</td>
                                    <td>{{ Str::limit($data->image,'10') }}</td>
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

    <script src="{{ url('/template') }}/bower_components/ckeditor/ckeditor.js"></script>
    <script>
        $(function() {
            CKEDITOR.replace('deskripsi')
        })
    </script>
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
                        a("#tambahClient").validate({
                            ignore: "",
                            rules: {
                                nama: {
                                    required: !0
                                },
                                deskripsi: {
                                    required: !0
                                },
                                image: {
                                    required: !0
                                },
                            },
                            messages: {
                                nama: {
                                    required: "nama client harap di isi!"
                                },
                                deskripsi: {
                                    required: "deskripsi client harap di isi!"
                                },
                                image: {
                                    required: "image client harap di isi!"
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
            const image = document.querySelector("#client_logo");
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
