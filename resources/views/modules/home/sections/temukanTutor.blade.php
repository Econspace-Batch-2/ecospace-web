<div class="w-full bg-black">
    <div class="mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 py-[20px]">
            <div class="flex flex-col gap-6 justify-center md:max-w-md mx-auto">
                <div class="px-5">
                    <h3 class="font-bold text-2xl max-[321px]:text-xl min-[765px]:text-[16px] lg:text-2xl  xl:text-3xl xl:leading-[44px] text-white md:whitespace-nowrap 2xl:text-4xl mb-3 text-center md:text-left">
                        TEMUKAN TUTOR KULIAH <br class="hidden md:block"> &amp; MENTOR KARIRMU
                    </h3>
                    <p class="text-white text-base font-normal min-[765px]:text-[12px]  2xl:text-xl text-center md:text-left">
                        Mengundang Talent Terbaik untuk siapkan<br class="hidden xl:block">kamu hadapi Akademik & Karir
                    </p>
                </div>
                
                <div class="w-full px-5">
                    <div class="bg-orange-500 flex items-center rounded-md py-3 mb-4">
                        <div class="flex items-center gap-2 lg:gap-4">
                            <span class="text-white text-2xl xl:text-[44px] font-black max-xl:pr-1 pl-2">1.</span>
                            <p class="text-black text-md xl:text-xl min-[765px]:text-[12px] font-normal">
                                Persiapan bersama <span class="font-semibold">Ahlinya</span><br class="hidden xl:block">
                                pada <span class="font-semibold">mata Kuliah</span> yang dipilih
                            </p>
                        </div>
                    </div>
                    <div class="bg-teal-400 flex items-center rounded-md py-3">
                        <div class="flex items-center gap-2 lg:gap-4">
                            <span class="text-white text-2xl xl:text-[44px] font-black pl-2">2.</span>
                            <p class="text-black text-md min-[765px]:text-[12px] xl:text-xl font-normal">
                                Memulai perjalanan <span class="font-semibold">lomba,</span><br class="hidden xl:block">
                                <span class="font-semibold">beasiswa, karir</span> dengan Mentor
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:col-span-2">
                <div class="hidden lg:block">
                    <div class="swiper sample-slider">
                        <div class="swiper-wrapper">
                            @foreach(['raihan', 'hanum', 'evan', 'anjar', 'joshua'] as $mentor)
                                <div class="swiper-slide {{ $loop->index % 2 == 0 ? 'bg-red-500' : 'bg-blue-500' }} rounded-xl mx-[3%]">
                                    <img loading="lazy" src="{{ asset('assets/mentor/' . $mentor . '.svg') }}" class="w-full h-full object-cover" alt="{{ ucfirst($mentor) }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="lg:hidden mt-5">
                    <div class="swiper mobile-slider">
                        <div class="swiper-wrapper">
                            @foreach(['raihan', 'hanum', 'evan', 'anjar', 'joshua'] as $mentor)
                                <div class="swiper-slide {{ $loop->index % 2 == 0 ? 'bg-red-500' : 'bg-blue-500' }} rounded-xl mx-[3%]">
                                    <img loading="lazy" src="{{ asset('assets/mentor/' . $mentor . '.svg') }}" class="w-full h-full object-cover" alt="{{ ucfirst($mentor) }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>