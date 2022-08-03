@extends('layouts.appDashboard')
@section('title', 'Dashboard - Index Home - video')
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
                        <form action="{{ route('video-home-caption.update', $video_home->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="text" class="form-control" id="id" name="id" value="{{ $video_home->id }}" hidden />

                            <div class="form-group">
                                <label for="video_home_tag">Video Tag</label>
                                <input type="text" class="form-control" id="video_home_tag" name="video_home_tag" value="{{ $video_home->video_home_tag }}">
                            </div>

                            <div class="form-group">
                                <label for="video_home_title">Video Title</label>
                                <input type="text" class="form-control" id="video_home_title" name="video_home_title" value="{{ $video_home->video_home_title }}">
                            </div>

                            <div class="form-group">
                                <label for="video_home_url">Video URL</label>
                                <input type="text" class="form-control" id="video_home_url" name="video_home_url" value="{{ $video_home->video_home_url }}">
                            </div>

                            <div class="form-group">
                                <label for="video_home_img">Video Image</label>
                                <input type="file" class="form-control" name="video_home_img">
                                <p class="fst-italic m-2"><span class="text-danger">*</span> Example Gambar</p>
                                <img src="{{ asset('storage/indexHome/_video_home/'.$video_home->video_home_img) }}" alt="{{ $video_home->video_home_img }}" class="img-thumbnail" width="350px">
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
