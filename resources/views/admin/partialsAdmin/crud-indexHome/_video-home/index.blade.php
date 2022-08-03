@extends('layouts.appDashboard')
@section('title', 'Dashboard - Index Home - video')
@section('dist-company-profile')
 <div class="wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="text-end mb-4 ">
                <a href="{{ url('video-home-caption/create') }}" class="button-1 text-light rounded">Tambah Data</a>

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
                    <th>Video Tag IndexHome</th>
                    <th>Video Title IndexHome</th>
                    <th>Video Image IndexHome</th>
                    <th>Video URL IndexHome</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @forelse($video_homes as $video_home)
                        <tr>
                            <td>{{ $video_home->video_home_tag }}</td>
                            <td>{{ $video_home->video_home_title }}</td>
                            <td>
                                <img src="{{ asset('storage/indexHome/_video_home/'.$video_home->video_home_img) }}" alt="{{ $video_home->video_home_img }}" class="img-thumbnail" width="250px">
                            </td>
                            <td>{{ $video_home->video_home_url }}</td>
                            <td class="w-25">
                                <a href="{{ url('cobaan-index') }}" class="btn btn-sm btn-info ">Show</a>
                                <a href="{{ url('video-home-caption/'.$video_home->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ url('video-home-caption/'.$video_home->id) }}" method="POST" class="d-inline">
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
                    <th>Video Tag IndexHome</th>
                    <th>Video Title IndexHome</th>
                    <th>Video Image IndexHome</th>
                    <th>Video URL IndexHome</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
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
