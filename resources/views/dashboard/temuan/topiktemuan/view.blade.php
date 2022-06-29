@extends('layout.main')

@section('content')
    @include('layout.headerdashboard')
    <!-- # Content -->
    <div class="page-content-wrapper">
        <div class="container py-4">
            <div class="card">
                <div class="card-header">
                    <h5>Topik Temuan</h5>
                </div>
                <div class="card-body">
                    <a href="{{route('topiktemuan.create')}}" class="btn btn-primary btn-sm">Tambah Topik Temuan</a>
                    <hr>
                    <table class="w-100" id="dataTable">
                        <thead>
                        <tr>
                            <th>Nama Topik Temuan</th>
                            <th>Icon</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($topiktemuans as $topiktemuan)
                            <tr>
                                <td>{{$topiktemuan->nama_topik_temuan}}</td>
                                <td><img src="{{$topiktemuan->icon_url}}" alt=""></td>
                                <td>
                                    <a href="{{route('topiktemuan.edit', $topiktemuan->id)}}" class="btn btn-warning mb-2">Edit</a>
                                    <form action="{{route('topiktemuan.destroy', $topiktemuan->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
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
