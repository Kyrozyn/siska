@extends('layout.main')

@section('content')
    @include('layout.headerdashboard')
    <!-- # Content -->
    <div class="page-content-wrapper">
        <div class="container py-4">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah Pertanyaan Temuan</h5>
                        <h6>Menu Temuan : {{\App\Models\MenuTemuan::whereId($menu_temuan_id)->first()->nama_menu_temuan}}</h6>
                </div>
                <div class="card-body">
                        @livewire('pertanyaan-temuan.add', ['menu_temuan_id' => $menu_temuan_id])

                </div>
            </div>
        </div>
    </div>

    @include('layout.footerdashboard')
@endsection
