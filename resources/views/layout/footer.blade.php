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