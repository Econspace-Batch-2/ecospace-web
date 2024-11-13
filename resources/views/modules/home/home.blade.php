@extends('layout.layout')

@section('content')

<!-- HEADER -->
<header class="container-fluid bg-img-orange px-md-5 py-md-5 pb-5">
    <div class="container align-items-center">
        <div class="row px-md-5 pt-md-5">
            <div>
                <h1 class="font-400 text-white font-64 mt-5" style="display: inline-block">Persiapkan Dirimu<br>menjadi <br class="mobile"><span class="font-900 stroke-underline auto-type"></span></h1>
            </div>
        </div>
        <div class="row px-md-5 mt-4">
            <div class="col-12">
            <p class="font-400 text-white font-30">Mendukung pengembangan kemampuan spesifik, dengan tetap<br class="desktop">
                memperluas Wawasan & Kapabilitas dalam berbagai area lain
            </p>
            </div>
        </div>

        <div class="row px-md-5 mt-4">
            <div class="col-12">
            <a target="_blank" class="btn btn-dark font-32 font-700 p-2 px-4 rounded-4" href="https://bit.ly/RegistrationTutorService">Mulai Belajar</a>
            </div>
        </div>
    </div>

</header>




<!-- SERVICE PART -->

<div class="container-fluid px-md-5 py-md-5 mt-5">
    <div class="container">
        <div class="row desktop">
            <div class="col-12">
            <h2 class="text-center font-60 font-900"><b>Belajar - Eksplorasi - <span class="text-orange">Raih Impianmu</span></b></h2>
            <p class="text-center font-32 font-400">Satu Platform untuk Semua Kebutuhan Pengembangan Dirimu</p>
            </div>
        </div>
        <div class="row mobile">
            <div class="col-12">
            <h2 class="text-center font-60 font-900"><b>Belajar - Eksplorasi<span class="text-orange font-64"><br>Raih Impianmu</span></b></h2>
            <p class="text-center font-32 font-400">Satu Platform untuk Semua <br>Kebutuhan Pengembangan Dirimu</p>
            </div>
        </div>

        <div class="desktop py-md-3 px-md-5">
            <div class="row gx-5">
                <div class="col-4">
                    <a href="{{url('/tutors')}}">
                        <div  data-aos="fade-down" data-aos-duration="1000" class="hovered">
                            <div class="bg-orange rounded-5 text-center service-title mx-auto py-2 half-down">
                                <h4 class="font-32 font-900">Academic Chamber</h4>
                            </div>
                            <div class="border border-3 border-black rounded-5 text-center box-service mx-auto px-3 ">
                                <img loading="lazy"  src="{{asset('assets/home/face1.svg')}}" alt="face icon" class="mx-auto d-block img-fluid img-service">
                                <h3 class="font-36 text-orange font-900"><b>TUTOR SERVICE</b></h3>
                                <p id="label-service" class="font-22 font-400">Perkuliahan jadi mudah bersama Expert yang <span class="font-600">membantu pembelajaran akademik</span> kalian</p>
                            </div>
                            <div class="bg-orange rounded-5 service-title d-flex flex-row mx-auto py-3 px-2 gap-3 half-up">
                                <img loading="lazy"  src="{{asset('assets/home/circle.svg')}}" alt="decorative image" class="img-fluid img-circle align-self-center">
                                <p class="font-24 font-400 mb-0">Minimal IPK 4 :) Ingin Belajar Lebih Dalam</p>
                            </div>
                        </div>
                    </a>


                </div>
                <div class="col-4">
                    <a href="{{url('/soon')}}">
                        <div data-aos="fade-down" data-aos-duration="2000" class="hovered">
                            <div class="bg-black rounded-5 text-center service-title mx-auto py-2 half-down">
                                <h4 class="font-32 font-900 text-white">Event Space</h4>
                            </div>
                            <div class="border border-3 border-black rounded-5 text-center box-service mx-auto px-3 ">
                                <img loading="lazy"  src="{{asset('assets/home/face2.svg')}}" alt="face icon" class="mx-auto d-block img-fluid img-service">
                                <h3 class="font-36 font-900"><b>BOOTCAMP</b></h3>
                                <p id="label-service" class="font-22 font-400">Belajar Ilmu Spesifik & Mendalam untuk <span class="font-600">pengembangan skill beyond kehidupan akademik</span></p>
                            </div>
                            <div class="bg-black rounded-5 service-title d-flex flex-row mx-auto py-3 px-2 gap-3 half-up">
                                <img loading="lazy"  src="{{asset('assets/home/circle.svg')}}" alt="decorative image" class="img-fluid img-circle align-self-center">
                                <p class="font-24 text-white font-400 mb-0">Never say never untuk Pembelajaran Baru</p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-4">
                    <a href="{{url('/soon')}}">
                        <div data-aos="fade-down" data-aos-duration="3000" class="hovered">
                            <div class="bg-blue rounded-5 text-center service-title mx-auto py-2 half-down">
                                <h4 class="font-32 font-900">Mentorship Hub</h4>
                            </div>
                            <div class="border border-3 border-black rounded-5 text-center box-service mx-auto ">
                                <img loading="lazy"  src="{{asset('assets/home/face3.svg')}}" alt="face icon" class="mx-auto d-block img-fluid img-service">
                                <h3 class="font-36 text-blue font-900"><b>MENTORING</b></h3>
                                <p id="label-service" class="font-22 font-400 ">Keterbatasan akses bukan menjadi tantangan lagi, tetapi kesempatan buat <span class="font-600">belajar sama orang dalam</span></p>
                            </div>
                            <div class="bg-blue rounded-5 service-title d-flex flex-row mx-auto py-3 px-2 gap-3 half-up">
                                <img loading="lazy"  src="{{asset('assets/home/circle.svg')}}" alt="decorative image" class="img-fluid img-circle align-self-center">
                                <p class="font-24 font-400 mb-0">Dapatkan Akses 1-on-1 sama Ahlinya</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>


    <!-- MOBILE VERSION -->
        <div class="mobile">
            <div class="row g-0">
            <div id="carouselService" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="width-smaller">
                        <div class="half-down bg-orange rounded-5 text-center service-title mx-auto pt-2 pb-1">
                            <a href="{{url('/tutors')}}">
                                <h4 class="font-32 font-900">Academic Chamber</h4>
                            </a>

                        </div>
                        <div class="border border-3 border-black rounded-5 text-center box-service mx-auto px-3  py-5 bg-white">
                            <img loading="lazy"  src="{{asset('assets/home/face1.svg')}}" alt="face icon" class="mx-auto d-block img-fluid img-service pt-1">
                            <h3 class="font-44 text-orange font-900">TUTOR SERVICE</h3>
                            <p class="font-24 font-400">Perkuliahan jadi mudah bersama Expert yang <span class="font-600">membantu pembelajaran akademik</span> kalian</p>
                        </div>
                        <div class="bg-orange rounded-5 service-title d-flex flex-row mx-auto py-2 px-2 gap-3 half-up">
                            <img loading="lazy"  src="{{asset('assets/home/circle.svg')}}" alt="decorative image" class="img-fluid img-circle align-self-center">
                            <p class="font-24 font-400 mb-0">Minimal IPK 4 :) Ingin Belajar Lebih Dalam</p>
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div  class="width-smaller">
                        <div class="bg-black rounded-5 text-center service-title mx-auto pt-2 pb-1 half-down">
                            <a href="{{url('/soon')}}">
                                <h4 class="font-32 font-900 text-white">Event Space</h4>
                            </a>

                        </div>
                        <div class="border border-3 border-black rounded-5 text-center box-service mx-auto px-3  py-5 bg-white">
                            <img loading="lazy"  src="{{asset('assets/home/face2.svg')}}" alt="face icon" class="mx-auto d-block img-fluid img-service pt-1">
                            <h3 class="font-44 font-900">BOOTCAMP</h3>
                            <p class="font-24 font-400">Belajar Ilmu Spesifik & Mendalam untuk <span class="font-600">pengembangan skill beyond kehidupan akademik</span></p>
                        </div>
                        <div class="bg-black rounded-5 service-title d-flex flex-row mx-auto py-2 px-2 gap-3 half-up">
                            <img loading="lazy"  src="{{asset('assets/home/circle.svg')}}" alt="decorative image" class="img-fluid img-circle align-self-center">
                            <p class="font-24 text-white font-400 mb-0">Never say never untuk Pembelajaran Baru</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                        <div class="width-smaller">
                            <div class="bg-blue rounded-5 text-center service-title mx-auto pt-2 pb-1 half-down">
                                <a href="{{url('/soon')}}">
                                    <h4 class="font-32 font-900">Mentorship Hub</h4>
                                </a>

                            </div>
                            <div class="border border-3 border-black rounded-5 text-center box-service mx-auto  py-5 bg-white px-3">
                                <img loading="lazy"  src="{{asset('assets/home/face3.svg')}}" alt="face icon" class="mx-auto d-block img-fluid img-service pt-1">
                                <h3 class="font-44 text-blue font-900">MENTORING</h3>
                                <p class="font-24 font-400">Keterbatasan akses bukan hambatan, tetapi kesempatan buat <span class="font-600">belajar sama orang dalam</span></p>
                            </div>
                            <div class="bg-blue rounded-5 service-title d-flex flex-row mx-auto py-2 px-2 gap-3 half-up">
                                <img loading="lazy"  src="{{asset('assets/home/circle.svg')}}" alt="decorative image" class="img-fluid img-circle align-self-center">
                                <p class="font-24 font-400 mb-0">Dapatkan Akses 1-on-1 sama Ahlinya</p>
                            </div>
                        </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselService" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselService" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
            </div>
        </div>

    </div>
