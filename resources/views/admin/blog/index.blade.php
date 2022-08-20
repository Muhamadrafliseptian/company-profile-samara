@php
use Carbon\Carbon;
use App\Models\Blog\Counter;
@endphp

@extends('admin.layouts.template')

@section('title', 'Post Blog')

@section('css')

    <link rel="stylesheet" href="{{ url('/template') }}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

@endsection

@section('breadcrumb')
    <section class="content-header">
        <h1>
            @yield('title')
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('/admin/dashboard') }}">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li class="active">
                @yield('title')
            </li>
        </ol>
    </section>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        <i class="fa fa-book"></i> Data @yield('title')
                    </h3>
                    <a href="{{ url('/admin/blog/create') }}" class="btn btn-primary btn-sm btn-social pull-right">
                        <i class="fa fa-plus"></i> Tambah
                    </a>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th class="text-center">Diposting Oleh</th>
                                <th class="text-center">Tanggal Upload</th>
                                <th class="text-center">Views</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 0;
                            @endphp
                            @foreach ($data_blog as $data)
                                @php
                                    $counter = Counter::where('id_post', $data->id)->count();
                                @endphp
                                <tr>
                                    <td class="text-center">{{ ++$no }}.</td>
                                    <td>{{ $data->getKategori->nama_kategori }}</td>
                                    <td>{{ $data->title }}</td>
                                    <td class="text-center">{{ $data->getUser->nama }}</td>
                                    <td class="text-center">
                                        {{ Carbon::createFromFormat('Y-m-d H:i:s', $data->created_at)->isoFormat('dddd, D MMMM Y H:mm:s') }}
                                    </td>
                                    <td class="text-center">
                                        <small class="label bg-green">
                                            {{ $counter }} Orang
                                        </small>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('/admin/blog/' . encrypt($data->id) . '/edit') }}"
                                            class="btn btn-warning btn-sm btn-social">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ url('/admin/blog/' . encrypt($data->id)) }}" id="editBlog" method="POST"
                                            style="display: inline;">
                                            @method('DELETE')
                                            @csrf
                                            <input type="hidden" name="gambarLama" value="{{ $data->gambar }}">
                                            <button type="submit" class="btn btn-danger btn-sm btn-delete btn-social">
                                                <i class="fa fa-trash-o"></i> Hapus
                                            </button>
                                        </form>
                                        <a href="{{ url('/admin/blog/' . encrypt($data->id) . '/komentar') }}"
                                            class="btn btn-info btn-sm btn-social">
                                            <i class="fa fa-comment-o"></i> Komentar
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

    <script src="{{ url('/template') }}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('/template') }}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(function() {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>

@endsection
