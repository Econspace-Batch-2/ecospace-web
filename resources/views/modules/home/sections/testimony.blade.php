<!-- TESTIMONIAL -->
<main class="px-10 md:px-20 px-4 py-10 max-w-[100vw] overflow-x-hidden">
    <div class="text-center">
        <h2 class="text-4xl font-bold">Apa Kata Mereka?</h2>
        <p class="text-lg mt-2">
            Mereka sudah mencoba - Yuk <span class="text-orange-500 font-semibold">Gabung dengan Ratusan Mahasiswa</span> Lainnya
        </p>
    </div>

    <!-- Desktop View -->
    <div class="hidden md:grid grid-cols-3 gap-6 mt-10">
        <!-- Card 1 -->
        <div class="border border-gray-800 rounded-xl p-6">
            <h5 class="text-xl font-bold mb-4">Belajar jadi Seru</h5>
            <img src="{{ asset('assets/testi/testi1.svg') }}" alt="Testimonial 1" class="rounded-lg mb-4">
            <p class="text-sm mb-4">
                Wah, nggak nyangka banget deh belajar Ekonomi jadi lebih seru berkat bimbingan Kak Ali! Selain suasana yang asik, 
                penjelasannya juga super jelas dan gampang dimengerti.
            </p>
            <div class="flex items-center justify-between">
                <div>
                    <p class="font-semibold">Ester Meralda</p>
                    <p class="text-sm">Akuntansi 23 - UNAIR</p>
                </div>
                <img src="{{ asset('assets/univ/unair.svg') }}" alt="UNAIR Logo" class="w-10 h-10">
            </div>
        </div>
        <!-- Card 2 -->
        <div class="border border-blue-500 rounded-xl p-6">
            <h5 class="text-xl font-bold mb-4">Lebih Pede di Kelas</h5>
            <img src="{{ asset('assets/testi/testi2.svg') }}" alt="Testimonial 2" class="rounded-lg mb-4">
            <p class="text-sm mb-4">
                Kelas Kak Raihan dalam akuntansi adalah petualangan seru! Kak Raihan mengajar dengan sangat baik, sabar, 
                dan penjelasan yang apik. Latihan soalnya sangat membantu.
            </p>
            <div class="flex items-center justify-between">
                <div>
                    <p class="font-semibold">Shalima Nur Kusumastuti</p>
                    <p class="text-sm">Akuntansi 23 - UGM</p>
                </div>
                <img src="{{ asset('assets/univ/ugm.svg') }}" alt="UGM Logo" class="w-10 h-10">
            </div>
        </div>
        <!-- Card 3 -->
        <div class="border border-red-500 rounded-xl p-6">
            <h5 class="text-xl font-bold mb-4">Asyik Bareng Temen</h5>
            <img src="{{ asset('assets/testi/testi3.svg') }}" alt="Testimonial 3" class="rounded-lg mb-4">
            <p class="text-sm mb-4">
                Belajar Akuntansi jadi seru dan menyenangkan berkat Kak Imel! Kakak ini nggak hanya enak ngajarnya, tapi 
                juga baik banget karena mau berbagi ilmu dan sharing ke kita.
            </p>
            <div class="flex items-center justify-between">
                <div>
                    <p class="font-semibold">Nabila Putri Melati</p>
                    <p class="text-sm">Akuntansi 23 - UNAIR</p>
                </div>
                <img src="{{ asset('assets/univ/unair.svg') }}" alt="UNAIR Logo" class="w-10 h-10">
            </div>
        </div>
    </div>

    <!-- Mobile View Carousel -->
    <div class="md:hidden mt-10">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="border border-gray-800 rounded-xl p-6">
                        <h5 class="text-xl font-bold mb-4">Belajar jadi Seru</h5>
                        <img src="{{ asset('assets/testi/testi1.svg') }}" alt="Testimonial 1" class="rounded-lg mb-4">
                        <p class="text-sm mb-4">
                            Wah, nggak nyangka banget deh belajar Ekonomi jadi lebih seru berkat bimbingan Kak Ali!
                        </p>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="font-semibold">Ester Meralda</p>
                                <p class="text-sm">Akuntansi 23 - UNAIR</p>
                            </div>
                            <img src="{{ asset('assets/univ/unair.svg') }}" alt="UNAIR Logo" class="w-10 h-10">
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="border border-blue-500 rounded-xl p-6">
                        <h5 class="text-xl font-bold mb-4">Lebih Pede di Kelas</h5>
                        <img src="{{ asset('assets/testi/testi2.svg') }}" alt="Testimonial 2" class="rounded-lg mb-4">
                        <p class="text-sm mb-4">
                            Kelas Kak Raihan dalam akuntansi adalah petualangan seru!
                        </p>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="font-semibold">Shalima Nur Kusumastuti</p>
                                <p class="text-sm">Akuntansi 23 - UGM</p>
                            </div>
                            <img src="{{ asset('assets/univ/ugm.svg') }}" alt="UGM Logo" class="w-10 h-10">
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="border border-red-500 rounded-xl p-6">
                        <h5 class="text-xl font-bold mb-4">Asyik Bareng Temen</h5>
                        <img src="{{ asset('assets/testi/testi3.svg') }}" alt="Testimonial 3" class="rounded-lg mb-4">
                        <p class="text-sm mb-4">
                            Belajar Akuntansi jadi seru dan menyenangkan berkat Kak Imel!
                        </p>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="font-semibold">Nabila Putri Melati</p>
                                <p class="text-sm">Akuntansi 23 - UNAIR</p>
                            </div>
                            <img src="{{ asset('assets/univ/unair.svg') }}" alt="UNAIR Logo" class="w-10 h-10">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                }
            }
        });
    });
</script>
