<!-- NAVBAR -->
<nav class="flex">
    <div class="container">
    <a href="{{ url('/') }}" class="logo-link">
        <img loading="lazy"  src="{{ asset('assets/socmed/logo.svg') }}" class="logo-img" alt="Economic space">
    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="flex">
            <li class="nav-item px-2">
                <a class="nav-link font-24 {{ Route::is('viewTutors') ? 'active' : '' }}" aria-current="page" href="{{url('/tutors')}}">Tutor</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link font-24" aria-current="page" href="{{url('/soon')}}">Event</a>
            </li>
            <li class="nav-item px-2">
                <a class="nav-link font-24" aria-current="page" href="{{url('/mentorship')}}">Mentorship</a>
            </li>

        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0">
            @guest
                @if (Route::has('register'))
                    <li class="nav-item px-2">
                        <a class="nav-link font-24" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                    </li>
                @endif
                @if (Route::has('login'))
                    <li class="nav-item px-2">
                        <a class="btn btn-dark font-24" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif


                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest


        </ul>
        </div>
    </div>
</nav>

<div class="mobile bg-black font-400 font-18 text-white text-center">
    Open on the desktop for the best experience
</div>