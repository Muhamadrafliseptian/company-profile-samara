@php
    use App\Models\Pengaturan\Projects;
@endphp

@extends('user.app')

@section('title', $detail->judul)

@section('content')
<section>
<div class="container">
    <h3 class="text-primary text-center">{!! $detail->judul !!}</h3>
    <p>{!! $detail->deskripsi !!}</p>
    <img src="{{ url('/storage/' . $detail->image) }}" class="img-fluid" alt="">
</div>
</section>
@endsection
