@extends('layout.main')

@section('content')
    @include('layout.headerdashboard')
    <!-- # Content -->
    <div class="page-content-wrapper">
        <div class="container py-4">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah Menu Topik Temuan</h5>
                    <h6>Untuk Topik Temuan : {{\App\Models\TopikTemuan::whereId($topik_temuan_id)->first()->nama_topik_temuan}}</h6>
                    @if(!($menu_temuan_id==null))
                        <h6>Menu Temuan : {{\App\Models\MenuTemuan::whereId($menu_temuan_id)->first()->nama_menu_temuan}}</h6>
                    @endif
                </div>
                <div class="card-body">
                    @if(!empty($menu_temuan_id))
                        @livewire('menu-temuan.add', ['topik_temuan_id' => $topik_temuan_id,'menu_temuan_id' => $menu_temuan_id])
                    @else
                        @livewire('menu-temuan.add', ['topik_temuan_id' => $topik_temuan_id])
                    @endif

                </div>
            </div>
        </div>
    </div>

    @include('layout.footerdashboard')
@endsection
