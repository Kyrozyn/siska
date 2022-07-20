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
                                <td>{{$pertanyaantemuan->satuan}}</td>
                                <td>{{$pertanyaantemuan->type}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-6">
                                            <form action="{{url('/dashboard/menutemuan/delete/'.$pertanyaantemuan->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
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
