@extends('layout.layout')

@section('content')
    <img src="{{ asset('assets/background/bgtutors.svg') }}" alt="Banner tutor" class="w-full hidden sm:block">
    <img src="{{ asset('assets/background/bgtutors_mobile.svg') }}" alt="Banner tutor" class="w-full sm:hidden">

    @include('modules.tutor.components.filter_course')

    <!-- LIST REKOMENDASI -->
    @if (request('tutorSearchBar') || request('univ') || request('major') || request('semester'))
    @else
        <div class="mt-5 px-10 text-black">
            <p class="text-3xl font-bold">Rekomendasi Buat Kamu</p>
            <p class="text-base mb-5">Berbagai pilihan kelas untuk kebutuhan kamu</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="w-full relative rounded-xl hover:scale-[0.98] duration-700 ease-in-out">
                    <a href="https://bit.ly/PaketsampeUTS" class="relative">
                        <div class="relative w-full h-full overflow-hidden shadow-2xl rounded-xl">
                            <img src="{{ asset('assets/tutorImage/UNAIR_cardbg.png') }}" alt="UNAIR Image"
                                class="object-cover w-full h-full">
                        </div>
                        <h5 class="text-base xl:text-lg text-center p-2 rounded-xl font-bold bg-white absolute top-8 left-4">
                            Paket Sampai UTS
                        </h5>
                    </a>
                </div>
                @include('modules.tutor.components.subjects', ['subjects' => $recommendedSubjects])
            </div>
        </div>
    @endif


    <!-- LIST TUTORS -->
    <div class="list-tutor-up w-full px-10 text-black">
        <div class="flex flex-col w-full justify-center items-center mt-8">
            <div class="w-full my-4">
                <h3 class="font-bold text-3xl text-left whasil-pencarian w-full" onclick="console.log('semangat uts!')">
                    {{-- If there is queries, then show text --}}
                    @if (request('tutorSearchBar') || request('univ') || request('major') || request('semester'))
                        Hasil Pencarian
                    @else
                        Semua Kelas
                    @endif
                </h3>
            </div>
            <div class="w-full grid place-items-center grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10"
                id="subject-container">
                <div class="w-full relative rounded-xl hover:scale-[0.98] duration-700 ease-in-out">
                    <a href="https://bit.ly/PaketsampeUTS" class="relative">
                        <div class="relative w-full h-full overflow-hidden shadow-2xl rounded-xl">
                            <img src="{{ asset('assets/tutorImage/UNAIR_cardbg.png') }}" alt="UNAIR Image"
                                class="object-cover w-full h-full">
                        </div>
                        <h5
                            class="text-base xl:text-lg text-center p-2 rounded-xl font-bold bg-white absolute top-8 left-4">
                            Paket Sampai UTS
                        </h5>
                    </a>
                </div>
                @include('modules.tutor.components.subjects', ['subjects' => $subjects])
            </div>

            {{-- If Take === Subject Count then dont show --}}
            @if ($subjects->count() < $subjects->total())
                <div class="lazy-loading w-full flex justify-center mt-3">
                    <button id="load-more" class="btn btn-danger hovered rounded-4">Load more</button>
                </div>
            @endif
        </div>
    </div>

    <script>
        // if load more clicked, then concat ?take=10
        document.getElementById('load-more').addEventListener('click', function () {
            let url = new URL(window.location.href);
            let take = url.searchParams.get('take') || 10;
            url.searchParams.set('take', parseInt(take) + 10);

            window.location.href = url;
        });
    </script>

    @include('modules.tutor.sections.tutor_session')
@endsection

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

<!-- jQuery for pagination -->
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
        $('#subject-container').html('<div class="w-full relative rounded-xl hover:scale-[0.98] duration-700 ease-in-out shadow-2xl h-96">' +
            '<a href="https://bit.ly/PaketsampeUTS" class="relative block h-full">' +
            '<div class="relative w-full h-full overflow-hidden rounded-xl">' +
            '<img src="{{ asset("assets/tutorImage/UNAIR_cardbg.png") }}" alt="Card Background" class="object-cover w-full h-full">' +
            '<div class="absolute bottom-0 left-0 right-0 bg-white bg-opacity-90 p-4 h-48 overflow-hidden">' +
            '<h5 class="text-lg font-bold mb-2">Paket Sampai UTS</h5>' +
            '<p class="text-sm line-clamp-5">' +
            'Paket Sampai UTS adalah program tutoring intensif dengan <em>jadwal tetap setiap minggu</em> ' +
            'hingga tiba waktu ujian tengah semester. ' +
            'Sobat Economates ngga perlu bingung lagi buat memahami materi perkuliahan dan bisa mempersiapkan ' +
            'diri menghadapi UTS dengan lebih optimal bersama Paket Sampai UTS. ' +
            '</p>' +
            '</div>' +
            '</div>' +
            '<h5 class="text-base xl:text-lg text-center p-2 rounded-xl font-bold bg-white absolute top-8 left-4">' +
            'Paket Sampai UTS</h5>' +
            '</a>' +
            '</div>' +
            '<p class="text-center">No other data to display</p>');
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
            success: function (response) {
                if (response.trim() === '') {
                    $('#hasil-pencarian').hide();
                    showNoDataMessage(); // Display "No data" message if response is empty
                } else {
                    $('#hasil-pencarian').show();
                    // First clear the container but keep the Paket UTS card
                    var utsCard = $('#subject-container > div:first-child').clone();
                    $('#subject-container').html('').append(utsCard).append(response);
                    currentPage = 1; // Reset current page to 1 after search/filter
                    showOrHideLoadButton(); // Show or hide load button based on current page and last page
                }
            }
        });
    }

    // Event listener for live search
    $(document).ready(function () {
        $('#tutorSearchBar').on('input', function () {
            handleSearch();
        });

        $('#tutorSearchBar').on('keydown', function (event) {
            if (event.which === 13) {
                event.preventDefault();
            }
        });
    });

    // Event listener for lazy loading
    $('.lazy-loading').click(function () {
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
            success: function (data) {
                if (data.trim() === '') {
                    showNoDataMessage(); // Display "No data" message if response is empty
                } else {
                    $('#subject-container').append(data); // Changed to append rather than prepend to maintain order
                    currentPage++; // Update current page after successful load
                    showOrHideLoadButton(); // Show or hide load button based on current page and last page
                }
            }
        });
    });

    // Initial setup
    $(document).ready(function () {
        showOrHideLoadButton(); // Show or hide load button based on current page and last page
    });
</script>