</div>

<!-- MENTOR PART -->
<div class="container-fluid bg-black mt-5 mt-md-0">
    <div class="container">
        <div class="row">
        {{-- judul untuk desktop --}}
            <div class="col-md-4 d-flex justify-content-center flex-column">

                <div class="desktop">
                    <div class="ms-md-4 me-md-3">
                        <h3 class="font-36 text-white font-800">TEMUKAN TUTOR KULIAH & MENTOR KARIRMU</h3>
                        <p class="text-white font-20 font-400">Mengundang Talent Terbaik untuk membantu kalian menghadapi Akademik & Karirmu</p>
                    </div>
                    <div class="bg-blue d-flex flex-row ms-md-4 me-md-3 rounded-5 gap-3 mb-3 align-items-center py-2 pe-1">
                        <div class="ms-4"><h3 class="text-white font-44 font-900 mb-0">1.</h3></div>
                        <div><p class="font-20 font-400 mb-0">Persiapan bersama <span class="font-600">Ahlinya pada Mata Kuliah</span> yang dipilih</p></div>
                    </div>
                    <div class="bg-orange d-flex flex-row ms-md-4 me-md-3 rounded-5 gap-3 align-items-center py-2 pe-1">
                        <div class="ms-4"><h3 class="text-white font-44 font-900 mb-0">2.</h3></div>
                        <div><p class="font-20 font-400 mb-0">Memulai perjalanan <span class="font-600">lomba, beasiswa, karir</span> dengan Mentor</p></div>
                    </div>
                </div>

                {{-- judul untuk mobile --}}
                <div class="mobile pt-5">
                    <div class="ms-md-5">
                        <h3 class="font-46 text-white font-800" style="text-align: center">TEMUKAN TUTOR KULIAH & MENTOR KARIRMU</h3>
                        <p class="text-white font-26 font-400" style="text-align: center">Mengundang Talent Terbaik untuk membantu kalian menghadapi Akademik & Karirmu</p>
                    </div>
                    <div class="bg-blue d-flex flex-row ms-md-5 rounded-5 gap-3 mb-3 align-items-center py-2 pe-1">
                        <div class="ms-4"><h3 class="text-white font-48 font-900 mb-0">1.</h3></div>
                        <div><p class="font-26 font-400 mb-0">Persiapan bersama <span class="font-600">Ahlinya pada Mata Kuliah</span> yang dipilih</p></div>
                    </div>
                    <div class="bg-orange d-flex flex-row ms-md-5 rounded-5 gap-3 align-items-center py-2 pe-1">
                        <div class="ms-4"><h3 class="text-white font-48 font-900 mb-0">2.</h3></div>
                        <div><p class="font-26 font-400 mb-0">Memulai perjalanan <span class="font-600">lomba, beasiswa, karir</span> dengan Mentor</p></div>
                    </div>
                </div>

            </div>

        {{-- content desktop --}}
        <div class="col-md-8">
            <div class="desktop swiper sample-slider">
                <div class="swiper-wrapper tutor">
                    <div class="swiper-slide bg-red rounded-3" style="margin-left: 3%; margin-right: 3%;" >
                        <img loading="lazy"  src="{{asset('assets/mentor/raihan.svg')}}" class="img-fluid" alt="Raihan">
                    </div>
                    <div class="swiper-slide bg-blue rounded-3" style="margin-left: 3%; margin-right: 3%;">
                        <img loading="lazy"  src="{{asset('assets/mentor/hanum.svg')}}" class="img-fluid" alt="Hanum">
                    </div>
                    <div class="swiper-slide bg-orange rounded-3" style="margin-left: 3%; margin-right: 3%;">
                        <img loading="lazy"  src="{{asset('assets/mentor/evan.svg')}}" class="img-fluid" alt="Evan">
                    </div>
                    <div class="swiper-slide bg-red rounded-3" style="margin-left: 3%; margin-right: 3%;">
                        <img loading="lazy"  src="{{asset('assets/mentor/anjar.svg')}}" class="img-fluid" alt="Anjar">
                    </div>
                    <div class="swiper-slide bg-blue rounded-3" style="margin-left: 3%; margin-right: 3%;">
                        <img loading="lazy"  src="{{asset('assets/mentor/joshua.svg')}}" class="img-fluid" alt="Joshua">
                    </div>


                    <div class="swiper-slide bg-orange rounded-3" style="margin-left: 3%; margin-right: 3%;" >
                        <img loading="lazy"  src="{{asset('assets/mentor/harsyanto.svg')}}" class="img-fluid" alt="Harsyanto">
                    </div>
                    <div class="swiper-slide bg-red rounded-3" style="margin-left: 3%; margin-right: 3%;">
                        <img loading="lazy"  src="{{asset('assets/mentor/rendra.svg')}}" class="img-fluid" alt="Rendra">
                    </div>

                    <div class="swiper-slide bg-blue rounded-3" style="margin-left: 3%; margin-right: 3%;">
                        <img loading="lazy"  src="{{asset('assets/mentor/daffa.svg')}}" class="img-fluid" alt="Daffa">
                    </div>
                    <div class="swiper-slide bg-orange rounded-3" style="margin-left: 3%; margin-right: 3%;">
                        <img loading="lazy"  src="{{asset('assets/mentor/marcheline.svg')}}" class="img-fluid" alt="Marcheline">
                    </div>
                    <div class="swiper-slide bg-blue rounded-3" style="margin-left: 3%; margin-right: 3%;">
                        <img loading="lazy"  src="{{asset('assets/mentor/dewa.svg')}}" class="img-fluid" alt="Dewa">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

