@extends('layout.layout')

@section('content')
    <!-- HEADER -->
    <img src="{{ asset('assets/background/bgtutors.svg') }}" alt="Banner tutor" class="img-fluid w-100 header-tutor desktop">
    <img src="{{ asset('assets/background/bgtutors_mobile.svg') }}" alt="Banner tutor"
        class="img-fluid w-100 header-tutor mobile">

    <!-- FILTER-->

    <div class="container bg-darkblue py-3 px-lg-3 half-up rounded-3 w-mobile-80">
        <div class="row justify-content-center gy-2 gy-lg-0">
            <div class="col-12 col-lg-5">
                <form id="searchForm" action="{{ route('searchTutor') }}" method="GET">
                    <div class="row gx-2 gy-1 gy-lg-0">
                        <div class="col-12">
                            <input id="tutorSearchBar" class="w-100 rounded-3 border-0 py-2 px-2 font-18" type="text"
                                name="tutorSearchBar" placeholder="Cari Nama Mata Kuliah"
                                aria-label="Cari Nama Mata Kuliah">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-7">
                <form action="{{ route('filterTutor') }}" method="GET">
                    <div class="row gx-2 gy-1 gy-lg-0">
                        <div class="col-6 col-lg-3">
                            <select name="major" id="course" class="rounded-3 border-0 py-2 px-1 w-100 font-18">
                                <option value="all" @if (old('major', $major) == 'all') selected @endif>Semua Jurusan
                                </option>
                                <option value="Accounting" @if (old('major', $major) == 'Accounting') selected @endif>Accounting
                                </option>
                                <option value="Management" @if (old('major', $major) == 'Management') selected @endif>Management
                                </option>
                                <option value="Economic" @if (old('major', $major) == 'Economic') selected @endif>Economic</option>
                                <option value="Taxation" @if (old('major', $major) == 'Taxation') selected @endif>Taxation</option>
                            </select>
                        </div>
                        <div class="col-6 col-lg-3">
                            <select name="semester" id="course" class="rounded-3 border-0 py-2 px-1 w-100 font-18">
                                <option value="all" @if (old('semester', $semester) == 'all') selected @endif>Semua Semester
                                </option>
                                <option value="Semester 1-2" @if (old('semester', $semester) == 'Semester 1-2') selected @endif>Semester 1-2
                                </option>
                                <option value="Semester 3-4" @if (old('semester', $semester) == 'Semester 3-4') selected @endif>Semester 3-4
                                </option>
                                <option value="Semester 5-6" @if (old('semester', $semester) == 'Semester 5-6') selected @endif>Semester 5-6
                                </option>
                            </select>
                        </div>
                        <div class="col-6 col-lg-3">
                            <button id="pilih"
                                class="bg-orange text-white border-0 rounded-3 py-2 px-xxl-3 w-100 font-20" type="submit">
                                Pilih
                            </button>
                        </div>
                        <div class="col-6 col-lg-3">
                            <button id="hapus" class="bg-white border-0  rounded-3 py-2 px-xxl-3 w-100 font-20"
                                formaction="{{ route('clearFilters') }}">
                                <i class="fa-solid fa-broom me-1"></i> Hapus Filter
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </div>


    <!-- LIST TUTORS -->
    <div class="container list-tutor-up">
        <div class="row gx-5 gy-4" id="subject-container">
            @include('layout.subjects', ['subjects' => $subjects])
        </div>

        {{-- lazy loading --}}
        <div class="row mt-3 justify-content-center">
            <button class="btn btn-danger hovered rounded-4 lazy-loading" style="width: fit-content">Load more</button>
        </div>
    </div>


    <!-- TUTOR SESSION -->

    <div class="flex xl:flex-row flex-col justify-center items-center gap-10 w-full md:px-[120px] px-10 py-20">
        {{-- gambar joshua --}}
        <div
            class="col-span-1 m-5 bg-[#FC8025] border-2 my-auto border-[#1A1A1A] max-h-[278px] w-[290px] md:w-[426px] relative">
            <img loading="lazy" src="{{ asset('assets/mentor/joshua2.svg') }}" alt="Joshua"
                class="mx-auto h-[368px] -translate-y-[85px] md:-translate-y-[92px] overflow-visible">
            <img loading="lazy" src="{{ asset('assets/home/emoji1.svg') }}" alt="emoji 1"
                class="absolute top-[20%] -left-[5%] size-[81px]">
            <img loading="lazy" src="{{ asset('assets/home/emoji2.svg') }}" alt="emoji 1"
                class="absolute -top-[15%] right-[10%] md:right-[15%] size-[76px]">
        </div>
        {{-- tulisan, ada di mobile jg --}}
        <div class="flex flex-col gap-6">
            <div class="ps-3 ps-md-0">
                <h1 class="text-[#1A1A1A] max-xl:text-center text-[24px] md:text-[40px] font-extrabold">Upgrade Diri dengan
                    Mengikuti Event!</h1>
                <p class="text-[16px] max-xl:mt-2 max-xl:text-justify md:text-[24px]">Ikuti seminar, webinar, bootcamp, dan
                    kegiatan lainnya yang bikin<br class="max-xl:hidden" /> kamu makin
                    siap hadapi dunia profesional.</p>
            </div>
            <div class="space-y-3">
                <h3 class="text-[20px] md:text-[24px] font-bold">Keunggulan Kami:</h3>
                <div class="flex items-center gap-3 md:gap-5">
                    <img loading="lazy" class="w-[10%] max-md:w-[45px] max-w-[50px]"
                        src="{{ asset('assets/home/icon3.svg') }}" alt="icon">
                    <div class="text-[12px] md:text-[18px] max-xl:text-justify relative">
                        <img loading="lazy" class="w-[12px] md:w-[18px] top-[6px] absolute"
                            src="{{ asset('assets/home/calendar.svg') }}" alt="icon">
                        <span class="font-semibold pl-6">Ragam Acara Menarik:</span> Temukan acara dengan topik - topik
                        terkini,
                        seperti ekonomi <br class="max-xl:hidden" /> digital, manajemen bisnis, investasi, dan lainnya
                    </div>
                </div>
                <div class="flex items-center gap-3 md:gap-5">
                    <img loading="lazy" class="w-[10%] max-md:w-[45px] max-w-[50px]"
                        src="{{ asset('assets/home/icon3.svg') }}" alt="icon">
                    <div class="text-[12px] md:text-[18px] max-xl:text-justify relative">
                        <img loading="lazy" class="w-[12px] md:w-[18px] top-[6px] absolute"
                            src="{{ asset('assets/home/graduation-cap.svg') }}" alt="icon">
                        <span class="font-semibold pl-6">Pembicara Ahli:</span> Belajar langsung dari para ahli dan praktisi
                        industri yang <br class="max-xl:hidden" /> berpengalaman.
                    </div>
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


