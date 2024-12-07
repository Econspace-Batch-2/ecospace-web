@extends('layout.layout')

@section('content')
    @include('modules.tutor_detail.sections.header')

    {{-- tutor content --}}
    @include('modules.tutor_detail.sections.tutor_content')

{{-- PAKET PROMOSI --}}

<div class="container-fluid mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="font-700 font-34">Pilihan Paket Promosi</h4>
            </div>
        </div>

            {{-- desktop --}}
            <div class="desktop">
                <div class="row mt-5 gb-0">
                    <div class="col-12 col-md-4">
                        <div class="bg-milk rounded-4 text-center py-5 px-4">
                            <img loading="lazy" src="{{ asset('assets/home/face4.svg') }}" style="height: 100px"
                                class="img-fluid" alt="face icon">
                            <p class="font-28 font-700 mt-2 text-red">Fresh Launch Kit</p>
                            <h5 class="font-48 font-900">Rp 280.000,-</h5>
                            <p class="font-400 font-24">Dari Harga Awal Rp 300.000</p>
                            <ul class="text-start check ps-5 mt-2 mb-4">
                                <li class="font-20 font-500">Pengguna baru Tutor Service</li>
                                <li class="font-20 font-500">Pembelian Paket A (1-3 orang)</li>
                            </ul>
                            <a target="_blank"
                                class="border-0 rounded-5 bg-red text-white px-5 py-2 font-36 font-500 w-100"
                                href="https://bit.ly/RegistrationTutorService">Book Now</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="half-up-30">
                            <div
                                class="bg-orange width-80 half-down rounded-4 text-center text-white py-3 mx-auto font-24 font-600">
                                TERFAVORIT</div>
                            <div class="bg-lightblue rounded-4 text-center py-5 px-4">
                                <img loading="lazy" src="{{ asset('assets/home/face5.svg') }}" style="height: 120px"
                                    class="img-fluid" alt="face icon">
                                <p class="font-28 font-700 text-orange mt-2">Smart Saver Bundle</p>
                                <h5 class="font-48 font-900">Rp 800.000,-</h5>
                                <p class="font-400 font-24">Dari Harga Awal Rp 850.000</p>
                                <ul class="text-start check check-center ps-5 mt-2 mb-4">
                                    <li class="font-20 font-500">Minimum pembelian 5 sesi</li>
                                    <li class="font-20 font-500">Pembelian Paket B (4-5 orang)</li>
                                </ul>
                                <a target="_blank"
                                    class="border-0 rounded-5 bg-orange text-white px-5 py-2 font-36 font-500 w-100 mt-3"
                                    href="https://bit.ly/RegistrationTutorService">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="bg-milk rounded-4 text-center py-5 px-4">
                            <img loading="lazy" src="{{ asset('assets/home/face6.svg') }}" style="height: 100px"
                                class="img-fluid" alt="face icon">
                            <p class="font-28 font-700 text-red mt-2">Premier Loyalty Package</p>
                            <h5 class="font-48 font-900">Rp 360.000,-</h5>
                            <p class="font-400 font-24">Dari Harga Awal Rp 390.000</p>
                            <ul class="text-start check ps-5 mt-2 mb-4">
                                <li class="font-20 font-500">Telah melakukan pembelian ≥ 5 sesi</li>
                                <li class="font-20 font-500">Pembelian Paket C (6-8 orang)</li>
                            </ul>
                            <a target="_blank"
                                class="border-0 rounded-5 bg-red text-white px-5 py-2 font-36 font-500 w-100 mt-3"
                                href="https://bit.ly/RegistrationTutorService">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>


        {{-- mobile --}}

            <div class="mobile">
                <div id="carouselPromotion" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="4000">
                            <div class="bg-milk rounded-4 text-center py-5 px-4 width-smaller">
                                <img loading="lazy" src="{{ asset('assets/home/face4.svg') }}" style="height: 80px;"
                                    class="img-fluid" alt="face icon">
                                <p class="font-30 font-700 mt-2 text-red">Fresh Launch Kit</p>
                                <h5 class="font-48 font-900">Rp 280.000,-</h5>
                                <p class="font-400 font-26">Dari Harga Awal Rp 300.000</p>
                                <ul class="text-start check ps-3 mt-2 mb-4">
                                    <li class="font-22 font-500">Pengguna baru Tutor Service</li>
                                    <li class="font-22 font-500">Pembelian Paket A (1-3 orang)</li>
                                </ul>
                                <a target="_blank"
                                    class="border-0 rounded-5 bg-red text-white px-5 py-2 font-30 font-500 w-100"
                                    href="https://bit.ly/RegistrationTutorService">Book Now</a>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <div class="bg-lightblue rounded-4 text-center py-5 px-4 width-smaller">
                                <img loading="lazy" src="{{ asset('assets/home/face5.svg') }}" style="height: 80px;"
                                    class="img-fluid" alt="face icon">
                                <p class="font-30 font-700 text-orange mt-2">Smart Saver Bundle</p>
                                <h5 class="font-48 font-900">Rp 800.000,-</h5>
                                <p class="font-400 font-26">Dari Harga Awal Rp 850.000</p>
                                <ul class="text-start check check-center ps-3 mt-2 mb-4">
                                    <li class="font-22 font-500">Minimum pembelian 5 sesi</li>
                                    <li class="font-22 font-500">Pembelian Paket B (4-5 orang)</li>
                                </ul>
                                <a target="_blank"
                                    class="border-0 rounded-5 bg-orange text-white px-5 py-2 font-30 font-500 w-100 mt-3"
                                    href="https://bit.ly/RegistrationTutorService">Book Now</a>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="4000">
                            <div class="bg-milk rounded-4 text-center py-5 px-4 width-smaller">
                                <img loading="lazy" src="{{ asset('assets/home/face6.svg') }}" style="height: 80px;"
                                    class="img-fluid" alt="face icon">
                                <p class="font-30 font-700 text-red mt-2">Premier Loyalty Package</p>
                                <h5 class="font-48 font-900">Rp 360.000,-</h5>
                                <p class="font-400 font-26">Dari Harga Awal Rp 390.000</p>
                                <ul class="text-start check ps-3 mt-2 mb-4">
                                    <li class="font-22 font-500">Minimum pembelian 5 sesi</li>
                                    <li class="font-22 font-500">Pembelian Paket C (6-8 orang)</li>
                                </ul>
                                <a target="_blank"
                                    class="border-0 rounded-5 bg-red text-white px-5 py-2 font-30 font-500 w-100 mt-3"
                                    href="https://bit.ly/RegistrationTutorService">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPromotion"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPromotion"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>


    </div>
</div>



    <!-- FOOTER -->
@section('desktopBtn')
    Join Mentoring
@endsection
@section('desktopTitle')
    Ingin mendapatkan ilmu di luar Akademik?
@endsection
@section('desktopContent')
    Yuk mulai mentoring dengan expert di bidang lomba, karir, dll
@endsection
@section('mobileTitle1')
    Ingin mendapatkan ilmu di
@endsection
@section('mobileTitle2')
    luar Akademik?
@endsection
@section('mobileContent')
    Yuk mulai mentoring dengan expert di bidang lomba, karir, dll
@endsection
@section('mobileBtn')
    Join Mentoring
@endsection


@endsection
