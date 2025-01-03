@extends('layout.layout')

@section('content')

<div class="flex">
    <div class="w-64">
        @include('modules.profile.sidebar')
    </div>

    <!-- Main Content -->
    <div class="flex-1 bg-gray-100 p-6">
        <div class="bg-white p-6 flex items-center">
            <h1 class="text-black text-xl font-semibold"">Economic Space Events</h1>
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
            <a href="{{ route('eventAvailable') }}" class="py-3 px-6 text-gray-500 hover:text-orange-500">
                Available
            </a>
            <button class="py-3 px-6 text-orange-500 font-semibold border-b-4 border-orange-500">History</button>
        </div>

        <!-- Event Cards -->
        <div class="cursor-not-allowed bg-white p-6 space-y-6 saturate-50">
            <!-- Card 1 -->
            @if (count($events) == 0)
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
                @foreach ($events as $event)                
                    <div class="bg-white p-4 rounded-md shadow flex items-center justify-between outline outline-2">
                        <div class="flex items-center">
                            <img src="{{ asset('assets/profile/Accounting.svg') }}" alt="Event 1" class="w-52 h-auto rounded-md outline outline-2">
                            <div class="ml-6">
                                <h2 class="text-xl font-semibold">Seminar Edukasi Terkait Pentingnya...</h2>
                                <p class="text-lg text-gray-600">Sherinna Dawn</p>
                                <div class="flex">
                                    <img src="{{ asset('assets/profile/calendar-icon.svg') }}" alt="Calendar" class="w-7 h-auto border-2 border-white mt-2">
                                    <span class="mt-2.5 ml-2 text-[#FF4778]"> 8 October 2024 | 12:00 - 14:30 WIB </span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="bg-orange-500 text-white px-4 py-2 rounded-md ml-4">Expired</button>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>

@endsection
