@extends('admin.layouts.template')

@section('title', 'Testimonial')

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
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-book"></i> Data @yield('title')
                    </h3>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="box-body"></div>
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
    </div>

@endsection
