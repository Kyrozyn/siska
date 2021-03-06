@extends('layout.main')

@section('content')
    @include('layout.headerdashboard')
    <!-- # Content -->
    <div class="page-content-wrapper">
        <div class="container py-4">
            <div class="card">
                <div class="card-header">
                    <h5>Laporan</h5>

{{--                    <h6>Menu Temuan : {{\App\Models\MenuTemuan::whereId($menu_temuan_id)->first()->nama_menu_temuan}}</h6>--}}
                </div>
{{--                <div class="card-body">--}}

{{--                </div>--}}
            </div>
            @if($menutemuans)
                @foreach($menutemuans as $menutemuan)
                    @if($menutemuan->punya_submenu)
                        <a class="affan-element-item" href="{{url('/dashboard/laporan/front/next/'.$menutemuan->id)}}">{{$menutemuan->nama_menu_temuan}}<i class="bi bi-chevron-right"></i></a>
                    @else
                        <a class="affan-element-item" href="{{url('/dashboard/laporan/form/'.$menutemuan->id)}}">{{$menutemuan->nama_menu_temuan}}<i class="bi bi-chevron-right"></i></a>
                    @endif
                @endforeach
            @else
                <a class="affan-element-item" href="#">Tidak ada menu temuan, harap hubungi Manager/KTT<i class="bi bi-chevron-right"></i></a>
            @endif
        </div>
    </div>

    @include('layout.footerdashboard')
@endsection