{{-- slider mentor untuk mobile --}}
<div class="container-fluid bg-black-half">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="mobile swiper mobile-slider mt-5">
                <div class="swiper-wrapper tutor">
                    <div class="swiper-slide bg-red rounded-3" style="margin-left: 3%; margin-right: 3%;" >
                        <img loading="lazy"  src="{{asset('assets/mentor/raihan.svg')}}" class="img-fluid" alt="Raihan">
                    </div>
                    <div class="swiper-slide bg-blue rounded-3" style="margin-left: 3%; margin-right: 3%;">
                        <img loading="lazy"  src="{{asset('assets/mentor/hanum.svg')}}" class="img-fluid" alt="Hanum">
                    </div>
                    <div class="swiper-slide bg-orange rounded-3" style="margin-left: 3%; margin-right: 3%;">
                        <img loading="lazy"  src="{{asset('assets/mentor/evan.svg')}}" class="img-fluid" alt="Evan">
                    </div>
                    <div class="swiper-slide bg-red rounded-3" style="margin-left: 3%; margin-right: 3%;">
                        <img loading="lazy"  src="{{asset('assets/mentor/anjar.svg')}}" class="img-fluid" alt="Anjar">
                    </div>
                    <div class="swiper-slide bg-blue rounded-3" style="margin-left: 3%; margin-right: 3%;">
                        <img loading="lazy"  src="{{asset('assets/mentor/joshua.svg')}}" class="img-fluid" alt="Joshua">
                    </div>


                    <div class="swiper-slide bg-orange rounded-3" style="margin-left: 3%; margin-right: 3%;" >
                        <img loading="lazy"  src="{{asset('assets/mentor/harsyanto.svg')}}" class="img-fluid" alt="Harsyanto">
                    </div>
                    <div class="swiper-slide bg-red rounded-3" style="margin-left: 3%; margin-right: 3%;">
                        <img loading="lazy"  src="{{asset('assets/mentor/rendra.svg')}}" class="img-fluid" alt="Rendra">
                    </div>
                    <div class="swiper-slide bg-blue rounded-3" style="margin-left: 3%; margin-right: 3%;">
                        <img loading="lazy"  src="{{asset('assets/mentor/daffa.svg')}}" class="img-fluid" alt="Daffa">
                    </div>
                    <div class="swiper-slide bg-orange rounded-3" style="margin-left: 3%; margin-right: 3%;">
                        <img loading="lazy"  src="{{asset('assets/mentor/marcheline.svg')}}" class="img-fluid" alt="Marcheline">
                    </div>
                    <div class="swiper-slide bg-blue rounded-3" style="margin-left: 3%; margin-right: 3%;">
                        <img loading="lazy"  src="{{asset('assets/mentor/dewa.svg')}}" class="img-fluid" alt="Dewa">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Telah Hadir + Univ logos -->
