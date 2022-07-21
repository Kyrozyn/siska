@extends('layout.main')

@section('content')
<div class="hero-block-wrapper" style="background: url('{{asset('img/bgpexel.jpg')}}')">
    <!-- Styles -->
    <div class="hero-block-styles">
        <div class="hb-styles1" style="background-image: url('{{asset('img/core-img/dot.png')}}')" class="shadow-lg"></div>
        <div class="hb-styles2"></div>
        <div class="hb-styles3"></div>
    </div>
    <div class="custom-container">
        <!-- Skip Page -->
        <div class="skip-page"><a href="{{url('/login')}}">Login</a></div>
        <!-- Hero Block Content -->
        <div class="hero-block-content"><img class="mb-4" src="{{asset('img/logosesil.png')}}" alt="">
            <h2 class="display-4 text-black mb-3 font-weight-bolder" style="text-shadow: black">SESIL</h2>
            <p class="text-black font-weight-bolder" style="text-shadow: black;">SESIL adalah sebuah sistem untuk mendukung percepatan distribusi informasi
            </p>
            <a class="btn btn-warning btn-lg w-100" href="{{url('/login')}}">Masuk ke Sistem SESIL</a>
        </div>
    </div>
</div>
@endsection
