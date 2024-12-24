<div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-white text-[#15172B] drop-shadow-md flex flex-col">
        <!-- Logo -->
        <div class="flex items-center justify-center h-30 border-b border-blue-700">
            <img src="{{ asset('assets/profile/header.png') }}" alt="Header Logo" class="w-full">
        </div>

        <!-- Menu -->
        <nav class="flex-1 p-4">
            <ul class="space-y-8">
                <!-- Tutor Section -->
                <li>
                    <a href="#" class="icon-link flex items-center p-2 rounded-md group w-full">
                        <img src="{{ asset('assets/profile/tutor.svg') }}" alt="Tutor Icon" class="icon-default w-10">
                        <span class="ml-2 p-2 w-full rounded-md group-hover:bg-[#15172B] group-hover:text-white hover:scale-105 duration-300 {{ request()->is('profile/tutor') ? 'bg-[#15172B] text-white' : '' }}">
                    Tutor
                </span>
                    </a>
                </li>

                <!-- Event Section -->
                <li>
                    <a href="{{ route('eventAvailable') }}" class="icon-link flex items-center p-2 rounded-md group w-full">
                        <img src="{{ asset('assets/profile/event.svg') }}" alt="Event Icon" class="icon-default w-10">
                        <span class="ml-2 p-2 w-full rounded-md group-hover:bg-[#15172B] group-hover:text-white hover:scale-105 duration-300 {{ request()->is('profile/event/available') || request()->is('profile/event/history') ? 'bg-[#15172B] text-white' : '' }}">
                    Event
                </span>
                    </a>
                </li>
            </ul>
        </nav>


        <!-- Sign Out -->
        <div class="p-4 py-10 border-t border-gray-300">
            <form action="{{ route('logout') }}" method="POST" class="flex items-center px-2 text-[#9D0000] font-normal hover:font-bold hover:scale-105 duration-200">
                @csrf
                <button class="flex">
                    <img src="{{ asset('assets/profile/logOut.svg') }}" alt="Sign out Icon" class="icon-default w-5 mr-4">
                    Sign Out
                </button>
            </form>
        </div>
    </div>
</div>