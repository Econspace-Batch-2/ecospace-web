<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Economic Space</title>
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- custom css --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tutor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mentorship.css') }}" rel="stylesheet">
    <link href="{{ asset('css/auth.css') }}" rel="stylesheet">
    {{-- logo for page title --}}
    <link rel="icon" type="image/svg" href="{{ asset('assets/socmed/logo_favicon.svg') }}" sizes="32x32">
    {{-- animation --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    {{-- icon --}}
    <script src="https://kit.fontawesome.com/92b0bdfcf0.js" crossorigin="anonymous" defer></script>
    {{-- typed animation --}}
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    @vite('resources/css/app.css')
    {{-- meta description --}}
    <meta
  name="description"
  content="Ultimate hub for university students to support them Academically with Expert Tutors, while providing with Insights for their Future Career Plan through Insights Exploration with Mentors">
</head>
<body>


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

    @yield('content')

    {{-- FOOTER YG INGIN MENDAPATKAN --}}

    <footer class="desktop mt-4">
        <div class="container">
          <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <img loading="lazy"  class="img-fluid icon-smile" src="{{asset('assets/home/smile.svg')}}" alt="economic space logo">
                <a class="ms-3 bg-black rounded-4 p-2 font-700 font-42 text-white hovered text-center" style="min-width: 300px;" href="{{ route('viewTutors') }}">@yield('desktopBtn')</a>
            </div>
            <div class="align-items-center pt-3" style="text-align: right;">
              <h3 class="font-700 font-40">@yield('desktopTitle')</h3>
              <p class="font-400 font-28">@yield('desktopContent')</p>
            </div>
          </div>
        </div>
    </footer>

    <footer class="mobile mt-4">
        <div class="container">
            <div class="row">
                <div class="text-center d-flex flex-column justify-content-center align-items-center">
                    <h3 class="font-400">@yield('mobileTitle1') <span class="font-800">@yield('mobileTitle2')</span> </h3>
                    <p class="font-400">@yield('mobileContent')</p>
                </div>
            <div>
            <div class="row">
                <div class=" mt-1 d-flex align-items-center justify-content-center">
                    <img loading="lazy"  class="icon-smile" src="{{asset('assets/home/smile.svg')}}" alt="icon smile">
                    <a class="ms-3 bg-black rounded-4 p-2 font-700 font-44 text-white" href="{{ route('viewTutors') }}">@yield('mobileBtn')</a>
                </div>
            </div>
        </div>
    </footer>


    <!-- FOOTER -->
    <footer class="desktop">
        <div class="container-fluid bg-black">
            <div class="container px-5 pb-3 pt-4 mt-5 align-items-center justify-content-center">
                <div class="d-flex mt-2 mb-3">
                    <img loading="lazy"  src="{{asset('assets/socmed/logowhite.svg')}}" alt="economic space logo white" class="logo-img me-auto">
                    <a target="_blank" href="https://bit.ly/TutoringEconomicSpace2024" class="align-self-start py-2 button-glow text-white bg-orange px-3 rounded-5 font-22 font-400 me-3 hovered d-flex align-items-center justify-content-center">
                        Join as Tutor / Mentor <i class="fa fa-external-link text-white ms-2"></i>
                    </a>
                    <a target="_blank" href="https://wa.link/fbua0a" class=" align-self-start py-2 button-glow text-white bg-orange px-3 rounded-5 font-22 font-400 hovered d-flex align-items-center justify-content-center">
                        Interest for Partnership? <i class="fa fa-external-link text-white ms-2"></i>
                    </a>
                </div>
                <p class="text-white mb-1 font-400 font-22"  style="font-style: italic;">Private Enterprise Organization dedicated to Education Technology to prepare for Post-College Life</p>
            </div>
        </div>
        <div class="container-fluid brown-gradient">
            <div class="container px-5 d-flex align-items-center justify-content-between">
                <p class="text-white mb-0 font-700 font-22" >© 2024 Economic Space. All rights reserved.</p>
                <div class="d-flex align-items-center">
                        <img loading="lazy"  class="icon-insta mr-2 hovered" src="{{asset('assets/socmed/insta.svg')}}" alt="instagram icon" onclick="redirectTo('https://www.instagram.com/economic.space/')">
                        <img loading="lazy"  class="icon-linkedin hovered" src="{{asset('assets/socmed/linkedin.svg')}}" alt="linkedin icon" onclick="redirectTo('https://www.linkedin.com/company/economic-space/')">
                </div>
            </div>
        </div>


    </footer>

    <footer class="mobile mt-5">

        <div class="d-flex flex-column align-items-center">
            <div class=" container-fluid py-2 bg-black mt-2 align-items-center justify-content-center">
                {{-- socmed icon --}}
                <div class="icon d-flex align-items-center">
                    <img loading="lazy"  class="icon-insta mr-2" src="{{asset('assets/socmed/insta.svg')}}" alt="icon instagram" onclick="redirectTo('https://www.instagram.com/economic.space/')">
                    <img loading="lazy"  class="icon-linkedin" src="{{asset('assets/socmed/linkedin.svg')}}" alt="icon linkedin" onclick="redirectTo('https://www.linkedin.com/company/economic-space/')">
                </div>

                {{-- buttons --}}
                {{-- horizontal --}}
                <div class="d-flex mb-4 justify-content-center gap-3">
                    <img loading="lazy"  src="{{asset('assets/socmed/logowhite.svg')}}" alt="economic space logo" class="logo-img">
                    <div class="d-flex flex-column">
                        {{-- vertical --}}
                        <a target="_blank" href="https://bit.ly/TutoringEconomicSpace2024" class="button-glow text-white text-center bg-orange p-2 rounded-5 font-22 font-400 me-3 hovered mb-2" style="width: 100%">
                            Join as Tutor / Mentor <i class="fa fa-external-link text-white ms-2"></i>
                        </a>
                        <a target="_blank" href="https://wa.link/fbua0a" class="button-glow text-white text-center bg-orange p-2 rounded-5 font-22 font-400 hovered" style="width: 100%">
                            Interest for Partnership? <i class="fa fa-external-link text-white ms-2"></i>
                        </a>
                    </div>

                </div>

                <p class=" text-white px-5 mb-2 text-center font-400" style="font-style: italic; font-size: 12px;">Private Enterprise Organization dedicated to Education Technology to prepare for Post-College Life</p>
            </div>
        </div>
        <div class="container-fluid brown-gradient py-1 align-items-center">
            <p class="font-700 text-white px-5 mb-0 text-center" style="font-size: 12px;">© 2023 Economic Space. All rights reserved.</p>
        </div>
    </footer>


    {{-- <a href="https://wa.link/fbua0a" target="_blank">
        <div class="fix-bottom">
            <div class="d-flex align-items-center justify-content-center bg-orange py-2 px-2 rounded-5">
                <img loading="lazy"  src="{{asset('assets/socmed/wa.svg')}}" class="img-fluid fix-image pe-2">
                <h5 class="font-700 text-white font-22">Tanya Konsultan</h5>
            </div>
        </div>
    </a> --}}



    <script>
        function redirectTo(url) {
            window.location.href = url;
        }
    </script>
    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    {{-- animation --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    {{-- jquery --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    {{-- custom js --}}
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</body>
</html>
