<!-- NAVBAR -->
<nav class="flex items-center justify-between p-4 bg-white/70 backdrop-blur-md fixed w-full z-50">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center">
            <img loading="lazy" src="{{ asset('assets/socmed/logo.svg') }}" class="h-10 w-auto md:h-16" alt="Economic space">
        </a>

        <!-- Mobile Toggle Button -->
        <button id="mobile-menu-toggle" class="text-gray-500 focus:outline-none md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Navbar Links -->
        <div id="navbarContent" class="hidden md:flex md:items-center md:space-x-6">
            <ul class="flex flex-col md:flex-row md:space-x-6">
                <li>
                    <a href="{{ url('/tutors') }}" class="text-lg {{ Route::is('viewTutors') ? 'text-orange-500 duration-300' : 'text-gray-700 hover:text-orange-500 duration-300' }}">
                        Tutor
                    </a>
                </li>
                <li>
                    <a href="{{ url('/soon') }}" class="text-lg text-gray-700 hover:text-orange-500 duration-300">
                        Event
                    </a>
                </li>
            </ul>

            <!-- Authentication Links -->
            <ul class="flex flex-col md:flex-row md:space-x-6 ml-auto">
                @guest
                    @if (Route::has('register'))
                        <li>
                            <button onclick="window.location.href='{{ route('register') }}'" class="btn text-white rounded-xl">
                                {{ __('Sign Up') }}
                            </button>
                        </li>
                    @endif
                    @if (Route::has('login'))
                        <li>
                            <button onclick="window.location.href='{{ route('login') }}'" class="btn btn-outline rounded-xl">
                                {{ __('Sign In') }}
                            </button>
                        </li>
                    @endif
                @else
                    <li class="relative group">
                        <a id="navbarDropdown" class="text-lg text-gray-700 cursor-pointer hover:text-orange-500 flex items-center">
                            {{ Auth::user()->name }}
                            <svg id="chevron" xmlns="http://www.w3.org/2000/svg" class="ml-1 h-4 w-4 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                        <!-- Dropdown Menu -->
                        <div class="hidden group-hover:block absolute right-0 mt-2 w-48 bg-white border rounded shadow-lg">
                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- Mobile Dropdown -->
<div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
    <ul class="flex flex-col space-y-2 p-4">
        <li>
            <a href="{{ url('/tutors') }}" class="text-gray-700 hover:text-orange-500">
                Tutor
            </a>
        </li>
        <li>
            <a href="{{ url('/soon') }}" class="text-gray-700 hover:text-orange-500">
                Event
            </a>
        </li>
        @guest
            @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}" class="bg-black text-white px-4 py-2 rounded-xl hover:bg-gray-800">
                        {{ __('Sign Up') }}
                    </a>
                </li>
            @endif
            @if (Route::has('login'))
                <li>
                    <a href="{{ route('login') }}" class="border border-black px-4 py-2 rounded-xl hover:bg-gray-100">
                        {{ __('Sign In') }}
                    </a>
                </li>
            @endif
        @else
            <li>
                <a href="#" class="text-gray-700 hover:text-orange-500">
                    {{ Auth::user()->name }}
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" class="text-gray-700 hover:text-orange-500"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </li>
        @endguest
    </ul>
</div>

<!-- Mobile Message -->
<div class="md:hidden bg-black text-white text-center py-2">
    Open on the desktop for the best experience
</div>

<script>
    // Mobile Menu Toggle
    const toggleButton = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
