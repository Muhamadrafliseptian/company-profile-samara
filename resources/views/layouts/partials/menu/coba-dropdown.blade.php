@extends('layouts.appAdmin')
@section('cobaan')
<link href="{{ asset('assets/css/style-vidio.css') }}" rel="stylesheet">

{{-- <div class="container"> --}}
    <h1>Play YouTube or Vimeo Videos in Bootstrap 5 Modal</h1>


 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary video-btn" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-bs-target="#myModal">
  Play Video 1 - autoplay
</button>

   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary video-btn" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/IP7uGKgJL8U" data-bs-target="#myModal">
  Play Video 2
</button>


   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary video-btn" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/A-twOC3W558" data-bs-target="#myModal">
  Play Video 3
</button>


     <!-- Button trigger modal -->
<button type="button" class="btn btn-primary video-btn" data-bs-toggle="modal" data-src="https://player.vimeo.com/video/58385453?badge=0" data-bs-target="#myModal">
  Play Vimeo Video
</button>





{{-- </div> --}}



@endsection