@include('modules.home.telahHadir')


<!-- POTENTIAL  -->
<div class="container-fluid px-md-5 pt-md-5 mt-5 mb-5">
    <div class="container px-md-5">
    <div class="row mb-3">
        <div class="col-12">
        <h2 class="text-center font-60 font-400">Learn Now & Claim Your Title:</h2>
        <div class="bg-black mx-auto p-2 mb-3" style="width: fit-content">
            <h1 class="text-center font-64 font-900 text-white">#Talent-Favorit-Top Company HR</h1>
        </div>
        <p class="text-center font-32 font-400">Kembangkan Potensimu sejak dini bersama Economic Space</p>
        </div>
    </div>

    <div class="row half-up-px mt-3">
        <div class="col col-6 col-md-3 div-up-emoji" data-aos="fade-down" data-aos-duration="750">
            <div class="half-down">
                <img loading="lazy"  src="{{asset('assets/home/emoji1.svg')}}" alt="emoji" class="mx-auto d-block img-fluid img-emoji">
            </div>
            <div class="bg-red border border-3 border-black rounded-5 box-potential">
                <h4 class="text-center font-32 font-700 text-white">Easy Access & <br>Widely Available</h4>
                <p class="text-center font-20 text-white font-400">Tidak ada lagi kata “Sulit” bagi Pelajar untuk mendapatkan akses belajar</p>
            </div>
        </div>

        <div class=" col col-6 col-md-3 div-up-emoji" data-aos="fade-down" data-aos-duration="1500">
            <div class="half-down">
                <img loading="lazy"  src="{{asset('assets/home/emoji2.svg')}}" alt="emoji" class="mx-auto d-block img-fluid img-emoji">
            </div>
            <div class="bg-blue border border-3 border-black rounded-5 box-potential">
                <h4 class="text-center font-32 font-700">One Stop Solution for Students</h4>
                <p class="text-center font-20 font-400">Tersedia secara lengkap dari pembelajaran akademik, skill penting, lomba, hingga karir</p>
            </div>

        </div>
        <div class="col col-6 col-md-3 div-up-emoji" data-aos="fade-down" data-aos-duration="2250">
            <div class="half-down">
                <img loading="lazy"  src="{{asset('assets/home/emoji3.svg')}}" alt="emoji" class="mx-auto d-block img-fluid img-emoji">
            </div>
            <div class="bg-mediumblue border border-3 border-black rounded-5 box-potential">
                <h4 class="text-center font-32 font-700 text-white">Your High Quality <br>Learning Partner</h4>
                <p class="text-center font-20 text-white font-400">Mengundang & bekerja sama dengan Tutor, Mentor, & Pembicara terbaik </p>
            </div>

        </div>
        <div class="col col-6 col-md-3 div-up-emoji" data-aos="fade-down" data-aos-duration="3000">
            <div class="half-down">
                <img loading="lazy"  src="{{asset('assets/home/emoji4.svg')}}" alt="emoji" class="mx-auto d-block img-fluid img-emoji">
            </div>
            <div class="bg-orange border border-3 border-black rounded-5 box-potential">
                <h4 class="text-center font-32 font-700 ">Keep it Cheap <br>& Affordable</h4>
                <p class="text-center font-20 font-400">Menjaga harga tetap terjangkau & menyediakan layanan jalur bantuan</p>
            </div>

        </div>
    </div>

    <!-- STEP BY STEP -->
    <div class="desktop mt-5 half-up-px">
        <div class="row">
        <div class="col-4" >
            <div class="d-flex flex-row gap-3">
            <div class="bg-green circle ratio ratio-1x1 font-82 font-900">
                1
            </div>
            <div>
                <h4 class="font-36 font-700">Register / Sign In</h4>
                <p class="font-26 font-400">Isi Data Diri & Gabung dalam Komunitas & Mulai Belajar</p>
            </div>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex flex-row gap-3">
            <div class="bg-green circle ratio ratio-1x1 font-82 font-900">
                2
            </div>
            <div>
                <h4 class="font-36 font-700">Pick & Enroll</h4>
                <p class="font-26 font-400">Ambil sesuai Kebutuhan Akademik/ Tujuan Karirmu</p>
            </div>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex flex-row gap-3">
            <div class="bg-green circle ratio ratio-1x1 font-82 font-900">
                3
            </div>
            <div>
                <h4 class="font-36 font-700">Make a Change</h4>
                <p class="font-26 font-400">Selesaikan Pembelajaran & Berkarya secara Nyata</p>
            </div>
            </div>
        </div>

        </div>
    </div>


    <div class="mobile swiper step-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="col-12 mx-auto">
                    <div class="d-flex flex-row gap-3">
                        <div class="bg-green circle ratio ratio-1x1 font-86 font-900">
                            1
                        </div>
                        <div>
                            <h4 class="font-44 font-700">Register / Sign In</h4>
                            <p class="font-32 font-400">Isi Data Diri & Gabung dalam Komunitas & Mulai Belajar</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="col-12 mx-auto">
                    <div class="d-flex flex-row gap-3">
                        <div class="bg-green circle ratio ratio-1x1 font-86 font-900">
                            2
                        </div>
                        <div>
                            <h4 class="font-44 font-700">Pick & Enroll</h4>
                            <p class="font-32 font-400">Ambil sesuai Kebutuhan Akademik/ Tujuan Karirmu</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="col-12 mx-auto">
                    <div class="d-flex flex-row gap-3">
                        <div class="bg-green circle ratio ratio-1x1 font-86 font-900">
                            3
                        </div>
                        <div>
                            <h4 class="font-44 font-700">Make a Change</h4>
                            <p class="font-32 font-400">Selesaikan Pembelajaran & Berkarya secara Nyata</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- CONTRIBUTION -->

<div class="container-fluid bg-img-white">
    <div class="container">
        <div class="row desktop">
            <div class="col-12">
                <div class="bg-orange mx-auto half-up mt-5" style="width: fit-content">
                <h3 class="text-center text-white font-900 font-44">Sejak 2023, Terus Memberi Kontribusi & Berdampak</h3>
                </div>

            </div>
        </div>

        <div class="row mobile mt-5">
            <div class="col-12">
                <div class="mx-auto half-up" style="width: fit-content">
                <h3 class="bg-orange text-center text-white font-400 font-38">Sejak 2023, Terus Memberi</h3>
                <h3 class="bg-orange text-center text-white font-900 font-44">Kontribusi & Berdampak</h3>
                </div>

            </div>
        </div>
    </div>

    <div class="container desktop">
        <div class="row px-md-5">
            <div class="col-4">
                <div>
                    <img loading="lazy"  src="{{asset('assets/home/contribute1.svg')}}" alt="decorative image" class="mx-auto d-block img-contribute">
                    <div class="hr-vertical">
                        <h1 class="text-center font-96 font-900 text-orange"><span id="numcounter1">250</span>+</h1>
                        <p class="text-center font-28 font-400">Total Mahasiswa dalam<br>Tutor & Mentor Session</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div>
                    <img loading="lazy"  src="{{asset('assets/home/contribute2.svg')}}" alt="decorative image" class="mx-auto d-block img-contribute">
                    <div class="hr-vertical">
                        <h1 class="text-center font-96 font-900 text-orange"><span id="numcounter2">70</span>+</h1>
                        <p class="text-center font-28 font-400">Sesi Tutor & Mentor<br>telah sukses dilakukan </p>
                    </div>

                </div>
            </div>
            <div class="col-4">
                <div>
                    <img loading="lazy"  src="{{asset('assets/home/contribute3.svg')}}" alt="decorative image" class="mx-auto d-block img-contribute">
                    <div>
                        <h1 class="text-center font-96 font-900 text-orange"><span id="numcounter3">90</span>%</h1>
                        <p class="text-center font-28 font-400">Tingkat Kepuasan<br>Penggunaan Layanan</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="mobile">
        <div class="swiper step-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="col-12 mx-auto">
                        <img loading="lazy"  src="{{asset('assets/home/contribute1.svg')}}" alt="decorative image" class="mx-auto d-block img-contribute">
                        <div class="hr-vertical">
                            <h1 class="text-center font-96 font-900 text-orange">250+</h1>
                            <p class="text-center font-28 font-400">Total Mahasiswa dalam<br>Tutor & Mentor Session</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col-12 mx-auto">
                        <img loading="lazy"  src="{{asset('assets/home/contribute2.svg')}}" alt="decorative image" class="mx-auto d-block img-contribute">
                        <div class="hr-vertical">
                            <h1 class="text-center font-96 text-orange font-900">70+</h1>
                            <p class="text-center font-28 font-400">Sesi Tutor & Mentor<br>telah sukses dilakukan </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="col-12 mx-auto">
                        <img loading="lazy"  src="{{asset('assets/home/contribute3.svg')}}" alt="decorative image" class="mx-auto d-block img-contribute">
                        <div>
                            <h1 class="text-center font-96 font-900 text-orange">90%</h1>
                            <p class="text-center font-28 font-400">Tingkat Kepuasan<br>Penggunaan Layanan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TESTIMONIAL -->
