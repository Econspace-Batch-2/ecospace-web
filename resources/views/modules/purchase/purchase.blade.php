@extends('layout.layout')
@section('content')
    <main class="w-full min-h-[100vh] py-10 flex items-center justify-center flex-col gap-20">
        @include('modules.purchase.components.progress-tracker')
        @include('modules.purchase.sections.appointlet')
    </main>
@endsection