@extends('layout.layout')

@section('content')


    <img   src="{{asset('assets/background/bgtutors.svg')}}" alt="Banner tutor" class="h-full w-full hidden sm:block">
    <img   src="{{asset('assets/background/bgtutors_mobile.svg')}}" alt="Banner tutor" class="h-full w-full sm:hidden block">
    
    @include('modules.tutor.components.filterCourse')

    <!-- LIST REKOMENDASI -->
    <div class="mt-5 px-10">
        <p class="text-3xl font-bold">Rekomendasi Buat Kamu</p>
        <p class="text-lg">Berbagai pilihan kelas untuk kebutuhan kamu</p>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            @include('layout.subjects', ['subjects' => $reccomendedSubjects])
        </div>
    </div>

    <!-- LIST TUTORS -->
    <div class="list-tutor-up w-full px-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10" id="subject-container">
            
    <div class="flex flex-col w-full justify-center items-center mt-8">
    <div class="w-full my-4">
        <h3 class="font-bold text-4xl text-left whasil-pencarian w-full">Hasil Pencarian</h3>
    </div>
    <div class="w-full grid place-items-center grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10" id="subject-container">
            @include('layout.subjects', ['subjects' => $subjects])
        </div>

        <!-- lazy loading -->
        <div class="row mt-3 justify-content-center">
            <button class="btn btn-danger hovered rounded-4 lazy-loading" style="width: fit-content">Load more</button>
        </div>
    </div>


    <!-- TUTOR SESSION -->
    <div class="container-fluid bg-milk-mobile">
        <div id="t-session"  class="container mt-0 mt-md-5 mb-5">
            <div class="row justify-content-center justify-content-md-start bg-milk rounded-xl">
                {{-- gambar joshua --}}
                <div class="col-10 col-md-4 py-4 desktop">
                    <!-- <div class="emo1 full-down quarter-right">
                        <img loading="lazy"  src="{{asset('assets/home/emoji1.svg')}}" alt="emoji 1" class="mx-auto d-block img-fluid img-emoji">
                    </div>
                    <div class="emo2 full-down quarter-right ">
                        <img loading="lazy"  src="{{asset('assets/home/emoji2.svg')}}" alt="emoji 2" class="mx-auto d-block img-fluid img-emoji">
                    </div> -->
                    <div class="m-5 bg-orange border border-dark mx-auto mb-0" style="height: 180px; width:80% ;border-radius:10px">
                        <img loading="lazy"  src="{{asset('assets/mentor/joshua2.svg')}}" alt="Joshua" class="mx-auto d-block img-fluid" style="max-height: 250px">
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
                            <img loading="lazy"  style="width:10%; max-width: 50px;" class="me-2" src="{{asset ('assets/home/icon3.svg')}}" alt="icon">
                            <div class="font-22 font-400">
                                Menyediakan <span class="font-700">Tutor berdasarkan Universitas</span>  agar Relevan <br class="desktop">Ilmu & Pembelajaran sesuai dengan kebutuhan Mahasiswa
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-2">
                            <img loading="lazy"  style="width:10%; max-width: 50px;" class="me-2" src="{{asset ('assets/home/icon3.svg')}}" alt="icon">
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
    @section('desktopBtn') Join Mentoring @endsection
    @section('desktopTitle') Ingin mendapatkan ilmu di luar Akademik? @endsection
    @section('desktopContent') Yuk mulai mentoring dengan expert di bidang lomba, karir, dll @endsection
    @section('mobileTitle1') Ingin mendapatkan ilmu di @endsection
    @section('mobileTitle2') luar Akademik? @endsection
    @section('mobileContent') Yuk mulai mentoring dengan expert di bidang lomba, karir, dll @endsection
    @section('mobileBtn') Join Mentoring @endsection


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
            var searchTerm = $('#tutorSearchBar').val().trim(); // Get the search term and remove leading/trailing whitespace

            $.ajax({
                url: $('#searchForm').attr('action'),
                type: $('#searchForm').attr('method'),
                data: $('#searchForm').serialize(),
                success: function(response) {
                    if (response.trim() === '') {
                        $('#hasil-pencarian').hide();
                        showNoDataMessage(); // Display "No data" message if response is empty
                    } else {
                        $('#hasil-pencarian').show();
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
                data: { page: nextPage, tutorSearchBar: searchTerm }, // Include the search term in the pagination request
                success: function(data) {
                    if (data.trim() === '') {
                        showNoDataMessage(); // Display "No data" message if response is empty
                    } else {
                        $('#subject-container').append(data); // Append new subjects
                        currentPage++; // Update current page after successful load
                        showOrHideLoadButton(); // Show or hide load button based on current page and last page
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