{{-- jquery for pagination --}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

<script>
    var currentPage = {{ $subjects->currentPage() }};
    var lastPage = {{ $subjects->lastPage() }};

    // Function to show or hide load button based on current page and last page
    function showOrHideLoadButton() {
        if (currentPage >= lastPage) {
            $('.lazy-loading').hide(); // Hide the button if there are no more pages
        } else {
            $('.lazy-loading').show(); // Show the button if there are more pages
        }
    }

    // Function to display "No data" message
    function showNoDataMessage() {
        $('#subject-container').html('<p class="text-center">No data to display</p>');
        $('.lazy-loading').hide(); // Hide the load button
    }

    // Function to handle live search and filter
    function handleSearch() {
        var searchTerm = $('#tutorSearchBar').val()
            .trim(); // Get the search term and remove leading/trailing whitespace

        $.ajax({
            url: $('#searchForm').attr('action'),
            type: $('#searchForm').attr('method'),
            data: $('#searchForm').serialize(),
            success: function(response) {
                if (response.trim() === '') {
                    showNoDataMessage(); // Display "No data" message if response is empty
                } else {
                    $('#subject-container').html(response); // Update subject container with response
                    currentPage = 1; // Reset current page to 1 after search/filter
                    showOrHideLoadButton(); // Show or hide load button based on current page and last page
                }
            }
        });
    }

    // Event listener for live search
    $(document).ready(function() {
        $('#tutorSearchBar').on('input', function() {
            handleSearch();
        });

        $('#tutorSearchBar').on('keydown', function(event) {
            if (event.which === 13) {
                event.preventDefault();
            }
        });
    });

    // Event listener for lazy loading
    $('.lazy-loading').click(function() {
        if (currentPage >= lastPage) {
            $(this).hide(); // Hide the button if there are no more pages
            return;
        }

        var searchTerm = $('#tutorSearchBar').val().trim(); // Get the current search term
        var nextPage = currentPage + 1;

        $.ajax({
            url: "{{ route('viewTutors') }}",
            type: "GET",
            data: {
                page: nextPage,
                tutorSearchBar: searchTerm
            }, // Include the search term in the pagination request
            success: function(data) {
                if (data.trim() === '') {
                    showNoDataMessage(); // Display "No data" message if response is empty
                } else {
                    $('#subject-container').append(data); // Append new subjects
                    currentPage++; // Update current page after successful load
                    showOrHideLoadButton
                        (); // Show or hide load button based on current page and last page
                }
            }
        });
    });

    // Initial setup
    $(document).ready(function() {
        showOrHideLoadButton(); // Show or hide load button based on current page and last page
    });
</script>


@endsection
