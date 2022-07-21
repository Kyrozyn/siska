@extends('layout.main')

@section('content')
@include('layout.headerdashboard')
<!-- # Content -->
    <div class="page-content-wrapper">
        <!-- Welcome Toast -->
        <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="7000" data-bs-autohide="true">
            <div class="toast-body">
                <svg class="bi bi-bookmark-check text-white" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
                    <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                </svg>
                <div class="toast-text ms-3 me-2">
                    <p class="mb-1 text-white">Selamat datang di SISKA!</p>
                </div>
            </div>
            <button class="btn btn-close btn-close-white position-absolute p-1" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <!-- Tiny Slider One Wrapper -->
        <div class="tiny-slider-one-wrapper">
            <div class="tiny-slider-one">
                <!-- Single Hero Slide -->
                <div>
                    <div class="single-hero-slide bg-overlay" style="background-image: url('{{asset('img/coal-bg.jpg')}}')">
                        <div class="h-100 d-flex align-items-center text-center">
                            <div class="container">
                                <h3 class="text-white mb-1">Selamat Datang, xxxx!</h3>
{{--                                <p class="text-white mb-4">Lihat berita terbaru SISKA disini!</p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-3"></div>
        <div class="container">
            <div class="card mb-3">
                <div class="card-header">
                    <h5>Laporkan Temuan</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        @foreach($topiktemuans as $topiktemuan)
                        <div class="col-4">

                            <div class="feature-card mx-auto text-center">
                                <a href="{{url('/dashboard/laporan/front/'.$topiktemuan->id)}}">
                                <div class="card mx-auto bg-gray"><img src="{{$topiktemuan->icon_url}}" alt=""></div>
                                </a>
                                <p class="mb-0">{{$topiktemuan->nama_topik_temuan}}</p>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        <div class="pb-3"></div>
    </div>

        <div class="container">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="feature-card mx-auto text-center">
                                <a href="{{url('dashboard/topiktemuan')}}">Setting Topik Temuan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h5>Setting Menu Temuan</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        @foreach($topiktemuans as $topiktemuan)
                            <div class="col-4">

                                <div class="feature-card mx-auto text-center">
                                    <a href="{{url('/dashboard/menutemuan/'.$topiktemuan->id)}}">
                                        <div class="card mx-auto bg-gray"><img src="{{$topiktemuan->icon_url}}" alt=""></div>
                                    </a>
                                    <p class="mb-0">{{$topiktemuan->nama_topik_temuan}}</p>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="pb-3"></div>
        </div>
{{--        <div class="container">--}}
{{--            <div class="card mb-3">--}}
{{--                <div class="card-header">--}}
{{--                    <h5>ACC Temuan</h5>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <div class="row g-3">--}}
{{--                            <ul class="ps-0 chat-user-list">--}}
{{--                                @foreach($topiktemuans as $topiktemuan)--}}
{{--                                <li class="p-3"><a class="d-flex" href="#">--}}
{{--                                        <!-- Thumbnail -->--}}
{{--                                        <div class="chat-user-thumbnail me-3 shadow"><img class="img-circle" src="img/bg-img/user2.png" alt=""></div>--}}
{{--                                        <!-- Info -->--}}
{{--                                        <div class="chat-user-info">--}}
{{--                                            <h6 class="text-truncate mb-0">Mustafa Rabbi</h6>--}}
{{--                                            <div class="last-chat">--}}
{{--                                                <p class="text-truncate mb-0">How can I help you?</p>--}}
{{--                                            </div>--}}
{{--                                        </div></a>--}}
{{--                                    <!-- Options -->--}}
{{--                                    <div class="dropstart chat-options-btn">--}}
{{--                                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i></button>--}}
{{--                                        <ul class="dropdown-menu">--}}
{{--                                            <li><a href="#"><i class="bi bi-check"></i>Acc</a></li>--}}
{{--                                            <li><a href="#"><i class="bi bi-slash-circle"></i>Tolak</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="pb-3"></div>--}}
        </div>

@include('layout.footerdashboard')
@endsection
