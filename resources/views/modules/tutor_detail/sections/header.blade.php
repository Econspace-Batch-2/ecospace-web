{{-- intro tutor --}}
<div
    class="bg-black w-[200vw] md:w-[130vw] h-96 top-10 z-0 rounded-b-full mx-auto absolute left-1/2 transform -translate-x-1/2">
    <img loading="lazy" src="{{ asset('assets/tutorDetail/faces3.svg') }}" alt="economic space logo"
        class="absolute right-72 top-20 h-32 md:h-40">
</div>
<section class="bg-white shadow-lg m-20 mt-40 text-black rounded-3xl overflow-hidden z-20 relative">
    <div class="p-10">
        <p class="text-sm font-normal mb-2"><a href="{{ route('viewTutors') }}">Academy</a> >
            {{ $subject->subject_title }}</p>

        {{-- info spt judul dll yg sebelah kiri --}}
        <h1 class="text-4xl font-bold">{{ $subject->subject_title }}</h1>

        {{-- TAG --}}
        <div class="flex justify-start gap-3 mt-3">
            @foreach (json_decode($subject->subject_majors) as $major)
                <p class="bg-gray-100 py-1 px-2 rounded-lg text-sm font-medium mb-2">{{ $major }}</p>
            @endforeach
        </div>

        {{-- CATEGORY AND SEMESTER --}}
        <div class="flex justify-start gap-3 mb-2">
            <p class="text-sm font-medium"><i class="fa-solid fa-folder mr-2"></i>
                {{ $subject->subject_category }}</p>
            <p class="text-sm font-medium"><i class="fa-solid fa-gem mr-2"></i> {{ $subject->subject_semester }}
            </p>
        </div>
        <div class="flex w-full justify-end">
            <a target="_blank" href="https://bit.ly/RegistrationTutorService">
                <button class="btn bg-orange-500 hover:bg-orange-600 px-20">Book Now</button>
            </a>
        </div>
    </div>

    <div class="bg-[#FC80258A]/50 p-10 rounded-tl-3xl">
        <p>{{$subject->subject_description}}</p>
    </div>
</section>
