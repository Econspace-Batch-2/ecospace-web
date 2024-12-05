<!-- FILTER-->
<div class="w-full flex justify-center mt-4 lg:mt-0">
    <div class="w-11/12 lg:w-fit flex flex-col xl:flex-row justify-center items-center gap-4 py-3 px-4 h-fit bg-blue-950 rounded-xl justify-center">

        <!-- Search Form (First Row on lg and below) -->
        <div class="w-full flex">
            <form id="searchForm" action="{{ route('searchTutor') }}" method="GET" class="w-full flex">
                <input id="tutorSearchBar" class="w-full rounded-md py-2 px-2 text-md" type="text" name="tutorSearchBar"
                    placeholder="Cari Nama Mata Kuliah" aria-label="Cari Nama Mata Kuliah">
            </form>
        </div>

        <!-- Filter Form (Second Row on lg and below) -->
        <div class="w-full lg:w-auto xl:min-w-fit">
            <form action="{{ route('filterTutor') }}" method="GET">
                <div class="flex flex-col items-center justify-center md:flex-row gap-2 md:gap-4">
                    <!-- University Filter -->
                    <div class="w-full md:min-w-fit relative">
                        <select name="univ" id="univ" class="w-full rounded-lg py-2 px-3 appearance-none pr-10">
                            <option value="all" style="background-color: white;" @if(old('univ', $univ) == 'all') selected @endif>
                                Semua Universitas
                            </option>
                            <option value="UNAIR" style="background-color: white;" @if(old('univ', $univ) == 'UNAIR') selected @endif>
                                Universitas Airlangga
                            </option>
                            <option value="UGM" style="background-color: white;" @if(old('univ', $univ) == 'UGM') selected @endif>
                                Universitas Gadjah Mada
                            </option>
                        </select>
                        <span class="absolute right-2 top-1/2 -translate-y-1/2">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.96924 9L12.9692 15L18.9692 9" stroke="#15172A" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>

                    <!-- Major Filter -->
                    <div class="w-full md:min-w-fit relative">
                        <select name="major" id="major" class="w-full rounded-lg py-2 px-3 appearance-none pr-16">
                            <option value="all" style="background-color: white;" @if(old('major', $major) == 'all') selected @endif>
                                Semua Jurusan
                            </option>
                            <option value="Accounting" style="background-color: white;" @if(old('major', $major) == 'Accounting') selected @endif>
                                Accounting
                            </option>
                            <option value="Management" style="background-color: white;" @if(old('major', $major) == 'Management') selected @endif>
                                Management
                            </option>
                            <option value="Economic" style="background-color: white;" @if(old('major', $major) == 'Economic') selected @endif>
                                Economic
                            </option>
                            <option value="Taxation" style="background-color: white;" @if(old('major', $major) == 'Taxation') selected @endif>
                                Taxation
                            </option>
                        </select>
                        <span class="absolute right-2 top-1/2 -translate-y-1/2">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.96924 9L12.9692 15L18.9692 9" stroke="#15172A" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>

                    <!-- Semester Filter -->
                    <div class="w-full md:min-w-fit relative">
                        <select name="semester" id="semester" class="w-full rounded-lg py-2 px-3 appearance-none pr-16">
                            <option value="all" style="background-color: white;" @if(old('semester', $semester) == 'all') selected @endif>
                                Semua Semester
                            </option>
                            <option value="Semester 1-2" style="background-color: white;" @if(old('semester', $semester) == 'Semester 1-2') selected @endif>
                                Semester 1-2
                            </option>
                            <option value="Semester 3-4" style="background-color: white;" @if(old('semester', $semester) == 'Semester 3-4') selected @endif>
                                Semester 3-4
                            </option>
                            <option value="Semester 5-6" style="background-color: white;" @if(old('semester', $semester) == 'Semester 5-6') selected @endif>
                                Semester 5-6
                            </option>
                        </select>
                        <span class="absolute right-2 top-1/2 -translate-y-1/2">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.96924 9L12.9692 15L18.9692 9" stroke="#15172A" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                </div>
            </form>
        </div>

        <!-- Button Row (Third Row on lg and below) -->
        <div class="flex flex-col md:flex-row gap-2 w-full items-center justify-center">
            <button id="pilih" class="bg-orange text-white rounded-lg py-2 px-6 w-full md:w-auto" type="submit">
                Pilih
            </button>
            <form action="{{ route('clearFilters') }}" method="GET" class="w-full md:w-auto">
                <button id="hapus" class="bg-white border-none rounded-lg py-2 px-6 w-full md:w-auto"
                    type="submit">
                    <i class="fa-solid fa-broom me-1"></i> Hapus Filter
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selects = document.querySelectorAll('select');

        selects.forEach(select => {
            if (select.value !== 'all') {
                select.style.backgroundColor = 'orange';
            }
            select.addEventListener('change', function () {
                select.style.backgroundColor = select.value === 'all' ? 'white' : 'orange';
                select.style.fontWeight = select.value === 'all' ? '400' : '600';
            });
        });
    });
    document.getElementById('pilih').addEventListener('click', function () {
        document.querySelector('form[action="{{ route('filterTutor') }}"]').submit();
    });
</script>
