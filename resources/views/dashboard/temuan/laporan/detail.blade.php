@extends('layout.main')

@section('content')
    @include('layout.headerdashboard')
    <!-- # Content -->
    <div class="page-content-wrapper">
        <div class="container py-4">
            <div class="card">
                <div class="card-header">
                    <h5>Laporan Temuan #{{$temuan->id}}</h5>
                    <h6>Untuk Topik Temuan : {{\App\Models\TopikTemuan::whereId(\App\Models\MenuTemuan::whereId($temuan->menu_temuan_id)->first()->topik_temuan_id)->first()->nama_topik_temuan}}</h6>
                        <h6>Menu Temuan : {{\App\Models\MenuTemuan::whereId($temuan->menu_temuan_id)->first()->nama_menu_temuan}}</h6>
                </div>
                <div class="card-body">
                    @foreach($temuan->detail as $detail)
                        <a class="affan-element-item" href="#">{{$detail->pertanyaan_temuan->nama_pertanyaan_temuan}} : {{$detail->jawaban}}</a>
                    @endforeach
                        <div class="card">
                            <div class="card-body">
                                <div class="file-upload-card">
                                    @foreach($temuan->getMedia('file') as $file)
                                        <a href="{{$file->getUrl()}}" target="_blank">
                                        <div class="col-12 mb-1">
                                            @if($file->mime_type == 'application/pdf')
                                                <i class="fa fa-file-pdf fa-2x"></i>
                                            @elseif($file->mime_type == 'image/jpg' || $file->mime_type == 'image/jpeg' || $file->mime_type == 'image/png')
                                            <img src="{{$file->getUrl()}}" style="width: 30px">
                                            @else
                                                <i class="fa fa-file fa-2x"></i>
                                            @endif
                                                <p>{{$file->name}}</p>
                                        </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>

    @include('layout.footerdashboard')
@endsection
