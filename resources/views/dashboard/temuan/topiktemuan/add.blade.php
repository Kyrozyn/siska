@extends('layout.main')

@section('content')
    @include('layout.headerdashboard')
    <!-- # Content -->
    <div class="page-content-wrapper">
        <div class="container py-4">
            <div class="card">
                <div class="card-header">
                    <h5>Tambah Topik Temuan</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('topiktemuan.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_topik_temuan">Nama Topik Temuan</label>
                            <input type="text" class="form-control" id="nama_topik_temuan" name="nama_topik_temuan" placeholder="Nama Topik Temuan">
                        </div>
                        <div class="form-group">
                            <label for="icon_url">Icon</label>
                            <input type="file" class="form-control" id="icon_url" name="icon_url" placeholder="Icon">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footerdashboard')
@endsection
