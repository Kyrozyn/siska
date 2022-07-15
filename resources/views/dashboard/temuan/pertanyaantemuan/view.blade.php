@extends('layout.main')

@section('content')
    @include('layout.headerdashboard')
    <!-- # Content -->
    <div class="page-content-wrapper">
        <div class="container py-4">
            <div class="card">
                <div class="card-header">
                    <h5>Pertanyaan Temuan</h5>
                    @if(!empty($menu_temuan_id))
                        <h6>Menu Temuan : {{\App\Models\MenuTemuan::whereId($menu_temuan_id)->first()->nama_menu_temuan}}</h6>
                    @endif
                </div>
                <div class="card-body">
                    <a href="{{url('/dashboard/pertanyaantemuan/'.$menu_temuan_id.'/create')}}" class="btn btn-primary btn-sm">Tambah Menu Temuan</a>

                        <hr>
                    <table class="w-100" id="dataTable">
                        <thead>
                        <tr>
                            <th>Nama Pertanyaan Temuan</th>
                            <th>Satuan</th>
                            <th>Jenis Pertanyaan</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pertanyaantemuans as $pertanyaantemuan)
                            <tr>
                                <td>{{$pertanyaantemuan->nama_pertanyaan_temuan}}</td>
                                <td>{{$menu_temuan->satuan}}</td>
                                <td>{{$menu_temuan->type}}</td>
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
