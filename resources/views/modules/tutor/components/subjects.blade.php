@if ($subjects && $subjects->isNotEmpty())
    <!-- Iterate through each subject -->
    @foreach ($subjects as $s)
        @php
            // Decode the JSON-encoded 'univ' field for each subject
            $universities = json_decode($s->univ, true);
        @endphp

        <div class="w-full relative rounded-xl hover:scale-[0.98] duration-700 ease-in-out">
            @php
                $firstMentor = $s->mentors->sortBy('created_at')->first();
            @endphp
            <a href="{{ route('detailTutor', $s->id) }}" class="relative">
                <div class="relative w-full h-full overflow-hidden shadow-2xl rounded-xl">
                    <!-- Desktop Image with conditional URLs based on whether 'UGM' is in the 'univ' array -->
                    @if (is_array($universities) && in_array('UGM', $universities))
                        <img src="{{ asset('assets/tutorImage/UGM_cardbg.png') }}" alt="UGM Image"
                            class="object-cover w-full h-full">
                    @else
                        <img src="{{ asset('assets/tutorImage/UNAIR_cardbg.png') }}" alt="UNAIR Image"
                            class="object-cover w-full h-full">
                    @endif
                </div>
                    @if (is_array($universities) && in_array('UGM', $universities))
                        <img src="{{ asset('assets/univ/ugm.svg') }}" alt="UNAIR Image" class="w-20 xl:w-32 aspect-square absolute z-20 bottom-4 right-4">
                    @else
                        <img src="{{ asset('assets/univ/unair.svg') }}" alt="UNAIR Image" class="w-20 xl:w-32 aspect-square absolute z-20 bottom-4 right-4">
                    @endif
                
                <h5 class="text-base xl:text-lg text-center p-2 rounded-xl font-bold bg-white absolute top-8 left-4">
                    {{ $s->title }}
                </h5>
            </a>
        </div>
    @endforeach
@else
    <div class="w-full col-span-full grid place-items-center">
        <p class="text-center font-bold text-5xl w-full">No data to display</p>
    </div>
@endif
