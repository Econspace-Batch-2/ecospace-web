@php
    $components = [
        [
            'route' => url('/tutors'),
            'bg' => 'orange-500',
            'text-color' => 'black',
            'face' => 'face1.svg',
            'title' => 'TUTOR SERVICE',
            'desc' => 'Perkuliahan jadi mudah bersama Expert yang membantu pembelajaran akademik kalian',
            'bg2' => 'orange',
            'label' => 'Minimal IPK 4 :) Ingin Belajar Lebih Dalam'
        ],
        [
            'route' => url('/soon'),
            'bg' => 'black',
            'text-color' => 'white',
            'face' => 'face2.svg',
            'title' => 'BOOTCAMP',
            'desc' => 'Belajar Ilmu Spesifik & Mendalam untuk pengembangan skill beyond kehidupan akademik',
            'bg2' => 'black',
            'label' => 'Never say never untuk Pembelajaran Baru'
        ],
        [
            'route' => url('/soon'),
            'bg' => 'blue',
            'text-color' => 'black',
            'face' => 'face3.svg',
            'title' => 'MENTORING',
            'desc' => 'Keterbatasan akses bukan menjadi tantangan lagi, tetapi kesempatan buat belajar sama orang dalam',
            'bg2' => 'blue',
            'label' => 'Dapatkan Akses 1-on-1 sama Ahlinya'
        ]
    ]    
@endphp

<div class="container-fluid px-5 py-5 mt-5 max-w-[100vw] overflow-hidden">
    <div class="w-full">
        <div class="text-center flex flex-col gap-4">
            <h2 class="text-3xl md:text-5xl font-black"><b>Belajar - Eksplorasi {{" "}}<span class="text-orange-500"><br class="md:hidden">Raih Impianmu</span></b></h2>
            <p class="text-xl lg:text-2xl font-normal">Satu Platform untuk Semua <span class="md:hidden"><br></span>Kebutuhan Pengembangan Dirimu</p>
        </div>

        <!-- Desktop view without Swiper -->
        <div class="hidden md:block py-3">
            <div class="flex flex-col md:flex-row gap-5">
                @foreach ($components as $item)
                    <div class="w-full md:w-1/3">
                        <a href="{{$item['route']}}">
                            <div data-aos="fade-down" data-aos-duration="{{1000 * ($loop->index + 1)}}" class="hovered">
                                <div class="bg-{{$item['bg']}} rounded-full text-center mx-auto py-2 w-[90%] lg:w-[70%] translate-y-6">
                                    <h4 class="text-xl lg:text-2xl font-black text-{{$item['text-color']}}">{{$item['title']}}</h4>
                                </div>
                                <div class="border-2 border-black rounded-3xl text-center mx-auto px-3 py-10 lg:py-20 min-h-[350px]">
                                    <img loading="lazy" src="{{asset('assets/home/'.$item['face'])}}" alt="face icon" class="mx-auto d-block img-fluid max-h-[100px] lg:max-h-[200px]">
                                    <h3 class="text-2xl md:text-3xl text-{{$item['bg']}} font-black"><b>{{$item['title']}}</b></h3>
                                    <p id="label-service" class="text-sm lg:text-lg font-normal">{{$item['desc']}}</p>
                                </div>
                                <div class="bg-{{$item['bg2']}} rounded-2xl xl:rounded-full flex flex-col lg:flex-row py-2 md:py-3 px-5 gap-3 w-[90%] md:w-[80%] mx-auto -translate-y-10 items-center">
                                    <img loading="lazy" src="{{asset('assets/home/circle.svg')}}" alt="decorative image" class="img-fluid align-self-center max-h-[30px]">
                                    <p class="text-base text-center lg:text-left lg:text-base font-normal mb-0 text-{{$item['text-color']}}">{{$item['label']}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Mobile view with Swiper -->
        <div class="md:hidden py-3">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($components as $item)
                        <div class="swiper-slide w-full px-10">
                            <a href="{{$item['route']}}">
                                <div class="hovered">
                                    <div class="bg-{{$item['bg']}} rounded-full text-center mx-auto py-2 w-[90%] translate-y-6">
                                        <h4 class="text-xl font-black text-{{$item['text-color']}}">{{$item['title']}}</h4>
                                    </div>
                                    <div class="border-2 border-black rounded-3xl text-center mx-auto px-3 py-10 min-h-[350px]">
                                        <img loading="lazy" src="{{asset('assets/home/'.$item['face'])}}" alt="face icon" class="mx-auto img-fluid max-h-[100px]">
                                        <h3 class="text-2xl text-{{$item['bg']}} font-black">{{$item['title']}}</h3>
                                        <p class="text-lg font-normal">{{$item['desc']}}</p>
                                    </div>
                                    <div class="bg-{{$item['bg2']}} rounded-2xl py-2 px-5 w-[90%] mx-auto -translate-y-10 text-center">
                                        <img loading="lazy" src="{{asset('assets/home/circle.svg')}}" alt="decorative image" class="img-fluid max-h-[30px] mx-auto mb-2">
                                        <p class="text-base font-normal text-{{$item['text-color']}}">{{$item['label']}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
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
                // larger screens can display more slides if desired
                768: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                }
            }
        });
    });
</script>
