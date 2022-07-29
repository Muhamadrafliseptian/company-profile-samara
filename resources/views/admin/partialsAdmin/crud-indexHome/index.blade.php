@extends('layouts.appDashboard')
@section('title', 'Dashboard - Index Home')
@section('dist-company-profile')
<div class="wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="text-end mb-4 ">
                <a href="{{ url('carousel-caption/create') }}" class="button-1 text-light rounded">Tambah Data</a>
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover example">
                  <thead>
                  <tr>
                    <th>Carousel_Caption_Title_1</th>
                    <th>Carousel_Caption_Image_1</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @forelse($carousel_captions as $carousel_caption)
                  <tr>
                    <td>{{ $carousel_caption->carousel_caption_title_1 }}</td>
                    <td>
                      <img src="{{ asset('storage/indexHome/'.$carousel_caption->carousel_caption_img_1) }}" alt="{{ $carousel_caption->carousel_caption_img_1 }}" class="img-thumbnail" width="250px">
                    </td>
                    <td>
                        <a href="{{ url('carousel-caption/'.$carousel_caption->id) }}" class="btn btn-sm btn-info">Show</a>
                        <a href="{{ url('carousel-caption/'.$carousel_caption->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ url('carousel-caption/'.$carousel_caption->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                  </tr>
                  @empty
                    <div class="alert alert-danger">
                        <strong>Tidak ada data!</strong>
                    </div>
                  @endforelse
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Carousel_Caption_Title_1</th>
                    <th>Carousel_Caption_Image_1</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
                {{ $carousel_captions->links() }}
              </div>
              <!-- /.card-body -->

            </div>
                        <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover example">
                  <thead>
                  <tr>
                    <th>Carousel_Caption_Title_2</th>
                    <th>Carousel_Caption_Image_2</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @forelse($carousel_captions as $carousel_caption)
                  <tr>
                    <td>{{ $carousel_caption->carousel_caption_title_2 }}</td>
                    <td>
                      <img src="{{ asset('storage/indexHome/'.$carousel_caption->carousel_caption_img_2) }}" alt="{{ $carousel_caption->carousel_caption_img_2 }}" class="img-thumbnail" width="250px">
                    </td>
                    <td>
                        <a href="{{ url('carousel-caption/'.$carousel_caption->id) }}" class="btn btn-sm btn-info">Show</a>
                        <a href="{{ url('carousel-caption/'.$carousel_caption->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ url('carousel-caption/'.$carousel_caption->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                  </tr>
                  @empty
                    <div class="alert alert-danger">
                        <strong>Tidak ada data!</strong>
                    </div>
                  @endforelse
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Carousel_Caption_Title_2</th>
                    <th>Carousel_Caption_Image_2</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
                {{ $carousel_captions->links() }}
              </div>
              <!-- /.card-body -->

            </div>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-hover example">
                  <thead>
                  <tr>
                    <th>Carousel_Caption_Title_3</th>
                    <th>Carousel_Caption_Image_3</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @forelse($carousel_captions as $carousel_caption)
                  <tr>
                    <td>{{ $carousel_caption->carousel_caption_title_3 }}</td>
                    <td>
                      <img src="{{ asset('storage/indexHome/'.$carousel_caption->carousel_caption_img_3) }}" alt="{{ $carousel_caption->carousel_caption_img_3 }}" class="img-thumbnail" width="250px">
                    </td>
                    <td>
                        <a href="{{ url('carousel-caption/'.$carousel_caption->id) }}" class="btn btn-sm btn-info">Show</a>
                        <a href="{{ url('carousel-caption/'.$carousel_caption->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ url('carousel-caption/'.$carousel_caption->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                  </tr>
                  @empty
                    <div class="alert alert-danger">
                        <strong>Tidak ada data!</strong>
                    </div>
                  @endforelse
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Carousel_Caption_Title_3</th>
                    <th>Carousel_Caption_Image_3</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
                {{ $carousel_captions->links() }}
              </div>
              <!-- /.card-body -->

            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection

