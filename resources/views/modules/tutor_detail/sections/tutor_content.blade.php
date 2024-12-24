<div class="mt-4 px-5 md:px-20 w-full">
    <div class="flex flex-col lg:grid grid-cols-1 md:grid-cols-3 gap-6">
        {{-- sebelah kiri --}}
        <div class="col-span-2">
            <h2 class="text-orange text-3xl font-extrabold">Tutor Material Discussion</h2>
            <p class="mt-10">
                <b class="">
                    Referensi Pembelajaran:
                </b>
                @foreach (json_decode($subject->subject_references) as $reference)
                    {{ $reference }}
                @endforeach
            </p>

            <div class="flex flex-col gap-4">
                <div class="flex my-3">
                    <a href="">
                        <div class="border-b-2 border-orange-500 text-orange-500 px-3">
                            UNAIR
                        </div>
                    </a>
                    <a href="">
                        <div class="border-b-2 border-orange-500 text-orange-500 px-3 opacity-20">
                            UNAIR
                        </div>
                    </a>
                </div>
                <div class="space-y-4">
                    @foreach ([1,2,3] as $accordion)
                        <div class="collapse collapse-arrow bg-base-200">
                            <input type="radio" name="my-accordion-2" checked="checked" />
                            <div class="collapse-title text-xl font-medium">Click to open this one and close others</div>
                            <div class="collapse-content">
                                <p>hello</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="space-y-6 col-span-1">
            <div>
                {{-- card pertama: Tutor Background --}}
                <div class="rounded-2xl p-8 space-y-4 text-black shadow-smooth">
                    <div>
                        <h3 class="text-2xl font-extrabold">Tutor Background</h3>
                        <p class="text-sm font-normal">Asal Universitas Tutor:</p>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        @php $counter = 0 @endphp
                        @foreach (json_decode($subject->subject_univ) as $univ)
                            @if ($counter < 4)
                                <img loading="lazy" src="{{ asset('assets/univ/' . $univ) }}" class="h-16"
                                    alt="logo univ">
                            @endif
                            @php $counter++ @endphp
                        @endforeach
                    </div>
                    <h5 class="text-lg font-700 mt-4">Additional Information</h5>
                    <ul class="text-xs leading-relaxed list-disc pl-4">
                        <li class="font-20 font-400 text-justify">Bagi Mahasiswa dari Universitas selain dari List
                            diatas tetap dapat <span class="font-20 font-700 text-red">"BELAJAR BERSAMA
                                DISINI"</span></li>
                        <li class="font-20 font-400 text-justify">Customer dapat memilih Tutor dari <span
                                class="font-700">Asal Univ / Nama Tutor</span></li>
                    </ul>
                </div>

                {{-- card kedua --}}
                <div class="rounded-2xl mt-4 p-8 text-black shadow-smooth space-y-4">
                    <h3 class="font-900 font-36">Benefit for You</h3>
                    <div class="flex gap-2">
                        <img loading="lazy" src="{{ asset('assets/tutorDetail/benefit1.svg') }}" class="h-16"
                            alt="benefit icon">
                        <p class="text-sm font-medium">1. </p>
                        <p class="text-sm font-medium" style="height: 100%">Expert Tutor yang
                            telah diseleksi dengan kapabilitias pengetahuan yang baik</p>
                    </div>
                    <div class="flex gap-2 mt-2">
                        <img loading="lazy" src="{{ asset('assets/tutorDetail/benefit2.svg') }}" class="h-16"
                            alt="benefit icon">
                        <p class="text-sm font-medium">2. </p>
                        <p class="text-sm font-medium" style="height: 100%">Sistem Mahasiswa
                            to Mahasiswa, sehingga bahasan materi menjadi lebih tepat & relatable</p>
                    </div>
                    <div class="flex gap-2 mt-2">
                        <img loading="lazy" src="{{ asset('assets/tutorDetail/benefit3.svg') }}" class="h-16"
                            alt="benefit icon">
                        <p class="text-sm font-medium">3. </p>
                        <p class="text-sm font-medium" style="height: 100%">Konsultasi Materi
                            / Tugas dan Persiapan Ujian menjadi lebih mudah bersama Tutor</p>
                    </div>

                    <div class="bg-lightblue rounded-xl p-4 flex items-center gap-4">
                        <p class="text-lg font-700 mb-1 max-w-[80px]">1x Tutor Session:</p>
                        <ul>
                            <li class="font-medium text-sm leading-tight">90 Minutes (Online / Onsite)</li>
                            <li class="font-medium text-sm">Akses pada PPT Modul Subtopik</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
