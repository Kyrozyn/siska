@extends('layout.main')

@section('content')
    @include('layout.headerdashboard')
    <!-- # Content -->
    <div class="page-content-wrapper">
        <div class="container py-4">
            <div class="card">
                <div class="card-header">
                    <h5>Menu Topik Temuan</h5>
                    <h6>Untuk Topik Temuan : {{\App\Models\TopikTemuan::whereId($topik_temuan_id)->first()->nama_topik_temuan}}</h6>
                    @if(!empty($menu_temuan_id))
                        <h6>Menu Temuan : {{\App\Models\MenuTemuan::whereId($menu_temuan_id)->first()->nama_menu_temuan}}</h6>
                    @endif
                </div>
                <div class="card-body">
                    @if(empty($menu_temuan_id))
                    <a href="{{url('/dashboard/menutemuan/'.$topik_temuan_id.'/create')}}" class="btn btn-primary btn-sm">Tambah Menu Temuan</a>
                    @else
                        <a href="{{url('/dashboard/menutemuan/'.$topik_temuan_id.'/create/menutemuanid/'.$menu_temuan_id)}}" class="btn btn-primary btn-sm">Tambah Menu Temuan</a>
                    @endif

                        <hr>
                    <table class="w-100" id="dataTable">
                        <thead>
                        <tr>
                            <th>Nama Menu Temuan</th>
                            <th>Apakah Ada Submenu?</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menu_temuans as $menu_temuan)
                            <tr>
                                <td>{{$menu_temuan->nama_menu_temuan}}</td>
                                <td>{{$menu_temuan->punya_submenu ?   "Ada" : "Tidak Ada"}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <form action="{{url('/dashboard/menutemuan/delete/'.$menu_temuan->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                        @if($menu_temuan->punya_submenu)
                                            <div class="col-6">
                                                <a href="{{url('/dashboard/menutemuan/'.$topik_temuan_id.'/menutemuanid/'.$menu_temuan->id)}}" class="btn btn-primary">Kelola Submenu</a>
                                            </div>
                                        @else
                                            <div class="col-6">
                                                <a href="{{url('/dashboard/pertanyaantemuan/'.$menu_temuan->id)}}" class="btn btn-primary">Kelola Pertanyaan</a>
                                            </div>
                                            @endif
                                    </div>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footerdashboard')
@endsection
