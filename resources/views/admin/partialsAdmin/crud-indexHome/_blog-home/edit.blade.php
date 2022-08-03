@extends('layouts.appDashboard')
@section('title', 'Dashboard - Index Home - blogs')
@section('dist-company-profile')

<div class="wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="text-end mb-4 ">
                <a href="{{ url('blog-home-caption/create') }}" class="button-1 text-light rounded">Tambah Data</a>

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
                        <th>blog Tag IndexHome</th>
                        <th>blog Title IndexHome</th>
                        <th>blog Text Title IndexHome</th>
                        <th>blog Image IndexHome</th>
                        <th>blog Subtitle IndexHome</th>
                        <th>blog Description IndexHome</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($blog_homes as $blog_home)
                            <tr>
                                <td>{{ $blog_home->blog_home_tag }}</td>
                                <td>{{ $blog_home->blog_home_title }}</td>
                                <td>{{ $blog_home->blog_home_text_title }}</td>
                                <td>
                                    <img src="{{ asset('storage/indexHome/_blog_home/'.$blog_home->blog_home_img) }}" alt="{{ $testimonial_home->testimonial_home_img }}" class="img-thumbnail" width="250px">
                                </td>
                                <td>{{ $blog_home->blog_home_subtitle }}</td>
                                <td>{{ $blog_home->blog_home_description }}</td>
                                <td class="w-25">
                                    <a href="{{ url('cobaan-index') }}" class="btn btn-sm btn-info ">Show</a>
                                    <a href="{{ url('blog-home-caption/'.$blog_home->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ url('blog-home-caption/'.$blog_home->id) }}" method="POST" class="d-inline">
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
                        <th>blog Tag IndexHome</th>
                        <th>blog Title IndexHome</th>
                        <th>blog Text Title IndexHome</th>
                        <th>blog Image IndexHome</th>
                        <th>blog Subtitle IndexHome</th>
                        <th>blog Description IndexHome</th>
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
