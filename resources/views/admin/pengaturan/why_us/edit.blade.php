@extends('admin.layouts.template')

@section('title', 'Edit Why Us')

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
                <a href="{{ url('/admin/pengaturan/why_us') }}">
                    <i class="fa fa-search"></i> Why Us</a>
            </li>
            <li class="active">
                @yield('title')
            </li>
        </ol>
    </section>
@endsection

@section('content')

    <form action="{{ url('/admin/pengaturan/why_us/' . encrypt($edit->id)) }}" method="POST" id="editWhyUs"
        enctype="multipart/form-data">
        @method('PUT')
        {{ csrf_field() }}
        <input type="hidden" name="gambarLama" value="{{ $edit->why_us_image }}">
        <div class="row">
            <div class="col-md-4">
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">
                            <i class="fa fa-upload"></i> Upload Gambar
                        </h3>
                    </div>
                    <div class="box-body">
                        <center>
                            @if (empty($edit->why_us_image))
                                <img src="{{ url('/gambar/upload-gambar.jpg') }}" class="img-fluid gambar-preview"
                                    style="width: 100%; margin-bottom: 10px;" id="tampilGambar">
                            @else
                                <img src="{{ url('/storage/' . $edit->why_us_image) }}" class="img-fluid gambar-preview"
                                    style="width: 100%; margin-bottom: 10px;" id="tampilGambar">
                            @endif
                        </center>
                        <input type="file" class="form-control" name="why_us_image" id="why_us_image"
                            onchange="previewImage()">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">
                            <i class="fa fa-edit"></i> Edit Data
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="why_us_name"> Judul </label>
                            <input type="text" class="form-control" name="why_us_name" id="why_us_name"
                                placeholder="Masukkan Judul" value="{{ $edit->why_us_name }}">
                        </div>
                        <div class="form-group">
                            <label for="why_us_deskripsi"> Deskripsi </label>
                            <textarea name="why_us_deskripsi" class="form-control" id="why_us_deskripsi" rows="5"
                                placeholder="Masukkan Deskripsi">{{ $edit->why_us_deskripsi }}</textarea>
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
                </div>
            </div>
        </div>
    </form>

@endsection

@section('js')

    <script type="text/javascript">
        function previewImage() {
            const image = document.querySelector("#why_us_image");
            const imgPreview = document.querySelector(".gambar-preview");
            imgPreview.style.display = "block";
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
                $("#tampilGambar").addClass('mb-3');
                $("#tampilGambar").width("100%");
                $("#tampilGambar").height("300");
            }
        }
    </script>
    <script>
        function editWhyUs(id) {
            $.ajax({
                url: "/admin/pengaturan/why_us/edit",
                type: "GET",
                data: {
                    id: id
                },
                success: function(data) {
                    $("#modal-content-edit").html(data);
                    return true;
                }
            })
        }

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
                        a("#editWhyUs").validate({
                            ignore: "",
                            rules: {
                                why_us_image: {
                                    required: !0
                                },
                                why_us_name: {
                                    required: !0
                                },
                                why_us_deskripsi: {
                                    required: !0
                                }
                            },
                            messages: {
                                why_us_image: {
                                    required: "gambar why us harap di isi!"
                                },
                                why_us_name: {
                                    required: "nama why us harap di isi!"
                                },
                                why_us_deskripsi: {
                                    required: "deskripsi why us harap di isi!"
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
    </script>
@endsection
