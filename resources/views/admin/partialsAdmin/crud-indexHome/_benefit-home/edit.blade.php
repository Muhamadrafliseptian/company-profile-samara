@extends('layouts.appDashboard')
@section('title', 'Dashboard - Index Home - benefit')
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
                        <form action="{{ route('benefit-home-caption.update', $benefit_home->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="text" class="form-control" id="id" name="id" value="{{ $benefit_home->id }}" hidden />

                            <div class="form-group">
                                <label for="benefit_home_tag">Video Tag</label>
                                <input type="text" class="form-control" id="benefit_home_tag" name="benefit_home_tag" value="{{ $benefit_home->benefit_home_tag }}">
                            </div>

                            <div class="form-group">
                                <label for="benefit_home_title">Video Title</label>
                                <input type="text" class="form-control" id="benefit_home_title" name="benefit_home_title" value="{{ $benefit_home->benefit_home_title }}">
                            </div>

                            <div class="form-group">
                                <label for="benefit_home_icon">Video Icon</label>
                                <input type="file" class="form-control" name="benefit_home_icon">
                                <p class="fst-italic m-2"><span class="text-danger">*</span> Example Icon</p>
                                <img src="{{ asset('storage/indexHome/_benefit_home/'.$benefit_home->benefit_home_icon) }}" alt="{{ $benefit_home->benefit_home_icon }}" class="img-thumbnail" width="350px">
                            </div>

                            <div class="form-group">
                                <label for="benefit_home_subtitle">Video Subtitle</label>
                                <input type="text" class="form-control" id="benefit_home_subtitle" name="benefit_home_subtitle" value="{{ $benefit_home->benefit_home_subtitle }}">
                            </div>

                            <div class="form-group">
                                <label for="benefit_home_description">Video Description</label>
                                <input type="text" class="form-control" id="benefit_home_description" name="benefit_home_description" value="{{ $benefit_home->benefit_home_description }}">
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
