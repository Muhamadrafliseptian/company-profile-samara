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
                                <label for="carousel_caption_title_1">Carousel Caption Title 1</label>
                                <input type="text" class="form-control" id="carousel_caption_title_1" name="carousel_caption_title_1" value="{{ $carousel_caption->carousel_caption_title_1 }}">
                            </div>
                            <div class="form-group">
                                <label for="carousel_caption_img_1">Carousel Caption Image 1</label>
                                <input type="file" class="form-control" name="carousel_caption_img_1">
                                <p class="fst-italic m-2"><span class="text-danger">*</span> Example Gambar</p>
                                <img src="{{ asset('storage/indexHome/'.$carousel_caption->carousel_caption_img_1) }}" alt="{{ $carousel_caption->carousel_caption_img_1 }}" class="img-thumbnail" width="350px">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="carousel_caption_title_2">Carousel Caption Title 2</label>
                                <input type="text" class="form-control" id="carousel_caption_title_2" name="carousel_caption_title_2" value="{{ $carousel_caption->carousel_caption_title_2 }}">
                            </div>
                            <div class="form-group">
                                <label for="carousel_caption_img_2">Carousel Caption Image 2</label>
                                <input type="file" class="form-control" name="carousel_caption_img_2">
                                <p class="fst-italic m-2"><span class="text-danger">*</span> Example Gambar</p>
                                <img src="{{ asset('storage/indexHome/'.$carousel_caption->carousel_caption_img_2) }}" alt="{{ $carousel_caption->carousel_caption_img_2 }}" class="img-thumbnail" width="350px">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="carousel_caption_title_3">Carousel Caption Title 3</label>
                                <input type="text" class="form-control" id="carousel_caption_title_3" name="carousel_caption_title_3" value="{{ $carousel_caption->carousel_caption_title_3 }}">
                            </div>
                            <div class="form-group">
                                <label for="carousel_caption_img_3">Carousel Caption Image 3</label>
                                <input type="file" class="form-control" name="carousel_caption_img_3">
                                <p class="fst-italic m-2"><span class="text-danger">*</span> Example Gambar</p>
                                <img src="{{ asset('storage/indexHome/'.$carousel_caption->carousel_caption_img_3) }}" alt="{{ $carousel_caption->carousel_caption_img_3 }}" class="img-thumbnail" width="350px">
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
