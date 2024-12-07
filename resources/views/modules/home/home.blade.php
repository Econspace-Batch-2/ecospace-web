@extends('layout.layout')

@section('content')

    <!-- HEADER -->
    @include('modules.home.sections.header')
    <!-- SERVICE PART -->

    @include('modules.home.sections.service')

    <!-- MENTOR PART -->
    @include('modules.home.sections.temukanTutor')

    <!-- Telah Hadir + Univ logos -->
    @include('modules.home.sections.telahHadir')

    @include('modules.home.sections.testimony')

    @include('modules.home.sections.bottom')
    <!-- FOOTER -->

{{-- @section('desktopBtn')
    Daftar Kelas
@endsection
@section('desktopTitle')
    Siap Buat Belajar bersama Economic Space?
@endsection
@section('desktopContent')
    Langsung Daftarkan diri & Persiapkan Masa Depanmu
@endsection
@section('mobileTitle1')
    Siap Buat Belajar bersama
@endsection
@section('mobileTitle2')
    Economic Space?
@endsection
@section('mobileContent')
    Langsung Daftarkan diri & <br>Persiapkan Masa Depanmu
@endsection
@section('mobileBtn')
    Daftar Kelas
@endsection --}}


@endsection
