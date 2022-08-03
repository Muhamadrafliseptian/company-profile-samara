@extends('layouts.appDashboard')
@section('title', 'Dashboard - Index Home - benefit')
@section('dist-company-profile')
<div class="wrapper">
    <!-- Main content -->
    <section class="content">
    <button type="button" class="btn btn-primary m-3 " onclick="window.location.href='{{ url('benefit-home-caption') }}'">Back</button>
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
              <form action="{{ route('benefit-home-caption.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="card-body">

                <div class="form-group">
                    <label class="font-weight-bold">Benefit Tag IndexHome</label>
                    <input type="text" class="form-control @error('benefit_home_tag') is-invalid @enderror" name="benefit_home_tag" value="{{ old('benefit_home_tag') }}" placeholder="Masukkan Judul benefit Home Tag">

                    <!-- error message untuk title -->
                    @error('benefit_home_tag')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Benefit Title IndexHome</label>
                    <input type="text" class="form-control @error('benefit_home_title') is-invalid @enderror" name="benefit_home_title" value="{{ old('benefit_home_title') }}" placeholder="Masukkan Judul Benefit Home Title">

                    <!-- error message untuk title -->
                    @error('benefit_home_title')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Video Icon IndexHome</label>
                    <input type="file" class="form-control @error('benefit_home_icon') is-invalid @enderror" name="benefit_home_icon" ">

                    <!-- error message untuk title -->
                    @error('benefit_home_icon')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Video Subtitle IndexHome</label>
                    <input type="text" class="form-control @error('benefit_home_subtitle') is-invalid @enderror" name="benefit_home_subtitle" value="{{ old('benefit_home_subtitle') }}" placeholder="Masukkan Subtitle Benefit Home">

                    <!-- error message untuk title -->
                    @error('benefit_home_subtitle')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Video Description IndexHome</label>
                    <input type="text" class="form-control @error('benefit_home_description') is-invalid @enderror" name="benefit_home_description" value="{{ old('benefit_home_description') }}" placeholder="Masukkan Description Benefit Home">

                    <!-- error message untuk title -->
                    @error('benefit_home_description')
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
