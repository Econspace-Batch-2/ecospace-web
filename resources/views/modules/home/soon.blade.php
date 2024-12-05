@extends('layout.layout')
@section('content')
<div id="soon" class="bg-cover bg-no-repeat w-full z-20" style="background-image: url('{{ asset('assets/background/comingsoon-bg.svg') }}');">
    <div class="container mx-auto">
        <div class="flex items-center justify-center text-center h-[80vh]">
            <div class="w-full">
                <h1 class="font-bold text-6xl">LAUNCHING SOON</h1>
                <div class="w-full">
                    <h1 class="font-bold text-6xl mb-3">29.04.2024</h1>
                </div>
                <div class="w-full">
                    <p class="invisible">/</p>
                </div>
                <div class="w-full">

                    <button class="btn btn-lg text-white bg-orange-500 hover:bg-orange-600" onclick="window.location='{{ url('/') }}'">Back to Home</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
@section('desktopBtn') Join Mentoring @endsection
@section('desktopTitle') Ingin mendapatkan ilmu di luar Akademik? @endsection
@section('desktopContent') Yuk mulai mentoring dengan expert di bidang lomba, karir, dll @endsection
@section('mobileTitle1') Ingin mendapatkan ilmu di @endsection
@section('mobileTitle2') luar Akademik? @endsection
@section('mobileContent') Yuk mulai mentoring dengan expert di bidang lomba, karir, dll @endsection
@section('mobileBtn') Join Mentoring @endsection
@endsection
