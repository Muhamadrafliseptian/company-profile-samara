@extends('layouts.appDashboard')
@section('title', 'Dashboard - Index Home - Create')
@section('dist-company-profile')
<div class="wrapper">
    <!-- Main content -->
    <section class="content">
    <button type="button" class="btn btn-primary m-3 " onclick="window.location.href='{{ url('video-home-caption') }}'">Back</button>
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
              <form action="{{ route('video-home-caption.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="card-body">

                <div class="form-group">
                    <label class="font-weight-bold">Video Tag IndexHome</label>
                    <input type="text" class="form-control @error('video_home_tag') is-invalid @enderror" name="video_home_tag" value="{{ old('video_home_tag') }}" placeholder="Masukkan Judul Video Home Tag">

                    <!-- error message untuk title -->
                    @error('video_home_tag')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Video Title IndexHome</label>
                    <input type="text" class="form-control @error('video_home_title') is-invalid @enderror" name="video_home_title" value="{{ old('video_home_title') }}" placeholder="Masukkan Judul Video Home Title">

                    <!-- error message untuk title -->
                    @error('video_home_title')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Video image IndexHome</label>
                    <input type="file" class="form-control @error('video_home_img') is-invalid @enderror" name="video_home_img" ">

                    <!-- error message untuk title -->
                    @error('video_home_img')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Video url IndexHome</label>
                    <input type="text" class="form-control @error('video_home_url') is-invalid @enderror" name="video_home_url" value="{{ old('video_home_url') }}" placeholder="Masukkan Link Video Home">

                    <!-- error message untuk title -->
                    @error('video_home_url')
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
