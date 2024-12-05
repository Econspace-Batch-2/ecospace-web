<footer class="desktop mt-4">
    <div class="container mx-auto">
        <div class="flex justify-between">
            <div class="flex items-center">
                <img loading="lazy" class="img-fluid icon-smile" src="{{asset('assets/home/smile.svg')}}" alt="economic space logo">
                <a class="ml-3 bg-black rounded-lg p-2 font-bold text-2xl text-white hover:bg-gray-800 text-center" style="min-width: 300px;" href="{{ route('viewTutors') }}">@yield('desktopBtn')</a>
            </div>
            <div class="items-center pt-3 text-right">
                <h3 class="font-bold text-2xl">@yield('desktopTitle')</h3>
                <p class="font-normal text-xl">@yield('desktopContent')</p>
            </div>
        </div>
    </div>
</footer>

<footer class="mobile mt-4">
    <div class="container mx-auto">
        <div class="row">
            <div class="text-center flex flex-col justify-center items-center">
                <h3 class="font-normal">@yield('mobileTitle1') <span class="font-extrabold">@yield('mobileTitle2')</span> </h3>
                <p class="font-normal">@yield('mobileContent')</p>
            </div>
        </div>
        <div class="row">
            <div class="mt-1 flex items-center justify-center">
                <img loading="lazy" class="icon-smile" src="{{asset('assets/home/smile.svg')}}" alt="icon smile">
                <a class="ml-3 bg-black rounded-lg p-2 font-bold text-2xl text-white" href="{{ route('viewTutors') }}">@yield('mobileBtn')</a>
            </div>
        </div>
    </div>
</footer>

<footer class="desktop">
    <div class="container-fluid bg-black">
        <div class="container px-5 pb-3 pt-4 mt-5 flex items-center justify-center">
            <div class="flex mt-2 mb-3">
                <img loading="lazy" src="{{asset('assets/socmed/logowhite.svg')}}" alt="economic space logo white" class="logo-img mr-auto">
                <a target="_blank" href="https://bit.ly/TutoringEconomicSpace2024" class="self-start py-2 button-glow text-white bg-orange px-3 rounded-lg text-lg font-normal mr-3 hover:bg-orange-600 flex items-center justify-center">
                    Join as Tutor / Mentor <i class="fa fa-external-link text-white ml-2"></i>
                </a>
                <a target="_blank" href="https://wa.link/fbua0a" class="self-start py-2 button-glow text-white bg-orange px-3 rounded-lg text-lg font-normal hover:bg-orange-600 flex items-center justify-center">
                    Interest for Partnership? <i class="fa fa-external-link text-white ml-2"></i>
                </a>
            </div>
            <p class="text-white mb-1 font-normal text-lg italic">Private Enterprise Organization dedicated to Education Technology to prepare for Post-College Life</p>
        </div>
    </div>
    <div class="container-fluid bg-gradient-to-r from-brown-500 to-brown-700">
        <div class="container px-5 flex items-center justify-between">
            <p class="text-white mb-0 font-bold text-lg">© 2024 Economic Space. All rights reserved.</p>
            <div class="flex items-center">
                <img loading="lazy" class="icon-insta mr-2 hover:cursor-pointer" src="{{asset('assets/socmed/insta.svg')}}" alt="instagram icon" onclick="redirectTo('https://www.instagram.com/economic.space/')">
                <img loading="lazy" class="icon-linkedin hover:cursor-pointer" src="{{asset('assets/socmed/linkedin.svg')}}" alt="linkedin icon" onclick="redirectTo('https://www.linkedin.com/company/economic-space/')">
            </div>
        </div>
    </div>
</footer>

<footer class="mobile mt-5">
    <div class="flex flex-col items-center">
        <div class="container-fluid py-2 bg-black mt-2 flex items-center justify-center">
            <div class="icon flex items-center">
                <img loading="lazy" class="icon-insta mr-2" src="{{asset('assets/socmed/insta.svg')}}" alt="icon instagram" onclick="redirectTo('https://www.instagram.com/economic.space/')">
                <img loading="lazy" class="icon-linkedin" src="{{asset('assets/socmed/linkedin.svg')}}" alt="icon linkedin" onclick="redirectTo('https://www.linkedin.com/company/economic-space/')">
            </div>
            <div class="flex mb-4 justify-center gap-3">
                <img loading="lazy" src="{{asset('assets/socmed/logowhite.svg')}}" alt="economic space logo" class="logo-img">
                <div class="flex flex-col">
                    <a target="_blank" href="https://bit.ly/TutoringEconomicSpace2024" class="button-glow text-white text-center bg-orange p-2 rounded-lg text-lg font-normal mr-3 hover:bg-orange-600 mb-2 w-full">
                        Join as Tutor / Mentor <i class="fa fa-external-link text-white ml-2"></i>
                    </a>
                    <a target="_blank" href="https://wa.link/fbua0a" class="button-glow text-white text-center bg-orange p-2 rounded-lg text-lg font-normal hover:bg-orange-600 w-full">
                        Interest for Partnership? <i class="fa fa-external-link text-white ml-2"></i>
                    </a>
                </div>
            </div>
            <p class="text-white px-5 mb-2 text-center font-normal italic text-xs">Private Enterprise Organization dedicated to Education Technology to prepare for Post-College Life</p>
        </div>
    </div>
    <div class="container-fluid bg-gradient-to-r from-brown-500 to-brown-700 py-1 flex items-center">
        <p class="font-bold text-white px-5 mb-0 text-center text-xs">© 2023 Economic Space. All rights reserved.</p>
    </div>
</footer>
