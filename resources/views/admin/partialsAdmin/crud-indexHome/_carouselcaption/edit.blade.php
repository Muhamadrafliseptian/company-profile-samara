@extends('layouts.appDashboard')
@section('title', 'Dashboard - Index Home - Edit')
@section('dist-company-profile')

    <!-- Main content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Carousel Caption</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="{{ route('carousel-caption.update', $carousel_caption->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="carousel_caption_title">Carousel Caption Title</label>
                                <input type="text" class="form-control" id="carousel_caption_title" name="carousel_caption_title" value="{{ $carousel_caption->carousel_caption_title }}">
                            </div>
                            <div class="form-group">
                                <label for="carousel_caption_img">Carousel Caption Image</label>
                                <input type="file" class="form-control" name="carousel_caption_img">
                                <p class="fst-italic m-2"><span class="text-danger">*</span> Example Gambar</p>
                                <img src="{{ asset('storage/indexHome/'.$carousel_caption->carousel_caption_img) }}" alt="{{ $carousel_caption->carousel_caption_img }}" class="img-thumbnail" width="350px">
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
