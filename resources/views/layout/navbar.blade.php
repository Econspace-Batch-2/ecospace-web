<!-- NAVBAR -->
<nav class="flex items-center justify-between p-4 bg-white shadow-md fixed w-full z-50">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center">
            <img loading="lazy" src="{{ asset('assets/socmed/logo.svg') }}" class="h-10 md:h-20 w-auto" alt="Economic space">
        </a>

        <!-- Mobile Toggle Button -->
        <button class="text-gray-500 focus:outline-none md:hidden" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Navbar Links -->
        <div class="hidden w-full md:flex md:items-center md:w-auto" id="navbarContent">
            <ul class="flex flex-col md:flex-row md:space-x-6">
                <li>
                    <a href="{{ url('/tutors') }}" class="text-lg {{ Route::is('viewTutors') ? 'text-blue-500' : 'text-gray-700 hover:text-blue-500' }}">
                        Tutor
                    </a>
                </li>
                <li>
                    <a href="{{ url('/soon') }}" class="text-lg text-gray-700 hover:text-blue-500">
                        Event
                    </a>
                </li>
            </ul>

            <!-- Authentication Links -->
            <ul class="flex flex-col md:flex-row md:space-x-6 ml-auto">
                @guest
                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}" class="text-lg bg-black px-4 py-2 text-white rounded-xl hover:bg-gray-800">
                                {{ __('Sign Up') }}
                            </a>
                        </li>
                    @endif
                    @if (Route::has('login'))
                        <li>
                            <a href="{{ route('login') }}" class="text-lg border border-black px-4 py-2 rounded-xl hover:bg-gray-100">
                                {{ __('Sign In') }}
                            </a>
                        </li>
                    @endif
                @else
                    <li class="relative group">
                        <a id="navbarDropdown" class="text-lg text-gray-700 cursor-pointer hover:text-blue-500" href="#">
                            {{ Auth::user()->name }}
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

<!-- Mobile Message -->
<div class="md:hidden bg-black text-white text-center py-2">
    Open on the desktop for the best experience
</div>
