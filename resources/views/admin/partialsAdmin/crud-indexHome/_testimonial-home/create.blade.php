@extends('layouts.appDashboard')
@section('title', 'Dashboard - Index Home - testimonial')
@section('dist-company-profile')
<div class="wrapper">
    <!-- Main content -->
    <section class="content">
    <button type="button" class="btn btn-primary m-3 " onclick="window.location.href='{{ url('testimonial-home-caption') }}'">Back</button>
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
              <form action="{{ route('testimonial-home-caption.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="card-body">

                <div class="form-group">
                    <label class="font-weight-bold">Testimonial Tag IndexHome</label>
                    <input type="text" class="form-control @error('testimonial_home_tag') is-invalid @enderror" name="testimonial_home_tag" value="{{ old('testimonial_home_tag') }}" placeholder="Masukkan Judul Testimonial Home Tag">

                    <!-- error message untuk title -->
                    @error('testimonial_home_tag')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Testimonial Title IndexHome</label>
                    <input type="text" class="form-control @error('testimonial_home_title') is-invalid @enderror" name="testimonial_home_title" value="{{ old('testimonial_home_title') }}" placeholder="Masukkan Judul Testimonial Home Title">

                    <!-- error message untuk title -->
                    @error('testimonial_home_title')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Testimonial Profile IndexHome</label>
                    <input type="file" class="form-control @error('testimonial_home_profile') is-invalid @enderror" name="testimonial_home_profile" ">

                    <!-- error message untuk title -->
                    @error('testimonial_home_profile')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Testimonail Name IndexHome</label>
                    <input type="text" class="form-control @error('testimonial_home_name') is-invalid @enderror" name="testimonial_home_name" value="{{ old('testimonial_home_name') }}" placeholder="Masukkan Testimonial Name Home">

                    <!-- error message untuk title -->
                    @error('testimonial_home_name')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Testimonial JobTitle IndexHome</label>
                    <input type="text" class="form-control @error('testimonial_home_jobtitle') is-invalid @enderror" name="testimonial_home_jobtitle" value="{{ old('testimonial_home_jobtitle') }}" placeholder="Masukkan Testimonial JobTitle Home">

                    <!-- error message untuk title -->
                    @error('testimonial_home_jobtitle')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Testimonial Caption IndexHome</label>
                    <input type="text" class="form-control @error('testimonial_home_caption') is-invalid @enderror" name="testimonial_home_caption" value="{{ old('testimonial_home_caption') }}" placeholder="Masukkan Testimonial Caption Home">

                    <!-- error message untuk title -->
                    @error('testimonial_home_caption')
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
