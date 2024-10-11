@extends('layout.navbar')

@section('content')

    {{-- banner --}}
    <div class="desktop container-fluid mt-3">
        <div class="container">
            <img loading="lazy"  src="{{ asset('assets/tutorDetail/course_banner.svg') }}" alt="course banner" class="img-fluid w-100 rounded-4">
        </div>
    </div>

    {{-- intro tutor --}}
    <div class="container-fluid mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 align-self-center">
                    <p class="font-21 font-400 mb-2"><a href="{{route('viewTutors')}}">Academy</a> > {{$subject->subject_title}}</p>

                    {{-- khusus mobile, peletakan gambarnya beda --}}
                    <img loading="lazy"  src="{{asset('assets/courseInside/'.$subject->subject_image)}}" alt="{{$subject->subject_image}}" class="img-fluid w-100 rounded-4 mobile mb-2">

                    {{-- info spt judul dll yg sebelah kiri --}}
                    <h1 class="font-44 font-700">{{$subject->subject_title}}</h1>

                    {{-- TAG --}}
                    <div class="d-flex justify-content-left gap-3 mt-md-3">
                        @foreach(json_decode($subject->subject_majors) as $major)
                        <p class="bg-milk py-1 px-2 rounded-3 font-18 font-400 mb-2 mb-md-3">{{$major}}</p>
                        @endforeach
                    </div>

                    {{-- CATEGORY AND SEMESTER --}}
                    <div class="d-flex justify-content-left gap-3 mb-md-2" >
                        <p class="font-18 font-400"><i class="fa-solid fa-folder me-2"></i> {{$subject->subject_category}}</p>
                        <p class="font-18 font-400"><i class="fa-solid fa-gem me-2"></i> {{$subject->subject_semester}}</p>
                    </div>
                    <a target="_blank" class="bg-orange rounded-3 border-0 font-30 font-500 text-white px-5 py-2" href="https://bit.ly/RegistrationTutorService">
                        Mulai Belajar
                    </a>
                </div>
                {{-- gambar desktop yg sebelah kanan --}}
                <div class="desktop col-md-6">
                    <img loading="lazy"  src="{{asset('assets/courseInside/'.$subject->subject_image)}}" alt="{{$subject->subject_image}}" class="img-fluid h-100 rounded-4 w-100">
                </div>


            </div>
        </div>
    </div>

    {{-- tutor content --}}
    <div class="container-fluid mt-4">
        <div class="container">
            {{-- garis pembatas --}}
            <div class="row mb-md-3">
                <hr style="border: none; border-bottom: 3px solid grey;">
            </div>

            <div class="row gx-5">

                {{-- sebelah kiri --}}
                <div class="col-12 col-md-8">
                    <p class="font-21 font-400 text-justify">{{$subject->subject_description}}</p>
                    <h2 class="font-40 font-900 text-orange mt-md-4">Tutor Material Discussion</h2>
                    <p class="font-21 font-700 text-justify mb-0">Referensi Pembelajaran:</p>
                    <ul style="list-style-position: inside; padding-left: 0;">
                        @foreach(json_decode($subject->subject_references) as $reference)
                        <li class="font-21 font-400 text-justify">{{$reference}}</li>
                        @endforeach
                    </ul>


                    {{-- accordion --}}
                    <div class="accordion mt-4" id="accordionPanelsStayOpenExample">
                        @foreach($subject->topics as $index => $topic)
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="panelsStayOpen-heading{{$topic->topic_number}}">
                                    <button class="accordion-button font-24 font-500 {{ $index === 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{$topic->topic_number}}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="panelsStayOpen-collapse{{$topic->topic_number}}">
                                        {{$topic->topic_number}}. {{$topic->topic_title}}
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapse{{$topic->topic_number}}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" aria-labelledby="panelsStayOpen-heading{{$topic->topic_number}}">
                                    <div class="accordion-body p-0 px-4 pt-3">
                                        <ol style="list-style-position: inside; padding-left: 0;" type="a">
                                            @foreach(json_decode($topic->topic_content) as $content)
                                                <li class="font-22 font-400">{{$content}}</li>
                                            @endforeach
                                        </ol>
                                        <p class="font-22 font-400"><span class="font-700">Objective: </span>{{$topic->topic_objective}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div>
                        {{-- card pertama --}}
                        <div class="border border-2 rounded-4 pt-3 px-4">
                            <h3 class="font-36 font-900">Tutor Background</h3>
                            <p class="font-26 font-400">Asal Universitas Tutor:</p>

                            <div class="d-lg-flex justify-content-left gap-lg-3 flex-wrap">
                                @php $counter = 0 @endphp
                                @foreach(json_decode($subject->subject_univ) as $univ)
                                    @if($counter < 4)
                                        <img loading="lazy"  src="{{ asset('assets/univ/'.$univ) }}" class="img-fluid img-univ" alt="logo univ" >
                                    @endif
                                    @php $counter++ @endphp
                                @endforeach
                            </div>
                            <button class="font-400 font-22 bg-lightblue border-0 rounded-3 px-3 py-2 mt-3" onclick="redirectTo('https://docs.google.com/spreadsheets/d/1rQ0ZhU6Ykdu4lrhhKMoHInTBQI2ywafQ0PnWIxZG-9w/edit?usp=sharing')">Click Here for Tutor Details</button>
                            <h5 class="font-26 font-700 mt-4">Additional Information</h5>
                            <ul style="padding-left: 0;" class="ms-3">
                                <li class="font-20 font-400 text-justify">Bagi Mahasiswa dari Universitas selain dari List diatas tetap dapat <span class="font-20 font-700 text-red">"BELAJAR BERSAMA DISINI"</span></li>
                                <li class="font-20 font-400 text-justify">Customer dapat memilih Tutor dari <span class="font-700">Asal Univ / Nama Tutor</span></li>
                            </ul>
                        </div>

                        {{-- card kedua --}}
                        <div class="border border-2 rounded-4 mt-4 py-3 px-4">
                            <h3 class="font-900 font-36 text-orange">Benefit for You</h3>
                            <div class="d-flex justify-content-left gap-2">
                                <img loading="lazy"  src="{{ asset('assets/tutorDetail/benefit1.svg') }}" class="img-fluid img-benefit" alt="benefit icon" >
                                <p class="font-20 font-500 align-self-center">1. </p>
                                <p class="font-20 font-500 align-self-center mt-2" style="height: 100%">Expert Tutor yang telah diseleksi dengan kapabilitias pengetahuan yang baik</p>
                            </div>
                            <div class="d-flex justify-content-left gap-2 mt-2">
                                <img loading="lazy"  src="{{ asset('assets/tutorDetail/benefit2.svg') }}" class="img-fluid img-benefit" alt="benefit icon" >
                                <p class="font-20 font-500 align-self-center">2. </p>
                                <p class="font-20 font-500 align-self-center mt-2" style="height: 100%">Sistem Mahasiswa to Mahasiswa, sehingga bahasan materi menjadi lebih tepat & relatable</p>
                            </div>
                            <div class="d-flex justify-content-left gap-2 mt-2">
                                <img loading="lazy"  src="{{ asset('assets/tutorDetail/benefit3.svg') }}" class="img-fluid img-benefit" alt="benefit icon" >
                                <p class="font-20 font-500 align-self-center">3. </p>
                                <p class="font-20 font-500 align-self-center mt-2" style="height: 100%">Konsultasi Materi / Tugas dan Persiapan Ujian menjadi lebih mudah bersama Tutor</p>
                            </div>
                            <div class="bg-lightblue rounded-4 pt-3 pb-1 mt-2 ps-4">
                                <p class="font-28 font-700 mb-1">1x Tutor Session:</p>
                                <ul style="list-style-position: inside; padding-left: 0;">
                                <li class="font-22 font-500">90 Minutes (Online / Onsite)</li>
                                <li class="font-22 font-500">Akses pada PPT Modul Subtopik</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                            <img loading="lazy"  src="{{ asset('assets/home/face4.svg') }}" style="height: 100px" class="img-fluid" alt="face icon">
                            <p class="font-28 font-700 mt-2 text-red">Fresh Launch Kit</p>
                            <h5 class="font-48 font-900">Rp 280.000,-</h5>
                            <p class="font-400 font-24">Dari Harga Awal Rp 300.000</p>
                            <ul class="text-start check ps-5 mt-2 mb-4">
                                <li class="font-20 font-500">Pengguna baru Tutor Service</li>
                                <li class="font-20 font-500">Pembelian Paket A (1-3 orang)</li>
                            </ul>
                            <a target="_blank" class="border-0 rounded-5 bg-red text-white px-5 py-2 font-36 font-500 w-100" href="https://bit.ly/RegistrationTutorService">Book Now</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="half-up-30">
                            <div class="bg-orange width-80 half-down rounded-4 text-center text-white py-3 mx-auto font-24 font-600">TERFAVORIT</div>
                            <div class="bg-lightblue rounded-4 text-center py-5 px-4">
                                <img loading="lazy"  src="{{ asset('assets/home/face5.svg') }}" style="height: 120px" class="img-fluid" alt="face icon">
                                <p class="font-28 font-700 text-orange mt-2">Smart Saver Bundle</p>
                                <h5 class="font-48 font-900">Rp 800.000,-</h5>
                                <p class="font-400 font-24">Dari Harga Awal Rp 850.000</p>
                                <ul class="text-start check check-center ps-5 mt-2 mb-4">
                                    <li class="font-20 font-500">Minimum pembelian 5 sesi</li>
                                    <li class="font-20 font-500">Pembelian Paket B (4-5 orang)</li>
                                </ul>
                                <a target="_blank" class="border-0 rounded-5 bg-orange text-white px-5 py-2 font-36 font-500 w-100 mt-3" href="https://bit.ly/RegistrationTutorService">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="bg-milk rounded-4 text-center py-5 px-4">
                            <img loading="lazy"  src="{{ asset('assets/home/face6.svg') }}" style="height: 100px" class="img-fluid" alt="face icon">
                            <p class="font-28 font-700 text-red mt-2">Premier Loyalty Package</p>
                            <h5 class="font-48 font-900">Rp 360.000,-</h5>
                            <p class="font-400 font-24">Dari Harga Awal Rp 390.000</p>
                            <ul class="text-start check ps-5 mt-2 mb-4">
                                <li class="font-20 font-500">Telah melakukan pembelian ≥ 5 sesi</li>
                                <li class="font-20 font-500">Pembelian Paket C (6-8 orang)</li>
                            </ul>
                            <a target="_blank" class="border-0 rounded-5 bg-red text-white px-5 py-2 font-36 font-500 w-100 mt-3" href="https://bit.ly/RegistrationTutorService">Book Now</a>
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
                            <img loading="lazy"  src="{{ asset('assets/home/face4.svg') }}" style="height: 80px;" class="img-fluid" alt="face icon">
                            <p class="font-30 font-700 mt-2 text-red">Fresh Launch Kit</p>
                            <h5 class="font-48 font-900">Rp 280.000,-</h5>
                            <p class="font-400 font-26">Dari Harga Awal Rp 300.000</p>
                            <ul class="text-start check ps-3 mt-2 mb-4">
                                <li class="font-22 font-500">Pengguna baru Tutor Service</li>
                                <li class="font-22 font-500">Pembelian Paket A (1-3 orang)</li>
                            </ul>
                            <a target="_blank" class="border-0 rounded-5 bg-red text-white px-5 py-2 font-30 font-500 w-100" href="https://bit.ly/RegistrationTutorService">Book Now</a>
                        </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="4000">
                            <div class="bg-lightblue rounded-4 text-center py-5 px-4 width-smaller">
                                <img loading="lazy"  src="{{ asset('assets/home/face5.svg') }}" style="height: 80px;" class="img-fluid" alt="face icon">
                                <p class="font-30 font-700 text-orange mt-2">Smart Saver Bundle</p>
                                <h5 class="font-48 font-900">Rp 800.000,-</h5>
                                <p class="font-400 font-26">Dari Harga Awal Rp 850.000</p>
                                <ul class="text-start check check-center ps-3 mt-2 mb-4">
                                    <li class="font-22 font-500">Minimum pembelian 5 sesi</li>
                                    <li class="font-22 font-500">Pembelian Paket B (4-5 orang)</li>
                                </ul>
                                <a target="_blank" class="border-0 rounded-5 bg-orange text-white px-5 py-2 font-30 font-500 w-100 mt-3" href="https://bit.ly/RegistrationTutorService">Book Now</a>
                            </div>
                      </div>
                      <div class="carousel-item" data-bs-interval="4000">
                        <div class="bg-milk rounded-4 text-center py-5 px-4 width-smaller">
                            <img loading="lazy"  src="{{ asset('assets/home/face6.svg') }}" style="height: 80px;" class="img-fluid" alt="face icon">
                            <p class="font-30 font-700 text-red mt-2">Premier Loyalty Package</p>
                            <h5 class="font-48 font-900">Rp 360.000,-</h5>
                            <p class="font-400 font-26">Dari Harga Awal Rp 390.000</p>
                            <ul class="text-start check ps-3 mt-2 mb-4">
                                <li class="font-22 font-500">Minimum pembelian 5 sesi</li>
                                <li class="font-22 font-500">Pembelian Paket C (6-8 orang)</li>
                            </ul>
                            <a target="_blank" class="border-0 rounded-5 bg-red text-white px-5 py-2 font-30 font-500 w-100 mt-3" href="https://bit.ly/RegistrationTutorService">Book Now</a>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPromotion" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPromotion" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>


        </div>
    </div>

    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5 mt-md-0">
                <div class="col-12">
                    <h4 class="font-34 font-700">Kamu juga mungkin suka...</h4>
                </div>
            </div>
            <div class="row gx-5 gb-4 mt-1">
                @include('layout.subjects', ['subjects' => $other_subjects])
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