<div class="container-fluid px-md-5 py-md-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2 class="text-center font-60 font-900">Apa Kata Mereka?</h2>
            <p class="text-center font-32 font-400">Mereka sudah mencoba - Yuk <span class="text-orange font-700">Gabung dengan Ratusan Mahasiswa</span> Lainnya </p>
            </div>
        </div>
        <div class="desktop mt-3">
            <div class="row">
                <div class="col-4" data-aos="fade-down" data-aos-duration="1000">
                    <div class="border border-3 border-black rounded-4 p-4">
                        <h5 class="font-900 font-26">Belajar jadi Seru</h5>
                        <img loading="lazy"  src="{{asset('assets/testi/testi1.svg')}}" alt="testimonial picture" class="img-fluid w-100">
                        <p id="card-testimoni" class="font-20 mt-4 font-500">Wah, nggak nyangka banget deh belajar Ekonomi jadi lebih seru berkat bimbingan Kak Ali! Selain suasana yang asik, penjelasannya juga super jelas dan gampang dimengerti. Kak Ali bener-bener punya cara yang unik untuk menyampaikan materi sehingga ga bikin bosen.</p>

                        <div class="d-flex flex-row">
                            <div class="me-auto">
                            <p class="font-20 font-400"><span class="font-bold font-700">Ester Meralda</span><br>Akuntansi 23 - UNAIR</p>
                            </div>
                            <div><img loading="lazy"  src="{{asset('assets/univ/unair.svg')}}" alt="Logo Univ" class="img-univ"></div>
                        </div>
                    </div>
                </div>
                <div class="col-4" data-aos="fade-down" data-aos-duration="2000">
                    <div class="border border-3 border-blue rounded-4 p-4 d-flex flex-column">
                        <h5 class="font-900 font-26 font-900">Lebih Pede di Kelas</h5>
                        <img loading="lazy"  src="{{asset('assets/testi/testi2.svg')}}" alt="testimonial picture" class="img-fluid w-100">
                        <p id="card-testimoni" class="font-20 mt-4 font-500 ">Kelas Kak Raihan dalam akuntansi adalah petualangan seru! Kak Raihan mengajar dengan sangat baik, sabar, dan penjelasan yang apik. Latihan soalnya sangat membantu untuk persiapan UAS dan meningkatkan kepercayaan diri.

                        </p>
                        <div class="d-flex flex-row">
                            <div class="me-auto">
                                <p class="font-20 font-400"><span class="font-bold font-700">Shalima Nur Kusumastuti</span><br>Akuntansi 23 - UGM</p>
                            </div>
                            <div><img loading="lazy"  src="{{asset('assets/univ/ugm.svg')}}" alt="Logo Univ" class="img-univ"></div>
                        </div>
                    </div>
                </div>
                <div class="col-4" data-aos="fade-down" data-aos-duration="3000">
                    <div class="border border-3 border-red rounded-4 p-4">
                        <h5 class="font-900 font-26 font-900">Asyik Bareng Temen</h5>
                        <img loading="lazy"  src="{{asset('assets/testi/testi3.svg')}}" alt="testimonial picture" class="img-fluid w-100">
                        <p id="card-testimoni" class="font-20 mt-4 font-500">Belajar Akuntansi jadi seru dan menyenangkan berkat Kak Imel! Kakak ini nggak hanya enak ngajarnya, tapi juga baik banget karena mau berbagi ilmu dan sharing ke kita. Kalau ada tugas atau ada yang kurang paham, Kak Imel selalu dengan sabar membantu sampai benar-benar paham.
                        </p>

                        <div class="d-flex flex-row">
                        <div class="me-auto">
                            <p class="font-20 font-400"><span class="font-bold font-700">Nabila Putri Melati</span><br>Akuntansi 23 - UNAIR</p>
                        </div>
                        <div><img loading="lazy"  src="{{asset('assets/univ/unair.svg')}}" alt="Logo Univ" class="img-univ"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="mobile mb-5">
            <div class="row">
            <div id="carouselTesti" class="carousel slide mobile carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="border border-3 border-black rounded-4 box-testi p-4 width-smaller bg-white ">
                        <h5 class="font-900 font-28 font-900">Belajar Jadi Seru</h5>
                        <img loading="lazy"  src="{{asset('assets/testi/testi1.svg')}}" alt="testimonial picture" class="img-fluid w-100">
                        <p class="font-20 mt-4 font-500" style="height: 150px;">Wah, nggak nyangka banget deh belajar Ekonomi jadi lebih seru berkat bimbingan Kak Ali! Selain suasana yang asik, penjelasannya juga super jelas dan gampang dimengerti. Kak Ali bener-bener punya cara yang unik untuk menyampaikan materi sehingga ga bikin bosen.</p>

                        <div class="d-flex flex-row">
                            <div class="me-auto">
                            <p class="font-20 font-400"><span class="font-bold font-700">Ester Meralda</span><br>Akuntansi 23 - UNAIRR</p>
                            </div>
                            <div><img loading="lazy"  src="{{asset('assets/univ/unair.svg')}}" alt="Logo Univ" class="img-univ"></div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div class="border border-3 border-blue rounded-4 box-testi p-4 width-smaller bg-white ">
                        <h5 class="font-900 font-28 font-900">Lebih Pede di Kelas</h5>
                        <img loading="lazy"  src="{{asset('assets/testi/testi2.svg')}}" alt="testimonial picture" class="img-fluid w-100">
                        <p class="font-20 mt-4 font-500" style="height: 150px;">Kelas Kak Raihan dalam akuntansi adalah petualangan seru! Kak Raihan mengajar dengan sangat baik, sabar, dan penjelasan yang apik. Latihan soalnya sangat membantu untuk persiapan UAS dan meningkatkan kepercayaan diri.</p>

                        <div class="d-flex flex-row">
                            <div class="me-auto">
                            <p class="font-20 font-400"><span class="font-bold font-700">Shalima Nur Kusumastuti</span><br>Akuntansi 23 - UGM</p>
                            </div>
                            <div><img loading="lazy"  src="{{asset('assets/univ/ugm.svg')}}" alt="Logo Univ" class="img-univ"></div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div class="border border-3 border-red rounded-4 box-testi p-4 width-smaller bg-white ">
                        <h5 class="font-900 font-26 font-900">Asyik Bareng Temen</h5>
                        <img loading="lazy"  src="{{asset('assets/testi/testi3.svg')}}" alt="testimonial picture" class="img-fluid w-100">
                        <p class="font-20 mt-4 font-500" style="height: 150px;">Belajar Akuntansi jadi seru dan menyenangkan berkat Kak Imel! Kakak ini nggak hanya enak ngajarnya, tapi juga baik banget karena mau berbagi ilmu dan sharing ke kita. Kalau ada tugas atau ada yang kurang paham, Kak Imel selalu dengan sabar membantu sampai benar-benar paham.</p>

                        <div class="d-flex flex-row">
                            <div class="me-auto">
                            <p class="font-20 font-400"><span class="font-bold font-700">Nabila Putri Melati</span><br>Akuntansi 23 - UNAIR</p>
                            </div>
                            <div><img loading="lazy"  src="{{asset('assets/univ/unair.svg')}}" alt="Logo Univ" class="img-univ"></div>
                        </div>

                    </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTesti" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselTesti" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- CLOSING -->
