@extends('layout.main')

@section('content')
    <!-- Back Button -->
    <div class="login-back-button"><a href="{{url('/')}}">
            <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
            </svg></a></div>


    <!-- Login Wrapper Area -->
    <div class="login-wrapper d-flex align-items-center justify-content-center" style="background: url('{{asset('img/bgpexel.jpg')}}')">
        <div class="custom-container">
            <div class="text-center">
                <img class="login-intro-img" style="width: 50%" src="{{asset('img/logosesil.png')}}" alt="">
            </div>
            <div class="text-center px-4">
                <img class="login-intro-img" src="{{asset('img/sesillogotulisan.png')}}" alt="">
            </div>
            <!-- Register Form -->
            <div class="register-form mt-4">
                <h6 class="mb-3 text-center">Log in untuk masuk ke dalam sistem SESIL</h6>
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
                <form action="{{url('/login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Username" name="email" id="email">
                    </div>
                    <div class="form-group position-relative">
                        <input class="form-control" id="psw-input password" type="password" placeholder="Password" name="password">
                        <div class="position-absolute" id="password-visibility"><i class="bi bi-eye"></i><i class="bi bi-eye-slash"></i></div>
                    </div>
                    <button class="btn btn-primary w-100" style="background: #34383c; border: #34383c" type="submit">Log in</button>
                </form>
            </div>
            <!-- Login Meta -->
{{--            <div class="login-meta-data text-center"><a class="stretched-link forgot-password d-block mt-3 mb-1" href="page-forget-password.html">Forgot Password?</a>--}}
{{--                <p class="mb-0">Didn't have an account? <a class="stretched-link" href="page-register.html">Register Now</a></p>--}}
            </div>
        </div>
    </div>
@endsection
