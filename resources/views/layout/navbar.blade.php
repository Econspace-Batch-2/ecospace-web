<!-- NAVBAR -->
<nav class="flex flex-col bg-white fixed w-full z-50 p-4 gap-5">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center">
            <img loading="lazy" src="{{ asset('assets/socmed/logo.svg') }}" class="h-10 w-auto md:h-16"
                alt="Economic space">
        </a>

        <!-- Mobile Toggle Button -->
        <button id="mobile-menu-toggle" class="text-gray-500 focus:outline-none md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Navbar Links -->
        <div id="navbarContent" class="hidden md:flex md:items-center md:space-x-6">
            <ul class="flex flex-col md:flex-row md:space-x-6">
                <li>
                    <a href="{{ url('/tutors') }}"
                        class="{{ Route::is('viewTutors') ? 'text-orange-500 duration-300' : 'text-gray-700 hover:text-orange-500 duration-300 text-sm' }}">
                        Tutor
                    </a>
                </li>
                <li>
                    <a href="{{ url('/events') }}"
                        class="{{ Route::is('viewEvents') ? 'text-orange-500 duration-300' : 'text-gray-700 hover:text-orange-500 duration-300 text-sm' }}">
                        Event
                    </a>
                </li>
            </ul>

            <!-- Authentication Links -->
            <ul class="flex flex-col md:flex-row md:space-x-6 ml-auto">
                @guest
                    @if (Route::has('register'))
                        <li>
                            <button onclick="window.location.href='{{ route('register') }}'"
                                class="btn btn-black rounded-xl">
                                {{ __('Sign Up') }}
                            </button>
                        </li>
                    @endif
                    @if (Route::has('login'))
                        <li>
                            <button onclick="window.location.href='{{ route('login') }}'"
                                class="btn btn-outline rounded-xl">
                                {{ __('Sign In') }}
                            </button>
                        </li>
                    @endif
                @else
                    <a href="{{ route('eventAvailable') }}">
                        <button class="btn btn-black">
                            My Account
                        </button>
                    </a>
                @endguest
            </ul>
        </div>
    </div>
    <!-- Mobile Dropdown -->
    <div id="mobile-menu" class="hidden md:hidden transition-all duration-300 ease-in-out transform">
        <div class="flex flex-col gap-4">
            <a href="{{ url('/tutors') }}" class="text-gray-700 hover:text-orange-500 duration-300">
                Tutor
            </a>
            <a href="{{ url('/events') }}" class="text-gray-700 hover:text-orange-500 duration-300">
                Event
            </a>
            @guest
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-black">
                        {{ __('Sign Up') }}
                    </a>
                @endif
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="border-2 border-black btn btn-outline">
                        {{ __('Sign In') }}
                    </a>
                @endif
            @else
                <a href="/profile/event/available" class="text-gray-700 hover:text-orange-500 duration-300">
                    My Account
                </a>
                <a href="{{ route('logout') }}" class="text-gray-700 hover:text-red-500 duration-300"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            @endguest
        </div>
    </div>
</nav>



<script>
    // Mobile Menu Toggle
    const toggleButton = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleButton.addEventListener('click', () => {
        // Check if the menu is hidden or visible
        if (mobileMenu.classList.contains('hidden')) {
            // Show the menu
            mobileMenu.classList.remove('hidden');
            setTimeout(() => {
                mobileMenu.style.transform = 'opacity(100)';
                mobileMenu.style.opacity = '1';
            }, 10); // Small delay to trigger transition
        } else {
            // Hide the menu
            mobileMenu.style.transform = 'opacity(0)';
            mobileMenu.style.opacity = '0';
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300); // Match the timing of the transition
        }
    });
</script>
