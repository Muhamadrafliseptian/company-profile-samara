@extends('layouts.appDashboard')
@section('title', 'Dashboard - Index Home - benefit')
@section('dist-company-profile')
<div class="wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="text-end mb-4 ">
                <a href="{{ url('benefit-home-caption/create') }}" class="button-1 text-light rounded">Tambah Data</a>

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
                    <th>Benefit Tag IndexHome</th>
                    <th>Benefit Title IndexHome</th>
                    <th>Benefit Icon IndexHome</th>
                    <th>Benefit Subtitle IndexHome</th>
                    <th>Benefit Description IndexHome</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @forelse($benefit_homes as $benefit_home)
                        <tr>
                            <td>{{ $benefit_home->benefit_home_tag }}</td>
                            <td>{{ $benefit_home->benefit_home_title }}</td>
                            <td>
                                <img src="{{ asset('storage/indexHome/_benefit_home/'.$benefit_home->benefit_home_icon) }}" alt="{{ $benefit_home->benefit_home_icon }}" class="img-thumbnail" width="250px">
                            </td>
                            <td>{{ $benefit_home->benefit_home_subtitle }}</td>
                            <td>{{ $benefit_home->benefit_home_description }}</td>
                            <td class="w-25">
                                <a href="{{ url('cobaan-index') }}" class="btn btn-sm btn-info ">Show</a>
                                <a href="{{ url('benefit-home-caption/'.$benefit_home->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ url('benefit-home-caption/'.$benefit_home->id) }}" method="POST" class="d-inline">
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
                    <th>Benefit Tag IndexHome</th>
                    <th>Benefit Title IndexHome</th>
                    <th>Benefit Icon IndexHome</th>
                    <th>Benefit Subtitle IndexHome</th>
                    <th>Benefit Description IndexHome</th>
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
