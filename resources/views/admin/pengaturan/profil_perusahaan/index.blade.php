@extends('admin.layouts.template')

@section('title', 'Profil Perusahaan')

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

    @if (empty($profil_perusahaan))
        <form method="POST" action="{{ url('/admin/pengaturan/profil_perusahaan') }}" enctype="multipart/form-data"
            id="tambahProfilPerusahaan">
        @else
            <form method="POST" action="{{ url('/admin/pengaturan/profil_perusahaan/' . encrypt($profil_perusahaan->id)) }}"
                enctype="multipart/form-data" id="editProfilPerusahaan">
                @method('PUT')
                <input type="hidden" name="gambarLama" value="{{ $profil_perusahaan->logo }}">
    @endif
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-4">
            @if (empty($profil_perusahaan))
                <div class="box box-primary">
                @else
                    <div class="box box-warning">
            @endif
            <div class="box-header">
                <h3 class="box-title">
                    <i class="fa fa-upload"></i> Upload Logo
                </h3>
            </div>
            <div class="box-body">

                <div class="form-group">
                    <center>
                        @if (empty($profil_perusahaan))
                            <img src="{{ url('/gambar/upload-gambar.jpg') }}" class="img-fluid gambar-preview"
                                style="width: 100%; margin-bottom: 10px;" id="tampilGambar">
                        @else
                            <img src="{{ url('/storage/' . $profil_perusahaan->logo) }}" class="img-fluid gambar-preview"
                                id="tampilGambar" style="width: 100%; margin-bottom: 10px;">
                        @endif
                    </center>
                    <input type="file" onchange="previewImage()" class="form-control" name="logo" id="logo">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        @if (empty($profil_perusahaan))
            <div class="box box-primary">
            @else
                <div class="box box-warning">
        @endif
        <div class="box-header">
            <h3 class="box-title">
                @if (empty($profil_perusahaan))
                    <i class="fa fa-plus"></i> Tambah Data
                @else
                    <i class="fa fa-edit"></i> Edit Data
                @endif
            </h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama_perusahaan"> Nama Perusahaan </label>
                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan"
                            placeholder="Masukkan Nama Perusahaan"
                            value="{{ empty($profil_perusahaan->nama_perusahaan) ? '' : $profil_perusahaan->nama_perusahaan }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email"> Email </label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Masukkan Email"
                            value="{{ empty($profil_perusahaan->email) ? '' : $profil_perusahaan->email }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="no_hp"> No. Handphone </label>
                        <input type="number" class="form-control" id="no_hp" name="no_hp" min="1"
                            placeholder="0" value="{{ empty($profil_perusahaan->no_hp) ? '' : $profil_perusahaan->no_hp }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="kode_pos"> Kode Pos </label>
                        <input type="text" class="form-control" id="kode_pos" name="kode_pos"
                            placeholder="Masukkan Kode Pos"
                            value="{{ empty($profil_perusahaan->kode_pos) ? '' : $profil_perusahaan->kode_pos }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="negara"> Negara </label>
                        <input type="text" class="form-control" id="negara" name="negara"
                            placeholder="Masukkan Negara"
                            value="{{ empty($profil_perusahaan->negara) ? '' : $profil_perusahaan->negara }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="peta"> Peta </label>
                <input type="text" class="form-control" id="peta" name="peta" placeholder="Masukkan Link Peta"
                    value="{{ empty($profil_perusahaan->peta) ? '' : $profil_perusahaan->peta }}">
            </div>
            <div class="form-group">
                <label for="alamat"> Alamat </label>
                <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat" rows="5">{{ empty($profil_perusahaan) ? '' : $profil_perusahaan->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="deskripsi"> Deskripsi </label>
                <textarea id="deskripsi" name="deskripsi" rows="10" cols="80">
                    {{ empty($profil_perusahaan->deskripsi) ? 'Masukkan Deskripsi Perusahaan' : $profil_perusahaan->deskripsi }}
                </textarea>
            </div>
        </div>
        <div class="box-footer">
            <button type="reset" class="btn btn-social btn-danger btn-sm">
                <i class="fa fa-times"></i> Batal
            </button>
            <button type="submit"
                class="btn btn-social {{ empty($profil_perusahaan) ? 'btn-primary' : 'btn-success' }} btn-sm">
                <i class="fa {{ empty($profil_perusahaan) ? 'fa-plus' : 'fa-save' }}"></i>
                {{ empty($profil_perusahaan) ? 'Tambah' : 'Simpan' }}
            </button>
        </div>
    </div>
    </div>
    </div>

    </form>

@endsection

@section('js')
    <script src="{{ url('/template') }}/bower_components/ckeditor/ckeditor.js"></script>
    <script>
        $(function() {
            CKEDITOR.replace('deskripsi')
        })
    </script>
    <script type="text/javascript">
        function previewImage() {
            const image = document.querySelector("#logo");
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

        ! function(a, i, r) {
            var e = {};
            e.UTIL = {
                setupFormValidation: function() {
                    a("#tambahProfilPerusahaan").validate({
                            ignore: "",
                            rules: {
                                nama_perusahaan: {
                                    required: !0
                                },
                                email: {
                                    required: !0
                                },
                                no_hp: {
                                    required: !0
                                },
                                kode_pos: {
                                    required: !0
                                },
                                negara: {
                                    required: !0
                                },
                                alamat: {
                                    required: !0
                                },
                                logo: {
                                    required: !0
                                }
                            },
                            messages: {
                                nama_perusahaan: {
                                    required: "Nama Perusahaan Harap di Isi!"
                                },
                                email: {
                                    required: "Email Harap di Isi!"
                                },
                                no_hp: {
                                    required: "No. HP Harap di Isi!"
                                },
                                kode_pos: {
                                    required: "Kode Post Harap di IsI!"
                                },
                                negara: {
                                    required: "Negara Harap di Isi!"
                                },
                                alamat: {
                                    required: "Alamat Harap di Isi!"
                                },
                                logo: {
                                    required: "Logo Harap di Isi!"
                                }
                            },
                            submitHandler: function(a) {
                                a.submit()
                            }
                        }),
                        a("#editProfilPerusahaan").validate({
                            ignore: "",
                            rules: {
                                nama_perusahaan: {
                                    required: !0
                                },
                                email: {
                                    required: !0
                                },
                                no_hp: {
                                    required: !0
                                },
                                kode_pos: {
                                    required: !0
                                },
                                negara: {
                                    required: !0
                                },
                                alamat: {
                                    required: !0
                                },
                                // logo: {
                                //     required: !0
                                // }
                            },
                            messages: {
                                nama_perusahaan: {
                                    required: "Nama Perusahaan Harap di Isi!"
                                },
                                email: {
                                    required: "Email Harap di Isi!"
                                },
                                no_hp: {
                                    required: "No. HP Harap di Isi!"
                                },
                                kode_pos: {
                                    required: "Kode Post Harap di IsI!"
                                },
                                negara: {
                                    required: "Negara Harap di Isi!"
                                },
                                alamat: {
                                    required: "Alamat Harap di Isi!"
                                },
                                // logo: {
                                //     required: "Logo Harap di Isi!"
                                // }
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
