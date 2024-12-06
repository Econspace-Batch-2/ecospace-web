<!-- FILTER-->
<div class="w-full flex justify-center mt-4 lg:mt-0">
    <div class="lg:w-fit flex flex-col xl:flex-row justify-center items-center gap-4 p-4 pb-1 h-fit bg-blue-950 rounded-xl -translate-y-10">
        <!-- Search Form (First Row on lg and below) -->
        <div class="w-full flex">
            <form id="searchForm" action="{{ route('searchTutor') }}" method="GET" class="w-full flex">
                <input id="tutorSearchBar" class="input w-full bg-white" type="text" name="tutorSearchBar"
                    placeholder="Cari Nama Mata Kuliah" aria-label="Cari Nama Mata Kuliah">
            </form>
        </div>

        <!-- Filter Form (Second Row on lg and below) -->
        <div class="w-full lg:w-auto xl:min-w-fit">
            <form action="{{ route('filterTutor') }}" method="GET">
                <div class="flex flex-col items-center justify-center md:flex-row gap-2 md:gap-4">
                    <!-- University Filter -->
                    <div class="w-full md:min-w-fit relative">
                        <select name="univ" id="univ" class="select">
                            @php
                                $universities = [
                                    'all' => 'Semua Universitas',
                                    'UNAIR' => 'Universitas Airlangga',
                                    'UGM' => 'Universitas Gadjah Mada'
                                ];
                            @endphp

                            @foreach($universities as $value => $label)
                                <option value="{{ $value }}" style="background-color: white;" @if(old('univ', $univ) == $value) selected @endif>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Major Filter -->
                    <div class="w-full md:min-w-fit relative">
                        <select name="major" id="major" class="select">
                            @php
                                $majors = [
                                    'all' => 'Semua Jurusan',
                                    'Accounting' => 'Accounting',
                                    'Management' => 'Management',
                                    'Economic' => 'Economic',
                                    'Taxation' => 'Taxation'
                                ];
                            @endphp

                            @foreach($majors as $value => $label)
                                <option value="{{ $value }}" style="background-color: white;" @if(old('major', $major) == $value) selected @endif>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Semester Filter -->
                    <div class="w-full md:min-w-fit relative">
                        <select name="semester" id="semester" class="select">
                            @php
                                $semesters = [
                                    'all' => 'Semua Semester',
                                    'Semester 1-2' => 'Semester 1-2',
                                    'Semester 3-4' => 'Semester 3-4',
                                    'Semester 5-6' => 'Semester 5-6'
                                ];
                            @endphp

                            @foreach($semesters as $value => $label)
                                <option value="{{ $value }}" style="background-color: white;" @if(old('semester', $semester) == $value) selected @endif>
                                    {{ $label }}
                                </option>
                            @endforeach
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

        <div class="flex w-full gap-2 h-fit">
            <button id="pilih" class="btn bg-orange-500 hover:bg-orange-600 px-4" type="submit">
                Pilih
            </button>
            <form action="{{ route('clearFilters') }}" method="GET" class="w-full md:w-auto flex">
                <button id="hapus" class="btn bg-white text-black hover:bg-gray-400"
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
                select.style.fontWeight = select.value === 'all' ? '400' : '600';
            });
        });
    });
    document.getElementById('pilih').addEventListener('click', function () {
        document.querySelector('form[action="{{ route('filterTutor') }}"]').submit();
    });
</script>
