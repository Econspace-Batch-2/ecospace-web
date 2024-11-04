@extends('layout.layout')

@section('content')
<!-- HEADER -->
<img loading="lazy"  src="{{asset('assets/background/bgmentorship.svg')}}" alt="Banner mentorship" class="img-fluid w-100 header-mentorship desktop">
<img loading="lazy"  src="{{asset('assets/background/bgmentorship_mobile.svg')}}" alt="Banner mentorship"
    class="img-fluid w-100 header-tutor mobile">

<!-- FILTER-->

<div class="container bg-darkblue py-3 px-lg-3 half-up rounded-3 w-mobile-80">
    <div class="row justify-content-center gy-2 gy-lg-0">
        <div class="col-12 col-lg-5">
            <form id="searchForm" action="{{route('searchTutor')}}" method="GET">
                <div class="row gx-2 gy-1 gy-lg-0">
                    <div class="col-12">
                        <input id="tutorSearchBar" class="w-100 rounded-3 border-0 py-2 px-2 font-18" type="text"
                            name="tutorSearchBar" placeholder="Search by Mentor Name"
                            aria-label="Search by Mentor Name">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-lg-7">
            <form action="{{route('filterTutor')}}" method="GET">
                <div class="row gx-2 gy-1 gy-lg-0">
                    <div class="col-6 col-lg-3">
                        <select name="major" id="course" class="rounded-3 border-0 py-2 px-1 w-100 font-18">
                            <option value="all" >All Category</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Management" >Management</option>
                            <option value="Economic" >Economic</option>
                            <option value="Taxation" >Taxation</option>
                        </select>
                    </div>
                    <div class="col-6 col-lg-3">
                        <select name="semester" id="course" class="rounded-3 border-0 py-2 px-1 w-100 font-18">
                            <option value="all">All Topics</option>
                            <option value="Semester 1-2">Semester 1-2</option>
                            <option value="Semester 3-4">Semester 3-4</option>
                            <option value="Semester 5-6">Semester 5-6</option>
                        </select>
                    </div>
                    <div class="col-6 col-lg-3">
                        <button id="pilih" class="bg-orange text-white border-0 rounded-3 py-2 px-xxl-3 w-100 font-20"
                            type="submit">
                            Pilih
                        </button>
                    </div>
                    <div class="col-6 col-lg-3">
                        <button id="hapus" class="bg-white border-0  rounded-3 py-2 px-xxl-3 w-100 font-18"
                            formaction="{{ route('clearFilters') }}">
                            <i class="fa-solid fa-broom me-1"></i> Hapus Filter
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

</div>


<!-- DIVIDER  -->
<div class="container list-tutor-up">
    <div class="row gx-5 gy-4" id="subject-container">
        {{-- @include('layout.subjects', ['subjects' => $subjects]) --}}
    </div>

    {{-- lazy loading --}}
    <div class="row mt-5 mb-0 justify-content-center">
        <h1 class="font-32 font-800" style="width: fit-content">Raih mentor yang <span class="text-secondorange ">tepat</span>, dan raih kesuksesanmu!!</h1>
    </div>
</div>


<!-- LIST MENTORS -->

<div>
    <div class="card-section">
        <div class="container">
            <div class="row row-cols-4">

                <div class="col">
                    <div class="card position-relative">
                        <img loading="lazy"  src="{{asset('assets/mentor/hanum_2.svg')}}" class="card-img" alt="hanum">
                        <div class="card-body-overlay position-absolute top-75 start-10 translate-bottom">
                            <h5 class="card-title text-left text-white font-24 font-700">Joshua Immanuel</h5>
                            <p class="card-text text-left text-white font-14">Chief Executive of EconSpace</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-two position-relative">
                        <img loading="lazy"  src="{{asset('assets/mentor/hanum_2.svg')}}" class="card-img-top" alt="hanum">
                        <div class="card-body-overlay position-absolute top-75 start-10 translate-bottom">
                            <h5 class="card-title text-left text-black font-24 font-700">Joshua Immanuel</h5>
                            <p class="card-text text-left text-black font-14">Chief Executive of EconSpace</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card position-relative">
                        <img loading="lazy"  src="{{asset('assets/mentor/hanum_2.svg')}}" class="card-img" alt="...">
                        <div class="card-body-overlay position-absolute top-75 start-10 translate-bottom">
                            <h5 class="card-title text-left text-white font-24 font-700">Joshua Immanuel</h5>
                            <p class="card-text text-left text-white font-14">Chief Executive of EconSpace</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-two position-relative">
                        <img loading="lazy"  src="{{asset('assets/mentor/hanum_2.svg')}}" class="card-img-top" alt="...">
                        <div class="card-body-overlay position-absolute top-75 start-10 translate-bottom">
                            <h5 class="card-title text-left text-black font-24 font-700">Joshua Immanuel</h5>
                            <p class="card-text text-left text-black font-14">Chief Executive of EconSpace</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card position-relative">
                        <img loading="lazy"  src="{{asset('assets/mentor/hanum_2.svg')}}" class="card-img" alt="...">
                        <div class="card-body-overlay position-absolute top-75 start-10 translate-bottom">
                            <h5 class="card-title text-left text-white font-24 font-700">Joshua Immanuel</h5>
                            <p class="card-text text-left text-white font-14">Chief Executive of EconSpace</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-two position-relative">
                        <img loading="lazy"  src="{{asset('assets/mentor/hanum_2.svg')}}" class="card-img-top" alt="...">
                        <div class="card-body-overlay position-absolute top-75 start-10 translate-bottom">
                            <h5 class="card-title text-left text-black font-24 font-700">Joshua Immanuel</h5>
                            <p class="card-text text-left text-black font-14">Chief Executive of EconSpace</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card position-relative">
                        <img loading="lazy"  src="{{asset('assets/mentor/hanum_2.svg')}}" class="card-img" alt="...">
                        <div class="card-body-overlay position-absolute top-75 start-10 translate-bottom">
                            <h5 class="card-title text-left text-white font-24 font-700">Joshua Immanuel</h5>
                            <p class="card-text text-left text-white font-14">Chief Executive of EconSpace</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-two position-relative">
                        <img loading="lazy"  src="{{asset('assets/mentor/hanum_2.svg')}}" class="card-img-top" alt="...">
                        <div class="card-body-overlay position-absolute top-75 start-10 translate-bottom">
                            <h5 class="card-title text-left text-black font-24 font-700">Joshua Immanuel</h5>
                            <p class="card-text text-left text-black font-14">Chief Executive of EconSpace</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

