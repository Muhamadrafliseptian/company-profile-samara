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
                <table class="table table-bordered table-hover example">
                  <thead>
                  <tr>
                    <th>Blog Tag IndexHome</th>
                    <th>Blog Title IndexHome</th>
                    <th>Blog Text Title IndexHome</th>
                    <th>Blog Image IndexHome</th>
                    <th>Blog SubTitle IndexHome</th>
                    <th>Blog Description IndexHome</th>
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
                                <img src="{{ asset('storage/indexHome/_blog_home/'.$blog_home->blog_home_img) }}" alt="{{ $blog_home->blog_home_img }}" class="img-thumbnail" width="250px">
                            </td>
                            <td>{{ $blog_home->blog_home_subtitle }}</td>
                            <td>{{ $blog_home->blog_home_description }}</td>
                        </tr>
                   @empty
                        <div class="alert alert-danger">
                            <strong>Tidak ada data!</strong>
                        </div>
                   @endforelse
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Blog Tag IndexHome</th>
                    <th>Blog Title IndexHome</th>
                    <th>Blog Text Title IndexHome</th>
                    <th>Blog Image IndexHome</th>
                    <th>Blog Subtitle IndexHome</th>
                    <th>Blog Description IndexHome</th>
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
