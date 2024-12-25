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

<footer class="bg-[#15172A]">
    <div class="bg-[#15172A] py-5 px-10">
        <div class="flex items-center w-full">
            <div class="flex flex-col md:flex-row mt-2 mb-3 justify-center md:justify-between w-full gap-4 ">
                <img loading="lazy" src="{{asset('assets/socmed/logowhite.svg')}}" alt="economic space logo white" class="logo-img mr-auto">

                <div class="flex flex-col md:flex-row gap-4">
                    <a target="_blank" href="https://bit.ly/TutoringEconomicSpace2024" class="w-full">
                        <button class="btn btn-primary text-xs md:text-sm w-full">
                            Join as Tutor / Mentor <i class="fa fa-external-link text-white ml-2"></i>
                        </button>
                    </a>
                    <a target="_blank" href="https://wa.link/fbua0a" class="w-full md:min-w-[300px]">
                        <button class="btn btn-primary w-full" >
                            Interest for Partnership? <i class="fa fa-external-link text-white ml-2"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <p class="text-white mb-1 font-normal text-xs md:text-sm italic pl-5 text-center md:text-left">
        wf    Private Enterprise Organization dedicated to Education Technology to support Post-School Life
        </p>
    </div>
    <div class="bg-gradient-to-b from-[#FF84124D]/30 to-[#FFE3C84D]/30 py-2">
        <div class="px-10 flex items-center justify-between">
            <p class="text-white mb-0 font-bold text-xs md:text-base">© 2024 Economic Space. All rights reserved.</p>
            {{-- <div class="flex items-center">
                <img loading="lazy" class="icon-insta mr-2 hover:cursor-pointer" src="{{asset('assets/socmed/insta.svg')}}" alt="instagram icon" onclick="redirectTo('https://www.instagram.com/economic.space/')">
                <img loading="lazy" class="icon-linkedin hover:cursor-pointer" src="{{asset('assets/socmed/linkedin.svg')}}" alt="linkedin icon" onclick="redirectTo('https://www.linkedin.com/company/economic-space/')">
            </div> --}}
        </div>
    </div>
</footer>

