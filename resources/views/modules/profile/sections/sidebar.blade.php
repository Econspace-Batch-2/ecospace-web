<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar with Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

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
                        <span class="ml-2 p-2 w-full rounded-md group-hover:bg-[#15172B] group-hover:text-white {{ request()->is('profile/tutor') ? 'bg-[#15172B] text-white' : '' }}">
                    Tutor
                </span>
                    </a>
                </li>

                <!-- Event Section -->
                <li>
                    <a href="{{ route('eventAvailable') }}" class="icon-link flex items-center p-2 rounded-md group w-full">
                        <img src="{{ asset('assets/profile/event.svg') }}" alt="Event Icon" class="icon-default w-10">
                        <span class="ml-2 p-2 w-full rounded-md group-hover:bg-[#15172B] group-hover:text-white {{ request()->is('profile/event/available') ? 'bg-[#15172B] text-white' : '' }}">
                    Event
                </span>
                    </a>
                </li>
            </ul>
        </nav>


        <!-- Sign Out -->
        <div class="p-4 border-t border-blue-700">
            <a href="#" class="flex items-center px-2 text-[#9D0000] font-normal hover:font-bold">
                <img src="{{ asset('assets/profile/logOut.svg') }}" alt="Sign out Icon" class="icon-default w-5 mr-4">
                Sign Out
            </a>
        </div>
    </div>
</div>

</body>
</html>
