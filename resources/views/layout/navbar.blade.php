<!-- NAVBAR -->
<nav class="flex items-center justify-between p-4 bg-white shadow-md fixed w-full z-50">
    <div class="container mx-auto flex items-center justify-between">
        <a href="{{ url('/') }}" class="flex items-center">
            <img loading="lazy" src="{{ asset('assets/socmed/logo.svg') }}" class="h-10 md:h-20 w-auto" alt="Economic space">
        </a>
        <button class="text-gray-500 focus:outline-none md:hidden" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="hidden w-full md:flex md:items-center md:w-auto" id="navbarSupportedContent">
            <ul class="flex flex-col md:flex-row md:space-x-4 mx-10">
                <li>
                    <a class="nav-link text-lg {{ Route::is('viewTutors') ? 'text-blue-500' : 'text-gray-700' }}" aria-current="page" href="{{url('/tutors')}}">Tutor</a>
                </li>
                <li>
                    <a class="nav-link text-lg text-gray-700" aria-current="page" href="{{url('/soon')}}">Event</a>
                </li>
            </ul>
            <ul class="flex flex-col md:flex-row md:space-x-4 ml-auto">
                @guest
                    @if (Route::has('register'))
                        <li>
                            <a class="text-lg bg-black px-4 py-2 text-white rounded-xl" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                        </li>
                    @endif
                    @if (Route::has('login'))
                        <li>
                            <a class="border-[1px] border-black text-lg px-4 py-2 rounded-xl" href="{{ route('login') }}">{{ __('Sign In') }}</a>
                        </li>
                    @endif
                @else
                    <li class="relative">
                        <a id="navbarDropdown" class="nav-link text-lg text-gray-700 cursor-pointer" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu absolute right-0 mt-2 w-48 bg-white border rounded shadow-lg" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item block px-4 py-2 text-gray-700 hover:bg-gray-100" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
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

<div class="mobile bg-black text-white text-center py-2">
    Open on the desktop for the best experience
</div>
