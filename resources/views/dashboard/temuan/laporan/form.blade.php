@extends('layout.main')

@section('content')
    @include('layout.headerdashboard')
    <!-- # Content -->
    @livewire('laporan.form', ['menutemuans' => $menutemuans, "pertanyaan_temuans" => $pertanyaan_temuans ])

    @include('layout.footerdashboard')
@endsection
