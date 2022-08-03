@extends('layouts.appDashboard')
@section('title', 'Dashboard - Index Home - Create')
@section('dist-company-profile')
<div class="wrapper">
    <!-- Main content -->
    <section class="content">
    <button type="button" class="btn btn-primary m-3 " onclick="window.location.href='{{ url('carousel-caption') }}'">Back</button>
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
              <form action="{{ route('carousel-caption.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="card-body">

                <div class="form-group">
                    <label class="font-weight-bold">Carousel_Caption_Title</label>
                    <input type="text" class="form-control @error('carousel_caption_title') is-invalid @enderror" name="carousel_caption_title" value="{{ old('carousel_caption_title') }}" placeholder="Masukkan Judul Carousel Caption">

                    <!-- error message untuk title -->
                    @error('carousel_caption_title')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Carousel_Caption_Img</label>
                    <input type="file" class="form-control @error('carousel_caption_img') is-invalid @enderror" name="carousel_caption_img">

                <!-- error message untuk title -->
                @error('carousel_caption_img')
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
