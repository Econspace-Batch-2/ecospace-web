@if($subjects && $subjects->isNotEmpty())
    <!-- Iterate through each subject -->
    @foreach($subjects as $s)
        @php
            // Decode the JSON-encoded 'univ' field for each subject
            $universities = json_decode($s->univ, true);
        @endphp

        <div class="w-full h-60 relative rounded-xl hover:scale-[0.98] duration-700 ease-in-out">
            @php
                $firstMentor = $s->mentors->sortBy('created_at')->first();
            @endphp
            <a href="{{ route('detailTutor', $s->id) }}">
                <div class="relative w-full h-full overflow-hidden shadow-2xl rounded-xl">
                    <!-- Desktop Image with conditional URLs based on whether 'UGM' is in the 'univ' array -->
                    @if (is_array($universities) && in_array('UGM', $universities))
                        <img src="{{ asset('assets/tutorImage/UGM_cardbg.png') }}" alt="UGM Image"
                            class="object-cover w-full h-full">
                    @else
                        <img src="{{ asset('assets/tutorImage/UNAIR_cardbg.png') }}" alt="UNAIR Image"
                            class="object-cover w-full h-full">
                    @endif

                    <!-- Subject Tutor Image -->
                    @if ($firstMentor->profile && file_exists(public_path('storage/' . $firstMentor->profile)))
                        <img src="{{ asset('storage/' . $firstMentor->profile ) }}" alt="Subject Tutor Image"
                            class="w-1/2 -bottom-8 sm:-bottom-8 md:-bottom-10 right-0 absolute">
                    @else
                    @endif

                </div>
                <h5 class="text-base md:text-lg text-center p-2 rounded-xl font-bold bg-white absolute top-8 left-4">
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