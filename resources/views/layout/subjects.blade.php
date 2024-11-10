@if (!is_null($subjects))
    @foreach ($subjects as $s)
        <div class="">
            <a href="{{ URL::route('detailTutor', $s->id) }}">
                <div class="relative">
                    <!-- Desktop Image -->
                    <img src="{{ asset('assets/thumbnail/' . $s->subject_image) }}" alt="{{ $s->subject_image }}"
                        class="hidden md:block w-full relative">

                    <!-- Mobile Image -->
                    <img src="{{ asset('assets/thumbnailMobile/' . $s->subject_image) }}" alt="{{ $s->subject_image }}"
                        class="block md:hidden w-full relative">
                </div>
            </a>
        </div>
    @endforeach
@else
    <div class="col-12">
        <p class="text-center">No data to display</p>
    </div>
@endif