</div>

<!-- TUTOR SESSION -->
<div class="container-fluid bg-milk-mobile">
        <div id="t-session"  class="container mt-0 mt-md-5 mb-5">
            <div class="row justify-content-center justify-content-md-start bg-milk rounded-4">
                {{-- gambar joshua --}}
                <div class="col-10 col-md-4 py-4 desktop">
                    <div class="emo1 full-down quarter-right">
                        <img loading="lazy"  src="{{asset('assets/home/emoji1.svg')}}" alt="" class="mx-auto d-block img-fluid img-emoji">
                    </div>
                    <div class="emo2 full-down quarter-right ">
                        <img loading="lazy"  src="{{asset('assets/home/emoji2.svg')}}" alt="" class="mx-auto d-block img-fluid img-emoji">
                    </div>
                    <div class="m-5 bg-orange border border-dark mx-auto mb-0" style="height: 180px; width:80% ;border-radius:10px">
                        <img loading="lazy"  src="{{asset('assets/mentor/joshua2.svg')}}" alt="" class="mx-auto d-block img-fluid" style="max-height: 250px">
                    </div>
                </div>
                {{-- tulisan, ada di mobile jg --}}
                <div class="col-12 col-md-7 py-4">
                    <div class="ps-3 ps-md-0">
                        <h1 class="font-black font-42 font-900">Tutor Session </h1>
                        <p class="font-26 font-400">Menyediakan Kebutuhan Belajar Akademikmu | Senantiasa menjaga kualitas pengajar dan memperluas jangkauan jenis mata kuliah.</p>
                    </div>
                    <div class="ps-3 ps-md-0 mt-3">
                        <h3 class="font-26 font-700">Keunggulan Kami:</h3>
                        <div class="d-flex align-items-center">
                            <img loading="lazy"  style="width:10%; max-width: 50px;" class="me-2" src="{{asset ('assets/home/icon3.svg')}}" alt="">
                            <div class="font-22 font-400">
                                Menyediakan <span class="font-700">Tutor berdasarkan Universitas</span>  agar Relevan <br class="desktop">Ilmu & Pembelajaran sesuai dengan kebutuhan Mahasiswa
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-2">
                            <img loading="lazy"  style="width:10%; max-width: 50px;" class="me-2" src="{{asset ('assets/home/icon3.svg')}}" alt="">
                            <div class="font-22 font-400"> <span class="font-700">
                                Spesialisasi Pengajaran Mata Kuliah</span> pada Bidang Akuntansi, <br class="desktop">Ilmu Ekonomi, Manajemen Bisnis & Keuangan.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- FOOTER -->
@section('desktopBtn') Daftar Kelas @endsection
@section('desktopTitle') Pengen Memperdalam Ilmu Akademik Kalian? @endsection
@section('desktopContent') Yuk bisa coba langsung eksplor opsi pembelajaran disini. @endsection
@section('mobileTitle1') Ingin mendapatkan ilmu di @endsection
@section('mobileTitle2') luar Akademik? @endsection
@section('mobileContent') Yuk mulai mentoring dengan expert di bidang lomba, karir, dll @endsection
@section('mobileBtn') Join Mentoring @endsection


{{-- jquery for pagination --}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>


@endsection
