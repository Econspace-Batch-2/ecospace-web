<!-- FILTER-->
<div class="w-full flex -mt-8 justify-center">
    <div class="flex justify-center items-center gap-4 py-3 px-4 min-w-fit h-fit bg-blue-950 rounded-xl">
        <!-- Search Form -->
        <div class="w-full max-w-56">
            <form id="searchForm" action="{{route('searchTutor')}}" method="GET">
                <input id="tutorSearchBar" class="w-full rounded-md py-2 px-2 text-md" type="text" name="tutorSearchBar"
                    placeholder="Cari Nama Mata Kuliah" aria-label="Cari Nama Mata Kuliah">
            </form>
        </div>

        <!-- Filter Form -->
        <div class="w-full">
            <form action="{{route('filterTutor')}}" method="GET">
                <div class="flex gap-4">
                    <div class="min-w-fit relative">
                        <select name="univ" id="course"
                            class="relative rounded-lg py-2 px-3 text-md appearance-none pr-10">
                            <option value="all" style="background-color: white;" @if(old('univ', $univ) == 'all') @endif>
                                Semua Universitas</option>
                            <option value="UNAIR" style="background-color: white;" @if(old('univ', $univ) == 'UNAIR')
                            selected @endif>Universitas Airlangga</option>
                            <option value="UGM" style="background-color: white;" @if(old('univ', $univ) == 'UGM')
                            selected @endif>Universitas Gadjah Mada</option>
                        </select>
                        <span class="absolute right-2 top-1/2 -translate-y-1/2">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.96924 9L12.9692 15L18.9692 9" stroke="#15172A" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                    <div class="min-w-fit relative">
                        <select name="major" id="course" class="rounded-lg py-2 px-3 text-md appearance-none pr-16">
                            <option value="all" style="background-color: white;" @if(old('major', $major) == 'all')
                            selected @endif>Semua Jurusan</option>
                            <option value="Accounting" style="background-color: white;" @if(old('major', $major) == 'Accounting') selected @endif>Accounting</option>
                            <option value="Management" style="background-color: white;" @if(old('major', $major) == 'Management') selected @endif>Management</option>
                            <option value="Economic" style="background-color: white;" @if(old('major', $major) == 'Economic') selected @endif>Economic</option>
                            <option value="Taxation" style="background-color: white;" @if(old('major', $major) == 'Taxation') selected @endif>Taxation</option>
                        </select>
                        <span class="absolute right-2 top-1/2 -translate-y-1/2">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.96924 9L12.9692 15L18.9692 9" stroke="#15172A" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                    <div class="min-w-fit relative">
                        <select name="semester" id="course" class="rounded-lg py-2 px-3 text-md appearance-none pr-16">
                            <option value="all" style="background-color: white;" @if(old('semester', $semester) == 'all')
                            selected @endif>Semua Semester</option>
                            <option value="Semester 1-2" style="background-color: white;" @if(old('semester', $semester) == 'Semester 1-2') selected @endif>Semester 1-2</option>
                            <option value="Semester 3-4" style="background-color: white;" @if(old('semester', $semester) == 'Semester 3-4') selected @endif>Semester 3-4</option>
                            <option value="Semester 5-6" style="background-color: white;" @if(old('semester', $semester) == 'Semester 5-6') selected @endif>Semester 5-6</option>
                        </select>
                        <span class="absolute right-2 top-1/2 -translate-y-1/2">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.96924 9L12.9692 15L18.9692 9" stroke="#15172A" stroke-width="1"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                    <div class="min-w-fit">
                        <button id="pilih" class="bg-orange text-white border-none rounded-lg py-2 px-6 w-full text-md"
                            type="submit">
                            Pilih
                        </button>
                    </div>
                    <div class="min-w-fit">
                        <button id="hapus" class="bg-white border-none rounded-lg py-2 px-6 w-full text-md"
                            formaction="{{ route('clearFilters') }}">
                            <i class="fa-solid fa-broom me-1"></i> Hapus Filter
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selects = document.querySelectorAll('#course');

        selects.forEach(select => {
            // Set initial background color based on selected option
            if (select.value !== 'all') {
                select.style.backgroundColor = 'orange';
            }

            // Update background color when an option is selected
            select.addEventListener('change', function () {
                select.style.backgroundColor = select.value === 'all' ? 'white' : 'orange';
                select.style.fontWeight = select.value === 'all' ? '400' : '600'
            });
        });
    });
</script>