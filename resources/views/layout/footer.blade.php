<div class="p-10 pt-0">
    <div class="w-full -translate-y-10">
        <div class="bg-orange-500 rounded-xl px-10 py-5 md:py-3 flex flex-col md:flex-row items-center gap-4">
            <div class="flex-grow">
                <h3 class="text-white font-700 text-2xl mb-0">Punya pertanyaan lebih lanjut?</h3>
            </div>
            <a class="text-black w-full md:w-fit" href="https://chat.whatsapp.com/IDInUpM1avX7ogb091PLnW" target="_blank" aria-label="economic space whatsapp number">
                <button class="btn btn-outline w-full md:w-fit">
                    <img loading="lazy" class="w-16 max-h-10" src="{{ asset('assets/socmed/wa.svg') }}" alt="icon whatsapp">
                    <span>
                        Hubungi Kami
                    </span>
                </button>
            </a>
        </div>
    </div>

    <div class="flex flex-col-reverse md:flex-row justify-between">
        <div class="flex items-center mt-10 md:mt-0">
            <img loading="lazy" class="img-fluid icon-smile w-20" src="{{ asset('assets/home/smile.svg') }}"
                alt="economic space logo">
            <a class="ml-3" href="{{ route('viewTutors') }}">
                <button class="font-bold btn btn-black w-full text-lg">
                    Daftar Kelas
                </button>
            </a>
        </div>
        <div class="items-center pt-3 text-center md:text-right">
            <h3 class="font-bold text-2xl">
                Siap Buat Belajar bersama Economic Space?
            </h3>
            <p class="font-normal text-xl">
                Langsung Daftarkan diri & Persiapkan Masa Depanmu
            </p>
        </div>
    </div>
</div>

<footer class="bg-[#15172A]">
    <div class="bg-[#15172A] py-5 px-10">
        <div class="flex items-center w-full">
            <div class="flex flex-col md:flex-row mt-2 mb-3 justify-center md:justify-between w-full gap-4 ">
                <img loading="lazy" src="{{ asset('assets/socmed/logowhite.svg') }}" alt="economic space logo white"
                    class="logo-img mr-auto">

                <div class="flex flex-col md:flex-row gap-4">
                    <a target="_blank" href="https://bit.ly/TutoringEconomicSpace2024" class="w-full">
                        <button class="btn btn-primary text-xs md:text-sm w-full">
                            Join as Tutor / Mentor <i class="fa fa-external-link text-white ml-2"></i>
                        </button>
                    </a>
                    <a target="_blank" href="https://wa.link/fbua0a" class="w-full md:min-w-[300px]">
                        <button class="btn btn-primary w-full">
                            Interest for Partnership? <i class="fa fa-external-link text-white ml-2"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <p class="text-white mb-1 font-normal text-xs md:text-sm italic pl-5 text-center md:text-left">
            wf Private Enterprise Organization dedicated to Education Technology to support Post-School Life
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
