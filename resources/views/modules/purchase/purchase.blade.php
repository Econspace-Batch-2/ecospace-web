@extends('layout.layout')
@section('content')
    <main class="w-full h-[100vh] flex items-center justify-center flex-col gap-20">
        @include('modules.purchase.components.progress-tracker')
        @include('modules.purchase.sections.bukti_pembayaran')
    </main>
@endsection