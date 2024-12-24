@extends('layout.layout')

@section('content')
    <img src="{{ asset('assets/banner-event.svg') }}" alt="Banner tutor" class="w-full">

    <section class="w-full px-4 md:px-10 lg:px-20 -translate-y-10">
        <form action="{{ route('viewEvents') }}" method="GET"
            class="bg-black p-5 flex flex-col md:flex-row md:items-center justify-between rounded-xl gap-4">
            <div class="flex items-center gap-4">
                <input type="text" name="search" id="" placeholder="Cari nama Event"
                    class="input w-full lg:min-w-[400px]" value="{{ request('search') }}">
                <select name="category" id="" class="select">
                    <option value="all" {{ request('category') == 'all' ? 'selected' : '' }}>Semua Kategori</option>
                    <option value="workshop" {{ request('category') == 'workshop' ? 'selected' : '' }}>Workshop</option>
                    <option value="seminar" {{ request('category') == 'seminar' ? 'selected' : '' }}>Seminar</option>
                    <option value="bootcamp" {{ request('category') == 'bootcamp' ? 'selected' : '' }}>Bootcamp</option>
                    <option value="webinar" {{ request('category') == 'webinar' ? 'selected' : '' }}>Webinar</option>
                    <option value="test" {{ request('category') == 'test' ? 'selected' : '' }}>test</option>
                </select>
            </div>
            <div class="flex items-center gap-4">
                <button class="btn btn-primary">
                    Pilih
                </button>
                <button type="button" class="btn btn-outline" id="clear-filters">
                    Hapus Filter
                </button>
            </div>
        </form>
    </section>

    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 p-4 md:p-10 lg:p-20">
        @if ($events->isEmpty())
            <p class="text-center w-full col-span-1 md:col-span-2 lg:col-span-3">Tidak ada event yang ditemukan.</p>
        @else
            @foreach ($events as $event)
                <div class="col-span-1 p-4 md:p-8 border-2 border-black rounded-xl">
                    <img src="{{ asset('assets/tutorImage/UGM_cardbg.png') }}" alt="Event"
                        class="w-full h-52 border-2 border-black rounded">
                    <h2 class="text-xl font-bold my-2">{{ $event->name }}</h2>
                    {{-- Split and map categories --}}
                    <div class="text-xs font-medium flex flex-wrap gap-2">
                        @foreach (explode(',', $event->categories) as $category)
                            <span class="p-2 rounded-xl bg-gray-200">#{{ trim($category) }}</span>
                            @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </div>
                    <div class="flex justify-between items-center mt-4">
                        <p class="font-bold">Harga: Rp {{ number_format($event->harga, 0, ',', '.') }}</p>
                        <button class="btn btn-primary">
                            Beli
                        </button>
                    </div>
                </div>
            @endforeach
        @endif
    </section>

    <script>
        document.getElementById('clear-filters').addEventListener('click', function() {
            window.location.href = "{{ route('viewEvents') }}";
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
