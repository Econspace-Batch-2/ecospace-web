<!-- FILTER-->
<div class="w-full flex justify-center mt-4 lg:mt-0 px-10">
    <form
        action="{{ route('viewTutors') }}"
        method="GET"
        class="w-full flex flex-wrap justify-center items-center gap-4 p-4 h-fit bg-blue-950 rounded-xl -translate-y-10">
        <div class="flex flex-wrap gap-2 items-center grow">
            <input id="tutorSearchBar" class="input bg-white max-w-[300px]" type="text" name="tutorSearchBar"
                placeholder="Cari Nama Mata Kuliah" aria-label="Cari Nama Mata Kuliah"
                value="{{ request('tutorSearchBar') }}">
            <select 
                value="{{ request('univ') }}"
                name="univ" id="univ" class="select">
                @php
                    $universities = [
                        'all' => 'Semua Universitas',
                        'UNAIR' => 'Universitas Airlangga',
                        'UGM' => 'Universitas Gadjah Mada',
                    ];
                @endphp

                @foreach ($universities as $value => $label)
                    <option value="{{ $value }}" style="background-color: white;"
                        @if (old('univ', $univ) == $value) selected @endif>
                        {{ $label }}
                    </option>
                @endforeach
            </select>

            <!-- Major Filter -->
            <select 
                value="{{ request('major') }}"
                name="major" id="major" class="select">
                @php
                    $majors = [
                        'all' => 'Semua Jurusan',
                        'Accounting' => 'Accounting',
                        'Management' => 'Management',
                        'Economic' => 'Economic',
                        'Taxation' => 'Taxation',
                    ];
                @endphp

                @foreach ($majors as $value => $label)
                    <option value="{{ $value }}" style="background-color: white;"
                        @if (old('major', $major) == $value) selected @endif>
                        {{ $label }}
                    </option>
                @endforeach
            </select>

            <select 
                value="{{ request('semester') }}"
                name="semester" id="semester" class="select">
                @php
                    $semesters = [
                        'all' => 'Semua Semester',
                        'Semester 1-2' => 'Semester 1-2',
                        'Semester 3-4' => 'Semester 3-4',
                        'Semester 5-6' => 'Semester 5-6',
                    ];
                @endphp

                @foreach ($semesters as $value => $label)
                    <option value="{{ $value }}" style="background-color: white;"
                        @if (old('semester', $semester) == $value) selected @endif>
                        {{ $label }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="flex items-center gap-2">
            <button id="pilih" class="btn bg-orange-500 hover:bg-orange-600 px-4" type="submit">
                Pilih
            </button>

            <button id="hapus" class="btn bg-white text-black hover:bg-gray-400" type="submit">
                <i class="fa-solid fa-broom me-1"></i> Hapus Filter
            </button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const selects = document.querySelectorAll('select');

        selects.forEach(select => {
            if (select.value !== 'all') {
                select.style.backgroundColor = 'orange';
            }
            select.addEventListener('change', function() {
                select.style.fontWeight = select.value === 'all' ? '400' : '600';
            });
        });
    });

    document.getElementById('hapus').addEventListener('click', function() {
    });
</script>