<!--desktop-->
<div class="desktop">
    <div class="container-fluid bg-img-blue-square mt-5" >
        <div class="px-md-5 py-md-5" style="background: url('assets/background/assetbgblue.svg');background-repeat: no-repeat;background-size: cover;z-index:0px;padding-top:0px;padding-bottom:100px;height:100%">
            <div class="wrapper">
                <div class="p"></div>
                <div class="img-area">
                <a href="https://www.linkedin.com/company/economic-space/mycompany/" target="_blank" aria-label="go to economic space linkedin">
                    <img loading="lazy"  src="{{ asset('assets/home/sheet1.svg') }}" class="img img-box box-4 hovered" alt="linkedin">
                </a>
                <a href="https://chat.whatsapp.com/IDInUpM1avX7ogb091PLnW" target="_blank" aria-label="economic space whatsapp number">
                    <img loading="lazy"  src="{{ asset('assets/home/sheet2.svg') }}" class="img img-box box-5 hovered" alt="whatsapp">
                </a>
                <img loading="lazy"  src="{{ asset('assets/home/sheet3.svg') }}" class="img img-box box-6 hovered" alt="website">


                <a href="https://www.linkedin.com/company/economic-space/mycompany/" target="_blank" aria-label="go to economic space linkedin">
                    <img loading="lazy"  src="{{ asset('assets/home/folder1.svg') }}" class="img img-box box-7 hovered" alt="linkedin">
                </a>
                <a href="https://chat.whatsapp.com/IDInUpM1avX7ogb091PLnW" target="_blank" aria-label="economic space whatsapp number">
                    <img loading="lazy"  src="{{ asset('assets/home/folder2.svg') }}" class="img img-box box-8 hovered" alt="whatsapp">
                </a>
                <img loading="lazy"  src="{{ asset('assets/home/folder3.svg') }}" class="img img-box box-9 hovered" alt="decorative image">
                <img loading="lazy"  src="{{ asset('assets/home/arrow.svg') }}" class="img img-box box-10 hovered" alt="decorative image">
                <img loading="lazy"  src="{{ asset('assets/home/arrow.svg') }}" class="img img-box box-11 hovered" alt="decorative image">
                <img loading="lazy"  src="{{ asset('assets/home/arrow.svg') }}" class="img img-box box-12 hovered" alt="decorative image">
                <img loading="lazy"  src="{{ asset('assets/home/ppt2.svg') }}" class="img img-box box-1 hovered" alt="decorative image">
                <img loading="lazy"  src="{{ asset('assets/home/ppt3.svg') }}" class="img img-box box-2 hovered" alt="decorative image">
                <img loading="lazy"  src="{{ asset('assets/home/ppt1.svg') }}" class="img img-box box-3 hovered" alt="decorative image">
                </div>
            </div>
            <div class="overlay-text">
                <div class="col-10 ">
                    <h5 class="font-36 text-orange "><span class="font-family font-900 bg-white text-center"> Memberikan Layanan</span> </h5>
                    <h5 class="font-36 text-orange "><span class="font-family font-900  bg-white text-center">End to End untuk</span> </h5>
                    <h5 class="font-36 text-orange "><span class="font-family font-900 bg-white text-center">Pengembangan Dirimu</span></h5>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="desktop">
    <div class="container">
        <div class="box-orange d-flex justify-content-between">
            <div class="box-wa-1 flex-fill">
                <h3 class="text-white font-700 font-36 mb-0 mt-2">Punya pertanyaan lebih lanjut?</h3>
            </div>
            <div class="box-wa justify-content-center hovered">
                <img loading="lazy"  class="img-fluid icon-wa" src="{{asset('assets/socmed/wa.svg')}}" alt="icon whatsapp">
                <div class="font-400 font-24">
                    <a href="https://chat.whatsapp.com/IDInUpM1avX7ogb091PLnW" target="_blank" aria-label="economic space whatsapp number">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>


