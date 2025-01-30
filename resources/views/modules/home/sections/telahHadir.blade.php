<div class="pt-20 mx-auto text-center overflow-hidden">
    <p class="font-extrabold text-[28px] sm:text-[40px] lg:text-[60px] text-black leading-tight">
        Telah Hadir Sejak <span class="text-[#FC8025]">2023</span>
    </p>
    <p class="font-normal text-[16px] sm:text-[22px] lg:text-[32px] mt-1 leading-tight">
        Dengan tutor dari <span class="font-bold">universitas ternama</span> di Indonesia
    </p>
    <div class="mt-3 flex max-md:flex-col justify-between items-center relative px-4 md:px-6 lg:px-12">
        <img src="{{ asset('assets/home/asset-kiri.svg') }}" class="absolute overflow-hidden left-0 max-xl:hidden" />
        <div class="flex max-md:flex-col md:justify-between gap-y-6 md:gap-y-0 mx-auto relative">
            <div class="flex gap-y-2 flex-col max-w-[240px] sm:max-w-[280px] lg:max-w-sm relative px-4 md:px-8">
                <div class="h-[80px] sm:h-[100px] lg:h-[145px] relative">
                    <img src="{{ asset('assets/home/edukasi.svg') }}"
                        class="max-w-[80px] sm:max-w-[100px] lg:max-w-[145px] absolute left-1/2 -translate-x-1/2" />
                </div>
                <p class="text-[#81E0D8] font-extrabold text-5xl sm:text-6xl lg:text-8xl leading-none">
                    <span class="count-up" data-target="250">
                        0
                    </span>
                    +
                </p>
                <p
                    class="text-[#1A1A1A] text-[14px] sm:text-[18px] md:text-[15px] lg:text-[20px] whitespace-nowrap leading-tight">
                    Total Mahasiswa <br> dalam Tutor & Mentor Session
                </p>
                <div class="hidden md:block absolute right-0 bottom-0 h-[40%] w-[1px] bg-[#212121C9]""></div>
            </div>
            <div class="flex gap-y-2 flex-col max-w-[240px] sm:max-w-[280px] lg:max-w-sm relative px-4 md:px-8">
                <div class="h-[80px] sm:h-[100px] lg:h-[145px] relative">
                    <img src="{{ asset('assets/home/orang-nyapa.svg') }}"
                        class="max-w-[80px] sm:max-w-[100px] lg:max-w-[145px] absolute left-1/2 -translate-x-1/2" />
                </div>
                <p class="text-[#81E0D8] font-extrabold text-5xl sm:text-6xl lg:text-8xl leading-none">
                    <span class="count-up" data-target="70">
                        0
                    </span>
                    +
                </p>
                <p
                    class="text-[#1A1A1A] text-[14px] sm:text-[18px] md:text-[15px] lg:text-[20px] whitespace-nowrap leading-tight">
                    Sesi Tutor & Mentor <br>telah sukses dilakukan
                </p>
                <div class="hidden md:block absolute right-0 bottom-0 h-[40%] w-[1px] bg-[#212121C9]"></div>
            </div>
            <div class="flex gap-y-2 flex-col max-w-[240px] sm:max-w-[280px] lg:max-w-sm relative px-4 md:px-8">
                <div class="h-[80px] sm:h-[100px] lg:h-[145px] relative">
                    <img src="{{ asset('assets/home/rating.svg') }}"
                        class="max-w-[80px] sm:max-w-[100px] lg:max-w-[145px] absolute left-1/2 -translate-x-1/2" />
                </div>
                <p class="text-[#81E0D8] font-extrabold text-5xl sm:text-6xl lg:text-8xl leading-none">
                    <span class="count-up" data-target="90">
                        0
                    </span>
                    +
                </p>
                <p
                    class="text-[#1A1A1A] text-[14px] sm:text-[18px] md:text-[15px] lg:text-[20px] whitespace-nowrap leading-tight">
                    Tingkat Kepuasan <br> Penggunaan Layanan
                </p>
            </div>
        </div>
        <img src="{{ asset('assets/home/asset-kanan.svg') }}" class="absolute overflow-hidden right-0 max-xl:hidden" />
    </div>
    <div class="flex gap-x-2 sm:gap-x-4 md:gap-x-6 lg:gap-x-8 justify-center py-8 md:py-12 px-4 overflow-x-auto">
        <img src="{{ asset('assets/home/unair.svg') }}"
            class="w-[40px] sm:w-[80px] md:w-[100px] lg:max-w-[240px] object-contain" />
        <img src="{{ asset('assets/home/ugm.svg') }}"
            class="w-[40px] sm:w-[80px] md:w-[100px] lg:max-w-[240px] object-contain" />
        <img src="{{ asset('assets/home/unbraw.svg') }}"
            class="w-[40px] sm:w-[80px] md:w-[100px] lg:max-w-[240px] object-contain" />
        <img src="{{ asset('assets/home/binus.svg') }}"
            class="w-[40px] sm:w-[80px] md:w-[100px] lg:max-w-[240px] object-contain" />
        <img src="{{ asset('assets/home/ui.svg') }}"
            class="w-[40px] sm:w-[80px] md:w-[100px] lg:max-w-[240px] object-contain" />
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        function countUp(element, target, duration) {
            let start = 0;
            let range = target - start;
            let startTime = null;

            function updateCounter(timestamp) {
                if (!startTime) startTime = timestamp;
                let progress = timestamp - startTime;
                let step = Math.min(progress / duration, 1);
                element.innerText = Math.floor(step * range);

                if (step < 1) {
                    requestAnimationFrame(updateCounter);
                } else {
                    element.innerText = target; // Ensure it ends on the exact target value
                }
            }

            requestAnimationFrame(updateCounter);
        }

        function startCounting(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    let targetNumber = parseInt(entry.target.dataset.target, 10);
                    countUp(entry.target, targetNumber, 1500);
                    observer.unobserve(entry.target);
                }
            });
        }

        let observer = new IntersectionObserver(startCounting, {
            threshold: 0.5
        });

        document.querySelectorAll(".count-up").forEach(element => {
            observer.observe(element);
        });
    });
</script>
