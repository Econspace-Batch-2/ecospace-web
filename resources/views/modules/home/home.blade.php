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
@endsection
