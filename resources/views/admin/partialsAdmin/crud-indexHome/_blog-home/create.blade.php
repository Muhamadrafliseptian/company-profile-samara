@extends('layouts.appDashboard')
@section('title', 'Dashboard - Index Home - blogs')
@section('dist-company-profile')

<div class="wrapper">
    <!-- Main content -->
    <section class="content">
    <button type="button" class="btn btn-primary m-3 " onclick="window.location.href='{{ url('blog-home-caption') }}'">Back</button>
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title m-2 fs-4">Create Pages</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('blog-home-caption.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="card-body">

                <div class="form-group">
                    <label class="font-weight-bold">blog Tag IndexHome</label>
                    <input type="text" class="form-control @error('blog_home_tag') is-invalid @enderror" name="blog_home_tag" value="{{ old('blog_home_tag') }}" placeholder="Masukkan Judul Blog Home Tag">

                    <!-- error message untuk title -->
                    @error('blog_home_tag')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Blog Title IndexHome</label>
                    <input type="text" class="form-control @error('blog_home_title') is-invalid @enderror" name="blog_home_title" value="{{ old('blog_home_title') }}" placeholder="Masukkan Judul Blog Home Title">

                    <!-- error message untuk title -->
                    @error('blog_home_title')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Blog Text Title IndexHome</label>
                    <input type="text" class="form-control @error('blog_home_text_title') is-invalid @enderror" name="blog_home_text_title" value="{{ old('blog_home_text_title') }}" placeholder="Masukkan Judul Blog Home Text Title">

                    <!-- error message untuk title -->
                    @error('blog_home_text_title')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Blog Image IndexHome</label>
                    <input type="file" class="form-control @error('blog_home_img') is-invalid @enderror" name="blog_home_img" ">

                    <!-- error message untuk title -->
                    @error('blog_home_img')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">blog Subtitle IndexHome</label>
                    <input type="text" class="form-control @error('blog_home_subtitle') is-invalid @enderror" name="blog_home_subtitle" value="{{ old('blog_home_subtitle') }}" placeholder="Masukkan Blog SubTitle Home">

                    <!-- error message untuk title -->
                    @error('blog_home_subtitle')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Blog Description IndexHome</label>
                    <input type="text" class="form-control @error('blog_home_description') is-invalid @enderror" name="blog_home_description" value="{{ old('blog_home_description') }}" placeholder="Masukkan Blog Description Home">

                    <!-- error message untuk title -->
                    @error('blog_home_description')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
