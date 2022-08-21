@extends('admin.layouts.template')

@section('title', 'Profil Saya')

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

    <form action="{{ url('/admin/akun/profil_saya/' . encrypt(Auth::user()->id)) }}" id="profilSaya" method="POST"
        enctype="multipart/form-data">
        @method('PUT')
        @csrf
        @if (empty(Auth::user()->foto))
        @else
            <input type="hidden" name="gambarLama" value="{{ Auth::user()->foto }}">
        @endif
        <div class="row">
            <div class="col-md-4">
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">
                            <i class="fa fa-upload"></i> Upload Profil
                        </h3>
                    </div>
                    <div class="box-body">
                        <center>
                            @if (empty(Auth::user()->foto))
                                <img src="{{ url('/gambar/upload-gambar.jpg') }}" class="img-fluid gambar-preview"
                                    style="width: 100%; margin-bottom: 10px;" id="tampilGambar">
                            @else
                                <img src="{{ url('/storage/' . Auth::user()->foto) }}" class="img-fluid gambar-preview"
                                    style="width: 100%; margin-bottom: 10px;" id="tampilGambar">
                            @endif
                        </center>
                        <input type="file" class="form-control" name="foto" id="foto" onchange="previewImage()">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">
                            <i class="fa fa-edit"></i> Edit Profil <b>{{ Auth::user()->nama }}</b>
                        </h3>
                        <button type="button" class="btn btn-primary btn-sm btn-social pull-right" data-toggle="modal"
                            data-target="#modal-default">
                            <i class="fa fa-edit"></i> Ganti Password
                        </button>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama"> Nama </label>
                            <input type="text" class="form-control" name="nama" id="nama"
                                placeholder="Masukkan Nama" value="{{ Auth::user()->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="email"> Email </label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Masukkan Email" value="{{ Auth::user()->email }}">
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
                <form action="{{ url('/admin/akun/profil_saya/simpan') }}" id="gantiPassword" method="POST">
                    @method('PUT')
                    {{ csrf_field() }}
                    <div class="modal-body" id="modal-content-edit">
                        <div class="form-group">
                            <label for="password_lama"> Password Lama </label>
                            <input type="password" class="form-control" name="password_lama" id="password_lama"
                                placeholder="Masukkan Password Lama">
                        </div>
                        <div class="form-group">
                            <label for="password_baru"> Password Baru </label>
                            <input type="password" class="form-control" name="password_baru" id="password_baru"
                                placeholder="Masukan Password Baru">
                        </div>
                        <div class="form-group">
                            <label for="konfirmasi_password"> Konfirmasi Password </label>
                            <input type="password" class="form-control" name="konfirmasi_password"
                                id="konfirmasi_password" placeholder="Masukkan Konfirmasi Password">
                        </div>
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

    <script type="text/javascript">
        function previewImage() {
            const image = document.querySelector("#foto");
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
        function editBenefit(id) {
            $.ajax({
                url: "/admin/pengaturan/benefit/edit",
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
                    a("#profilSaya").validate({
                            ignore: "",
                            rules: {
                                foto: {
                                    required: !0
                                },
                                nama: {
                                    required: !0
                                },
                                email: {
                                    required: !0
                                }
                            },
                            messages: {
                                foto: {
                                    required: "foto profil harap di isi!"
                                },
                                nama: {
                                    required: "nama profil harap di isi!"
                                },
                                email: {
                                    required: "email profil harap di isi!"
                                },
                            },
                            submitHandler: function(a) {
                                a.submit()
                            }
                        }),
                        a("#gantiPassword").validate({
                            ignore: "",
                            rules: {
                                password_lama: {
                                    required: !0
                                },
                                password_baru: {
                                    required: !0
                                },
                                konfirmasi_password: {
                                    required: !0
                                }
                            },
                            messages: {
                                password_lama: {
                                    required: "password lama harap di isi!"
                                },
                                password_baru: {
                                    required: "password baru harap di isi!"
                                },
                                konfirmasi_password: {
                                    required: "password harap di isi!"
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
