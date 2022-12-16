@extends('admin.layouts.template')

@section('title', 'Study Case')

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

    @if (empty($data_partner->count()))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible">
                    <h4>
                        <i class="icon fa fa-times"></i> Perhatian
                    </h4>
                    Data <strong>Partner</strong> masih kosong. Silahkan Isi Terlebih Dahulu. Klik <a
                        href="{{ url('/admin/master/partner') }}" target="_blank">LINK</a> berikut untuk menuju ke Halaman
                    Partner
                </div>
            </div>
        </div>
    @else
        <form action="{{ url('/admin/master/study_case/' . encrypt($edit->id)) }}" id="editStudyCase" method="POST"
            enctype="multipart/form-data">
            @method('PUT')
            {{ csrf_field() }}
            <input type="hidden" name="gambarLama" value="{{ $edit->gambarLama }}">
            <div class="row">
                <div class="col-md-4">
                    <div class="box box-warning">
                        <div class="box-header">
                            <h3 class="box-title">
                                <i class="fa fa-upload"></i> Upload Gambar
                            </h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="study_case_gambar"> Gambar Study Case </label>
                                <center>
                                    @if (empty($edit->study_case_gambar))
                                        <img src="{{ url('/gambar/upload-gambar.jpg') }}" class="img-fluid gambar-preview"
                                            id="tampilGambar" style="width: 100%; margin-bottom: 10px;">
                                    @else
                                        <img src="{{ url('/storage/' . $edit->study_case_gambar) }}"
                                            class="img-fluid gambar-preview" id="tampilGambar"
                                            style="width: 100%; margin-bottom: 10px;">
                                    @endif
                                </center>
                                <input type="file" class="form-control" name="study_case_gambar" id="study_case_gambar"
                                    onchange="previewImage()">
                            </div>
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
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="id_partner"> Partner Study Case </label>
                                        <select name="id_partner" class="form-control select2" id="id_partner"
                                            style="width: 100%;">
                                            <option value="">- Pilih -</option>
                                            @foreach ($data_partner as $data)
                                                <option value="{{ $data->id }}"
                                                    {{ $edit->id_partner == $data->id ? 'selected' : '' }}>
                                                    {{ $data->partner_nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="study_case_judul"> Judul </label>
                                        <input type="text" class="form-control" name="study_case_judul"
                                            id="study_case_judul" placeholder="Masukkan Judul Study Case"
                                            value="{{ $edit->study_case_judul }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="study_case_deskripsi"> Deskripsi </label>
                                <textarea id="study_case_deskripsi" name="study_case_deskripsi" rows="10" cols="80">
                                {{ $edit->study_case_deskripsi }}
                            </textarea>
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
    @endif

@endsection

@section('js')
    <script src="{{ url('/template') }}/bower_components/ckeditor/ckeditor.js"></script>
    <script>
        $(function() {
            CKEDITOR.replace('study_case_deskripsi')
        })
        $('.select2').select2();

        function previewImage() {
            const image = document.querySelector("#study_case_gambar");
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
                    a("#editStudyCase").validate({
                        ignore: "",
                        rules: {
                            study_case_gambar: {
                                required: !0
                            },
                            id_partner: {
                                required: !0
                            },
                            study_case_judul: {
                                required: !0
                            },
                            study_case_deskripsi: {
                                required: !0
                            }
                        },
                        messages: {
                            study_case_gambar: {
                                required: "Kolom Gambar Harap di Isi!"
                            },
                            id_partner: {
                                required: "Kolom Kategori Harap di IsI!"
                            },
                            study_case_judul: {
                                required: "Kolom Judul Harap di Isi!"
                            },
                            study_case_deskripsi: {
                                required: "Kolom Deskripsi Harap di Isi!"
                            }
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
