@extends('layouts.appDashboard')
@section('title', 'Dashboard - Index Home - testimonial')
@section('dist-company-profile')
 <div class="wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="text-end mb-4 ">
                <a href="{{ url('testimonial-home-caption/create') }}" class="button-1 text-light rounded">Tambah Data</a>

            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover example">
                    <thead>
                    <tr>
                        <th>testimonial Tag IndexHome</th>
                        <th>testimonial Title IndexHome</th>
                        <th>testimonial Profile IndexHome</th>
                        <th>testimonial Name IndexHome</th>
                        <th>testimonial Jobtitle IndexHome</th>
                        <th>testimonial Caption IndexHome</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($testimonial_homes as $testimonial_home)
                            <tr>
                                <td>{{ $testimonial_home->testimonial_home_tag }}</td>
                                <td>{{ $testimonial_home->testimonial_home_title }}</td>
                                <td>
                                    <img src="{{ asset('storage/indexHome/_testimonial_home/'.$testimonial_home->testimonial_home_img) }}" alt="{{ $testimonial_home->testimonial_home_img }}" class="img-thumbnail" width="250px">
                                </td>
                                <td>{{ $testimonial_home->testimonial_home_name }}</td>
                                <td>{{ $testimonial_home->testimonial_home_jobtitle }}</td>
                                <td>{{ $testimonial_home->testimonial_home_caption }}</td>
                                <td class="w-25">
                                    <a href="{{ url('cobaan-index') }}" class="btn btn-sm btn-info ">Show</a>
                                    <a href="{{ url('testimonial-home-caption/'.$testimonial_home->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ url('testimonial-home-caption/'.$testimonial_home->id) }}" method="POST" class="d-inline">
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
                        <th>testimonial Tag IndexHome</th>
                        <th>testimonial Title IndexHome</th>
                        <th>testimonial Profile IndexHome</th>
                        <th>testimonial Name IndexHome</th>
                        <th>testimonial Jobtitle IndexHome</th>
                        <th>testimonial Caption IndexHome</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    </table>
                </div>
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
