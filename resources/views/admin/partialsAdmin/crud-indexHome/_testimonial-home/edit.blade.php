@extends('layouts.appDashboard')
@section('title', 'Dashboard - Index Home - testimonial')
@section('dist-company-profile')

     <!-- Main content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('testimonial-home-caption.update', $testimonial_home->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="text" class="form-control" id="id" name="id" value="{{ $testimonial_home->id }}" hidden />

                            <div class="form-group">
                                <label for="testimonial_home_tag">Testimonial Tag</label>
                                <input type="text" class="form-control" id="testimonial_home_tag" name="testimonial_home_tag" value="{{ $testimonial_home->testimonial_home_tag }}">
                            </div>

                            <div class="form-group">
                                <label for="testimonial_home_title">Testimonial Title</label>
                                <input type="text" class="form-control" id="testimonial_home_title" name="testimonial_home_title" value="{{ $testimonial_home->testimonial_home_title }}">
                            </div>

                            <div class="form-group">
                                <label for="testimonial_home_icon">Testimonial Profile</label>
                                <input type="file" class="form-control" name="testimonial_home_profile">
                                <p class="fst-italic m-2"><span class="text-danger">*</span> Example Profile</p>
                                <img src="{{ asset('storage/indexHome/_testimonial_home/'.$testimonial_home->testimonial_home_profile) }}" alt="{{ $testimonial_home->testimonial_home_profile }}" class="img-thumbnail" width="350px">
                            </div>

                            <div class="form-group">
                                <label for="testimonial_home_name">Testimonial Name</label>
                                <input type="text" class="form-control" id="testimonial_home_name" name="testimonial_home_name" value="{{ $testimonial_home->testimonial_home_name }}">
                            </div>

                            <div class="form-group">
                                <label for="testimonial_home_jobtitle">Testimonial JobTitle</label>
                                <input type="text" class="form-control" id="testimonial_home_jobtitle" name="testimonial_home_jobtitle" value="{{ $testimonial_home->testimonial_home_jobtitle }}">
                            </div>

                            <div class="form-group">
                                <label for="testimonial_home_caption">Testimonial Caption</label>
                                <input type="text" class="form-control" id="testimonial_home_caption" name="testimonial_home_caption" value="{{ $testimonial_home->testimonial_home_caption }}">
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
