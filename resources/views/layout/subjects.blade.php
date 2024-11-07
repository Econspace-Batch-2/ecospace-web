@if($subjects && $subjects->isNotEmpty())
    <!-- Iterate through each subject -->
    @foreach($subjects as $s)
        <div class="w-full h-96 relative rounded-xl">
            <a href="{{ route('detailTutor', $s->id) }}">
            <div class="bg-white p-4 min-w-fit h-auto subject-title">
                <h5 class="text-lg font-bold">
                    {{ $s->subject_title }}
                </h5>
            </div>
                <div class="relative w-full h-full overflow-hidden">
                    <!-- Desktop Image -->
                    <img src="{{ asset('assets/tutorImage/tDesktop.svg') }}" alt="Desktop Image" class="object-cover w-full h-full hidden sm:block">

                    <!-- Mobile Image -->
                    <img src="{{ asset('assets/tutorImage/tMobile.svg') }}" alt="Mobile Image" class="object-cover w-full h-full sm:hidden">

                    <!-- Subject Tutor Image -->
                    <img src="{{ asset('assets/tutorImage/'.$s->subject_tutor) }}" alt="Subject Tutor Image" class="w-1/2 bottom-0 right-0 absolute">
                </div>
            </a>
        </div>
    @endforeach
@else
    <div class="col-12">
        <p class="text-center font-bold text-5xl">No data to display</p>
    </div>
@endif
