    <div class="mt-4 md:px-20 w-full">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            {{-- sebelah kiri --}}
            <div class="col-span-2">
                <h2 class="text-orange text-2xl font-extrabold">Tutor Material Discussion</h2>
                <p>
                    <b class="">
                        Referensi Pembelajaran:
                    </b>
                    @foreach (json_decode($subject->subject_references) as $reference)
                        {{ $reference }}
                    @endforeach
                </p>

                <div class="collapse bg-base-200">
                    <input type="radio" name="my-accordion-1" checked="checked" />
                    <div class="collapse-title text-xl font-medium">Click to open this one and close others</div>
                    <div class="collapse-content">
                        <p>hello</p>
                    </div>
                </div>
                <div class="collapse bg-base-200">
                    <input type="radio" name="my-accordion-1" />
                    <div class="collapse-title text-xl font-medium">Click to open this one and close others</div>
                    <div class="collapse-content">
                        <p>hello</p>
                    </div>
                </div>
                <div class="collapse bg-base-200">
                    <input type="radio" name="my-accordion-1" />
                    <div class="collapse-title text-xl font-medium">Click to open this one and close others</div>
                    <div class="collapse-content">
                        <p>hello</p>
                    </div>
                </div>

                <div class="accordion mt-4" id="accordionPanelsStayOpenExample">
                    @foreach ($subject->topics as $index => $topic)
                        <div class="accordion-item mb-3">
                            <h2 class="accordion-header" id="panelsStayOpen-heading{{ $topic->topic_number }}">
                                <button class="accordion-button font-24 font-500 {{ $index === 0 ? '' : 'collapsed' }}"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapse{{ $topic->topic_number }}"
                                    aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                    aria-controls="panelsStayOpen-collapse{{ $topic->topic_number }}">
                                    {{ $topic->topic_number }}. {{ $topic->topic_title }}
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapse{{ $topic->topic_number }}"
                                class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                aria-labelledby="panelsStayOpen-heading{{ $topic->topic_number }}">
                                <div class="accordion-body p-0 px-4 pt-3">
                                    <ol style="list-style-position: inside; padding-left: 0;" type="a">
                                        @foreach (json_decode($topic->topic_content) as $content)
                                            <li class="font-22 font-400">{{ $content }}</li>
                                        @endforeach
                                    </ol>
                                    <p class="font-22 font-400"><span class="font-700">Objective:
                                        </span>{{ $topic->topic_objective }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="space-y-6 col-span-1">
                <div>
                    {{-- card pertama: Tutor Background --}}
                    <div class="border-2 rounded-2xl p-8 space-y-4 text-black">
                        <div>
                            <h3 class="text-2xl font-extrabold">Tutor Background</h3>
                            <p class="text-sm font-normal">Asal Universitas Tutor:</p>
                        </div>

                        <div class="flex flex-wrap gap-4">
                            @php $counter = 0 @endphp
                            @foreach (json_decode($subject->subject_univ) as $univ)
                                @if ($counter < 4)
                                    <img loading="lazy" src="{{ asset('assets/univ/' . $univ) }}"
                                        class="img-fluid img-univ" alt="logo univ">
                                @endif
                                @php $counter++ @endphp
                            @endforeach
                        </div>
                        <h5 class="font-26 font-700 mt-4">Additional Information</h5>
                        <ul class="">
                            <li class="font-20 font-400 text-justify">Bagi Mahasiswa dari Universitas selain dari List
                                diatas tetap dapat <span class="font-20 font-700 text-red">"BELAJAR BERSAMA
                                    DISINI"</span></li>
                            <li class="font-20 font-400 text-justify">Customer dapat memilih Tutor dari <span
                                    class="font-700">Asal Univ / Nama Tutor</span></li>
                        </ul>
                    </div>

                    {{-- card kedua --}}
                    <div class="border-2 rounded-2xl mt-4 p-8 text-black">
                        <h3 class="font-900 font-36">Benefit for You</h3>
                        <div class="flex gap-2">
                            <img loading="lazy" src="{{ asset('assets/tutorDetail/benefit1.svg') }}"
                                class="img-fluid img-benefit" alt="benefit icon">
                            <p class="text-xs font-medium">1. </p>
                            <p class="text-xs font-medium" style="height: 100%">Expert Tutor yang
                                telah diseleksi dengan kapabilitias pengetahuan yang baik</p>
                        </div>
                        <div class="flex gap-2 mt-2">
                            <img loading="lazy" src="{{ asset('assets/tutorDetail/benefit2.svg') }}"
                                class="img-fluid img-benefit" alt="benefit icon">
                            <p class="text-xs font-medium">2. </p>
                            <p class="text-xs font-medium" style="height: 100%">Sistem Mahasiswa
                                to Mahasiswa, sehingga bahasan materi menjadi lebih tepat & relatable</p>
                        </div>
                        <div class="flex gap-2 mt-2">
                            <img loading="lazy" src="{{ asset('assets/tutorDetail/benefit3.svg') }}"
                                class="img-fluid img-benefit" alt="benefit icon">
                            <p class="text-xs font-medium">3. </p>
                            <p class="text-xs font-medium" style="height: 100%">Konsultasi Materi
                                / Tugas dan Persiapan Ujian menjadi lebih mudah bersama Tutor</p>
                        </div>

                        <div class="bg-lightblue rounded-xl p-4 flex">
                            <p class="font-28 font-700 mb-1">1x Tutor Session:</p>
                            <ul style="list-style-position: inside; padding-left: 0;">
                                <li class="font-medium text-xs">90 Minutes (Online / Onsite)</li>
                                <li class="font-medium text-xs">Akses pada PPT Modul Subtopik</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