{{-- KOTAK BIRU YANG MOBILE --}}
<div class="mobile">
    <div class="container-fluid bg-img-blue-square justify-content-center" >
        <div class="px-md-5 py-md-5" style="background: url('');background-repeat: no-repeat;background-size: cover;z-index:0px;padding-top:0px;padding-bottom:100px;height:100%">
            <div class="overlay-text">
                <h5 class="text-orange "><span class="font-48 font-family font-900 bg-white text-center"> Memberikan Layanan</span> </h5>
                <h5 class="text-orange "><span class="font-48 font-family font-900  bg-white text-center">End to End untuk</span> </h5>
                <h5 class="text-orange "><span class="font-48 font-family font-900 bg-white text-center">Pengembangan Dirimu</span></h5>
            </div>
            <div class="row">
                <div class="col align-self-center justify-content-center cards mt-3">
                    <div class="card card-1">
                        <img loading="lazy"  src="{{ asset('assets/home/icon2.svg') }}" class="icon-1 m-1" alt="whatsapp icon" style="width: 50px;">
                        <h3 class="font-900 font-32 mt-1 text-right">WhatsApp Community</h3>
                        <p class="font-18 text-right mt-1">Open Space Community to learn insightful thing about College & Professional Life</p>
                        <button class="btn btn-danger font-700 font-24   mt-1"><a href="https://chat.whatsapp.com/IDInUpM1avX7ogb091PLnW" target="_blank" class="text-white" aria-label="economic space whatsapp number">Join Now</a></button>
                    </div>
                    <div class="card card-2">
                        <img loading="lazy"  src="{{ asset('assets/home/icon1.svg') }}" class="icon-2 m-1" alt="whatsapp icon" style="width: 50px;">
                        <h3 class="font-900 font-32 mt-1 text-right" style="text-align: right;">LinkedIn Career & Competition</h3>
                        <p class="font-18 text-right mt-1" style="text-align: right;">Exclusive information on Career, Scholarship, Competition, etc. No More Miss Out on Opportunities</p>
                        <button class="btn btn-danger font-700 font-24 mt-1"><a href="https://www.linkedin.com/company/economic-space/mycompany/" target="_blank" class="text-white" aria-label="go to economic space linkedin">Discover Now</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- kotak oren --}}

    <div class="mobile">
        <div class="container">
            <div class="box-orange">
                <div class="text-center">
                    <p class="font-36 font-700 mb-1">Punya pertanyaan lebih lanjut?</p>
                </div>
                <div class="box-wa justify-content-center mb-1 mt-0">
                    <img loading="lazy"  class="icon-wa" src="{{asset('assets/socmed/wa.svg')}}" alt="whatsapp icon">
                    <a target="_blank" href="https://chat.whatsapp.com/IDInUpM1avX7ogb091PLnW" aria-label="economic space whatsapp number">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- FOOTER --}}

@section('desktopBtn') Daftar Kelas @endsection
@section('desktopTitle') Siap Buat Belajar bersama Economic Space? @endsection
@section('desktopContent') Langsung Daftarkan diri & Persiapkan Masa Depanmu @endsection
@section('mobileTitle1') Siap Buat Belajar bersama @endsection
@section('mobileTitle2') Economic Space? @endsection
@section('mobileContent') Langsung Daftarkan diri & <br>Persiapkan Masa Depanmu @endsection
@section('mobileBtn') Daftar Kelas @endsection


@endsection

