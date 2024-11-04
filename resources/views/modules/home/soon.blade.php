@extends('layout.layout')

@section('content')
<div id="soon" style="background: url('{{ asset('assets/background/comingsoon-bg.svg') }}');background-repeat: no-repeat;width:100%;background-size: cover;z-index:20;">
    <div class="container">
        <div class="row align-items-center d-flex text-center" style="height:80vh">
            <div class="col-12 align-self-center">
                <h1 class="font-900 font-60">LAUNCHING SOON</h1>
                <div class="col-12 align-self-center">
                    <h1 class="font-900 font-60 mb-3">29.04.2024</h1>
                </div>
                <div class="col-12">
                    <p style="visibility: hidden;">/</p>
                </div>
                <div class="button-above col-12 align-self-center">
                    <button class="bg-orange font-700 font-32 p-3 rounded-3" style="border: none;" onclick="window.location='{{ url('/') }}'">Back to Home</button>
                </div>
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
