@extends('layout.layout')

@section('content')

    {{-- banner --}}
    <div class="desktop container-fluid mt-3 mb-5">
        <div class="container">
            <img loading="lazy"  src="{{ asset('assets/mentorDetail/mentor_banner.svg') }}" alt="course banner" class="img-fluid w-100 rounded-4">
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">

                {{-- profile --}}
                <div class="col-12 col-md-8">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{asset('assets/mentorDetail/profile.svg')}}" alt="" class="w-75 img-fluid">
                        </div>
                        <div class="col-8">
                            <h1 class="font-48 font-700">Delvin Theodorus Hansell</h1>
                            <h3 class="font-32 font-400">Venture Fund Intern
                                Mandiri Capital Indonesia</h3>
                            <div class="d-flex justify-content-left gap-3 mt-md-3">
                                <p class="bg-milk py-1 px-2 rounded-3 font-18 font-400 mb-2 mb-md-3">FCMG</p>
                                <p class="bg-milk py-1 px-2 rounded-3 font-18 font-400 mb-2 mb-md-3">FCMG</p>
                                <img src="{{asset('assets/socmed/linkedin.svg')}}" alt="linkedin icon" class="img-fluid" style="height: 30px">
                            </div>
                        </div>
                        <a class="bg-orange rounded-3 border-0 font-24 font-500 text-white px-5 py-2 mobile" href="">Jadwalkan Mentoring</a>
                    </div>
                </div>

                {{-- journey --}}
                <div class="col-4 desktop">
                    <p class="font-20 font-400">Photo of My Journey</p>
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{asset('assets/mentorDetail/mentor_journey.svg')}}" class="d-block w-75 mx-auto" alt="...">
                          </div>
                          {{-- <div class="carousel-item">
                            <img src="{{asset('assets/mentorDetail/mentor_journey.svg')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('assets/mentorDetail/mentor_journey.svg')}}" class="d-block w-100" alt="...">
                          </div> --}}
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="container">
            {{-- garis pembatas --}}
            <div class="row mb-md-3">
                <hr style="border: none; border-bottom: 3px solid grey;">
            </div>
            <div class="row">
                {{-- experiences --}}
                <div class="col-12 col-md-8">

                    <h3 class="font-32 font-700">Experiences</h3>
                    <ul class="timeline">

                        <li class="timeline-inverted">
                          {{-- badge --}}
                          <div class="timeline-badge warning"><i class="fa-solid fa-briefcase" style="color: #ffffff;"></i></div>
                          <div class="timeline-panel">
                            <div class="timeline-heading d-flex justify-content-between">
                              <h4 class="font-24 font-600">Customer Facing Intern (ULIP Supply Chain)</h4>
                              <p class="font-20 font-600 text-orange">Sep 2022 - Feb 2023</p>
                            </div>
                            <div class="timeline-body">
                              <p>Unilever Indonesia</p>
                            </div>
                          </div>
                        </li>

                        <li class="timeline-inverted">
                            {{-- badge --}}
                            <div class="timeline-badge warning"><i class="fa-solid fa-briefcase" style="color: #ffffff;"></i></div>
                            <div class="timeline-panel">
                              <div class="timeline-heading d-flex justify-content-between">
                                <h4 class="font-24 font-600">Customer Facing Intern (ULIP Supply Chain)</h4>
                                <p class="font-20 font-600 text-orange">Sep 2022 - Feb 2023</p>
                              </div>
                              <div class="timeline-body">
                                <p>Unilever Indonesia</p>
                              </div>
                            </div>
                          </li>
                    </ul>

                    <h3 class="font-32 font-700">Education</h3>
                    <ul class="timeline">

                        <li class="timeline-inverted">
                            {{-- badge --}}
                            <div class="timeline-badge warning"><i class="fa-solid fa-briefcase" style="color: #ffffff;"></i></div>
                            <div class="timeline-panel">
                              <div class="timeline-heading d-flex justify-content-between">
                                <h4 class="font-24 font-600">Customer Facing Intern (ULIP Supply Chain)</h4>
                                <p class="font-20 font-600 text-orange">Sep 2022 - Feb 2023</p>
                              </div>
                              <div class="timeline-body">
                                <p>Unilever Indonesia</p>
                              </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-12 mobile">
                    <p class="font-20 font-400">Photo of My Journey</p>
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div> <!-- Adjusted width to 50px -->
                                    <img src="{{asset('assets/mentorDetail/mentor_journey.svg')}}" class="" alt="..." style="width: 100px">
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>

                {{-- topic of mentoring --}}
                <div class="col-12 col-md-4">
                    <h4 class="font-24 font-700">Preference Topic of Mentoring:</h4>
                    <div class="border-preference-topic p-2 mb-4">
                        <h5 class="font-20 font-600 text-mediumblue">1. Strategi Bisnis dan Pengembangan</h5>
                        <p class="font-16 font-400">Fokus pada pengembangan strategi bisnis dan langkah-langkah untuk pertumbuhan bisnis yang berkelanjutan.</p>
                    </div>
                    <div class="border-preference-topic p-2 mb-4">
                        <h5 class="font-20 font-600 text-orange">2. Kepemimpinan dan Manajemen Bisnis</h5>
                        <p class="font-16 font-400">Menyediakan panduan dalam pengambilan keputusan strategis untuk mencapai tujuan bisnis.</p>
                    </div>
                    <div class="border-preference-topic p-2 mb-4">
                        <h5 class="font-20 font-600 text-darkgreen">3. Pengembangan Karier & Entrepreneurship</h5>
                        <p class="font-16 font-400">Mendukung individu dalam merencanakan dan mengelola karier bisnis bagi mereka yang tertarik memulai bisnis sendiri</p>
                    </div>
                    <a class="bg-orange rounded-3 border-0 font-24 font-500 text-white py-2 text-center" href="" style="display: block">Jadwalkan Mentoring</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <h5 class="font-32 font-600">Similar mentor</h5>
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
