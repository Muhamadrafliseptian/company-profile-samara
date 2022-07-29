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
                    <label class="font-weight-bold">Carousel_Caption_Title_1</label>
                    <input type="text" class="form-control @error('carousel_caption_title_1') is-invalid @enderror" name="carousel_caption_title_1" value="{{ old('carousel_caption_title_1') }}" placeholder="Masukkan Judul Carousel Caption">

                    <!-- error message untuk title -->
                    @error('carousel_caption_title_1')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Carousel_Caption_Img_1</label>
                    <input type="file" class="form-control @error('carousel_caption_img_1') is-invalid @enderror" name="carousel_caption_img_1">

                <!-- error message untuk title -->
                @error('carousel_caption_img_1')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                  <hr>
                  <div class="form-group">
                    <label class="font-weight-bold">Carousel_Caption_Title_2</label>
                    <input type="text" class="form-control @error('carousel_caption_title_2') is-invalid @enderror" name="carousel_caption_title_2" value="{{ old('carousel_caption_title_2') }}" placeholder="Masukkan Judul Carousel Caption">

                    <!-- error message untuk title -->
                    @error('carousel_caption_title_2')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Carousel_Caption_Img_2</label>
                    <input type="file" class="form-control @error('carousel_caption_img_2') is-invalid @enderror" name="carousel_caption_img_2">

                <!-- error message untuk title -->
                @error('carousel_caption_img_2')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
                </div>

                  <hr>
                  <div class="form-group">
                    <label class="font-weight-bold">Carousel_Caption_Title_3</label>
                    <input type="text" class="form-control @error('carousel_caption_title_3') is-invalid @enderror" name="carousel_caption_title_3" value="{{ old('carousel_caption_title_1') }}" placeholder="Masukkan Judul Carousel Caption">

                    <!-- error message untuk title -->
                    @error('carousel_caption_title_3')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Carousel_Caption_Image_3</label>
                    <input type="file" class="form-control @error('carousel_caption_img_3') is-invalid @enderror" name="carousel_caption_img_3">

                <!-- error message untuk title -->
                @error('carousel_caption_img_3')
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
