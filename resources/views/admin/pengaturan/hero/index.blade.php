@extends('admin.layouts.template')

@section('title', 'hero')

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

    @section('content')

     @if (empty($data_hero))
        <form method="POST" action="{{ url('/admin/pengaturan/hero') }}" enctype="multipart/form-data"
            id="tambahHero">
        @else
            <form method="POST" action="{{ url('/admin/pengaturan/hero/' . encrypt($data_hero->id)) }}"
                enctype="multipart/form-data" id="editHero">
                @method('PUT')
                <input type="hidden" name="gambarLama" value="{{ $data_hero->image }}">
    @endif
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-4">
            @if (empty($data_hero))
                <div class="box box-primary">
                @else
                    <div class="box box-warning">
            @endif
            <div class="box-header">
                <h3 class="box-title">
                    <i class="fa fa-upload"></i> Upload image
                </h3>
            </div>
            <div class="box-body">

                <div class="form-group">
                    <center>
                        @if (empty($data_hero))
                            <img src="{{ url('/gambar/upload-gambar.jpg') }}" class="img-fluid gambar-preview"
                                style="width: 100%; margin-bottom: 10px;" id="tampilGambar">
                        @else
                            <img src="{{ url('/storage/' . $data_hero->image) }}" class="img-fluid gambar-preview"
                                id="tampilGambar" style="width: 100%; margin-bottom: 10px;">
                        @endif
                    </center>
                    <input type="file" onchange="previewImage()" class="form-control" name="image" id="image">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        @if (empty($data_hero))
            <div class="box box-primary">
            @else
                <div class="box box-warning">
        @endif
        <div class="box-header">
            <h3 class="box-title">
                @if (empty($data_hero))
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
                        <label for="deskripsi"> Title </label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                            placeholder="Masukkan Title"
                            value="{{ empty($data_hero->deskripsi) ? '' : $data_hero->deskripsi }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="reset" class="btn btn-social btn-danger btn-sm">
                <i class="fa fa-times"></i> Batal
            </button>
            <button type="submit"
                class="btn btn-social {{ empty($data_hero) ? 'btn-primary' : 'btn-success' }} btn-sm">
                <i class="fa {{ empty($data_hero) ? 'fa-plus' : 'fa-save' }}"></i>
                {{ empty($data_hero) ? 'Tambah' : 'Simpan' }}
            </button>
        </div>
    </div>
    </div>
    </div>
    </form>
    <script>
        ! function(a, i, r) {
            var e = {};
            e.UTIL = {
                setupFormValidation: function() {
                    a("#tambahHero").validate({
                            ignore: "",
                            rules: {
                                image: {
                                    required: !0
                                },
                                 deskripsi: {
                                    required: !0
                                }
                            },
                            messages: {
                                image: {
                                    required: "Image harap di isi!"
                                },
                                deskripsi: {
                                    required: "Image harap di isi!"
                                },
                            },
                            submitHandler: function(a) {
                                a.submit()
                            }
                        }),
                        a("#editHero").validate({
                            ignore: "",
                            rules: {
                                image: {
                                    required: !0
                                },
                                 deskripsi: {
                                    required: !0
                                }
                            },
                            messages: {
                                image: {
                                    required: "Image harap di isi!"
                                },
                                deskripsi: {
                                    required: "Deskripsi harap di isi!"
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
