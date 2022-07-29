<<<<<<< HEAD
@extends('adminlte::auth.login')
=======
@extends('layouts.appAdmin')

@section('content')

<div class="container mb-5 mt-5">
<div class="justify-content-center">
    <div class="card" style="border: none; box-shadow: 0px 20px 20px rgb(231, 231, 231) ">
        <div class="row">
            <div class="col-6 mt-5">
                <div class="mb-3 ms-4">
                <h3 class="text-start">LOGIN</h3>
                <P class="text-start mb-5" style="font-size:14px ">Welcome to Integrasia Utama. Please put your credentials below to access the app</P>
  <label for="exampleFormControlInput1" class="form-label">Username</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3 ms-4">
 <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="password" class="form-control mb-2" id="exampleFormControlInput1" placeholder="name@example.com">
  <a href="">forget password?</a>
</div>
 <div class="d-grid gap-2 col-6 mx-auto">
                <a href="" class="btn btn-primary btn-sm ms-4 me-5 p-10">Login</a>
            </div>
            <hr class="ms-4">
            <div class="d-flex justify-content-center" >
                <a href="" class="btn btn-primary btn-sm ms-5 me-5 p-10" style="font-size:14px ">Login with google</a>
                <a href="" class="btn btn-primary btn-sm ms-2 me-5 p-10" style="font-size:14px ">Login with facebook</a>
                <a href="" class="btn btn-primary btn-sm ms-2 me-5 p-10" style="font-size:14px ">Login with twitter</a>

            </div>
            </div>
            <div class="col-6">
                <img src="assets/img/login.png" class="img-fluid bg-primary rounded-end" alt="">
            </div>
        </div>
    </div>
</div>
</div>

@endsection


{{-- <div class="container"  style="height:30em; margin-top: 5em;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card rounded">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Must be 8-20 characters long." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary px-5">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-warning" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
>>>>>>> e064d70f0fdc6118ba42ca51080c47acd630e271
