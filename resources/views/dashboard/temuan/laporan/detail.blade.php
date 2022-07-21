@extends('layout.main')

@section('content')
    @include('layout.headerdashboard')
    <!-- # Content -->
    @livewire('laporan.detail',['temuan' => $temuan])
    @include('layout.footerdashboard')
@endsection
