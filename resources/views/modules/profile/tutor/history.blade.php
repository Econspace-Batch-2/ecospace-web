@extends('layout.layout')

@section('content')

<div class="flex">
    <div class="w-64">
        @include('modules.profile.sidebar')
    </div>

    <!-- Main Content -->
    <div class="flex-1 bg-gray-100 p-6">
        <div class="bg-white p-6 flex items-center">
            <h1 class="text-black text-xl font-semibold"">Economic Space Courses</h1>
        </div>

        <!-- Profile Section -->
        <div class="bg-orange-400 p-6 flex items-center">
            <img src="{{ asset('assets/profile/profpic.png') }}" alt="Profile" class="w-20 h-20 rounded-full border-2 border-white">
            <div class="ml-4">
                <h1 class="text-white text-xl font-semibold">{{Auth::user()->name}}</h1>
                <p class="text-white">{{Auth::user()->email}}</p>
            </div>
        </div>

        <!-- Tabs -->
        <div class="flex justify-center bg-white shadow-md">
            <a href="{{ route('tutorAvailable') }}" class="py-3 px-6 text-gray-500 hover:text-orange-500">
                Available
            </a>
            <button class="py-3 px-6 text-orange-500 font-semibold border-b-4 border-orange-500">History</button>
        </div>

        <!-- Event Cards -->
        <div class="cursor-not-allowed bg-white p-6 space-y-6 saturate-50">
            <!-- Card 1 -->
            @if (count($subjects) == 0)
                <div class="flex flex-col items-center w-full gap-4">
                    <img src="{{asset('assets/home/face5.svg')}}" alt="" class="w-56">
                    <h1 class="text-sm font-medium text-center">You haven't registered for any events yet.</h1>
                    <a href="/events">
                        <button
                            class="btn btn-black"
                        >
                            Register to Event
                        </button>
                    </a>
                </div>
            @else
                @foreach ($subjects as $event)                
                    <div class="bg-white p-4 rounded-md shadow flex items-center justify-between outline outline-2">
                        <div class="flex flex-col lg:flex-row items-center gap-6">
                            @php
                                // Decode the JSON-encoded 'univ' field for each subject
                                $universities = json_decode($event->univ, true);
                            @endphp
                            <div class="relative w-full lg:min-w-52 lg:max-w-52 h-full overflow-hidden rounded-xl">
                                <!-- Desktop Image with conditional URLs based on whether 'UGM' is in the 'univ' array -->
                                @if (is_array($universities) && in_array('UGM', $universities))
                                    <img src="{{ asset('assets/tutorImage/UGM_cardbg.png') }}" alt="UGM Image"
                                        class="object-cover w-full h-full">
                                @else
                                    <img src="{{ asset('assets/tutorImage/UNAIR_cardbg.png') }}" alt="UNAIR Image"
                                        class="object-cover w-full h-full">
                                @endif

                                <!-- Subject Tutor Image -->
                                <img src="{{ asset('assets/tutorImage/' . $event->tutor) }}"
                                    alt="Subject Tutor Image"
                                    class="w-1/2 -bottom-8 sm:-bottom-8 md:-bottom-10 absolute right-1/2 transform translate-x-1/2">
                            </div>
                            <div class="">
                                <h2 class="text-xl font-semibold">
                                    {{ $event->title }}
                                </h2>
                                <p class="text-sm text-gray-600">
                                    {{ $event->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

@endsection
