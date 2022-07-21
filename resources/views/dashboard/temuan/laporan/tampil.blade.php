@extends('layout.main')

@section('content')
    @include('layout.headerdashboard')
    <!-- # Content -->
    <div class="page-content-wrapper">
        <div class="container py-4">
            <div class="card">
                <div class="card-header">
                    <h5>Laporan Temuan</h5>

                    {{--                    <h6>Menu Temuan : {{\App\Models\MenuTemuan::whereId($menu_temuan_id)->first()->nama_menu_temuan}}</h6>--}}
                </div>
                {{--                <div class="card-body">--}}

                {{--                </div>--}}
            </div>
            @if($temuans->count() > 0)
                @foreach($temuans as $temuan)
                        <a class="affan-element-item" href="{{url('/dashboard/laporan/tampil/'.$temuan->id)}}">{{$temuan->id}} - {{\App\Models\MenuTemuan::whereId($temuan->menu_temuan_id)->first()->nama_menu_temuan}} - {{$temuan->user->name}}<i class="bi bi-chevron-right"></i></a>
                @endforeach
            @else
                <a class="affan-element-item" href="#">Tidak ada Laporan Temuan Baru</a>
            @endif
        </div>
    </div>

    @include('layout.footerdashboard')
@endsection
