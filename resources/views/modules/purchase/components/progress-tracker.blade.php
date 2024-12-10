@props(['step' => 1])

<div class="flex items-center justify-center text-center w-full">
    @php
        $steps = [
            ['label' => 'Universitas', 'completed' => $step >= 1],
            ['label' => 'Jadwal Tutor', 'completed' => $step >= 2],
            ['label' => 'Data Diri', 'completed' => $step >= 3],
            ['label' => 'Pembayaran', 'completed' => $step >= 4],
            ['label' => 'Join WAG', 'completed' => $step >= 5],
        ];
    @endphp
    <ol style="box-shadow;"
        class="flex md:w-[80vw] lg:w-[60vw] 2xl:w-[40vw] w-full sm:shadow-[0px_4px_10px_10px_#00000033] sm:mx-5 bg-white px-5 sm:px-12 pt-8 pb-16 sm:rounded-lg text-xs sm:text-base">
        @foreach ($steps as $index => $stepItem)
            @if ($index == count($steps) - 1)
                @if ($index + 1 == $step)
                    <li class="flex items-end w-fit">
                        <div class="flex flex-col justify-center items-center z-10">
                            <svg class="sm:w-[60px] sm:h-[60px] w-[40px] h-[40px]" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30" cy="30" r="27.5" stroke="#FF8412" stroke-width="5" />
                                <circle cx="30" cy="30" r="10" fill="#FF8412" />
                            </svg>
                            <p class="text-[#FF8412] absolute translate-y-12 text-center font-medium">
                                {{ $stepItem['label'] }}
                            </p>
                        </div>
                    </li>
                @else
                    <li class="flex items-end w-fit">
                        <div class="flex flex-col justify-center items-center z-10">
                            <svg class="sm:w-[60px] sm:h-[60px] w-[40px] h-[40px]" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30" cy="30" r="27.5" stroke="#D5D5D5" stroke-width="5" />
                            </svg>
                            <p class="text-[#D5D5D5] absolute translate-y-12 text-center font-medium">
                                {{ $stepItem['label'] }}
                            </p>
                        </div>
                    </li>
                @endif
            @else
                @php
                    $borderColor = $steps[$index + 1]['completed']
                        ? 'after:border-orange-500 text-white'
                        : 'after:border-gray-200 text-gray-500';
                    
                    $translateAllignment = $index % 2 == 1 ? '-translate-y-12 sm:translate-y-12' : 'translate-y-12';
                @endphp
                <li
                    class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-4 after:inline-block {{ $borderColor }}">
                    <span
                        class="flex items-center justify-center w-10 h-10 rounded-full lg:h-12 lg:w-12 shrink-0 font-medium">
                        @if ($index + 1 == $step)
                            <div class="flex flex-col justify-center items-center z-10">
                                <svg class="sm:w-[60px] sm:h-[60px] w-[40px] h-[40px]" viewBox="0 0 60 60"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="30" cy="30" r="27.5" stroke="#FF8412" stroke-width="5" />
                                    <circle cx="30" cy="30" r="10" fill="#FF8412" />
                                </svg>
                                <p class="text-[#FF8412] absolute {{$translateAllignment}} text-center">{{ $stepItem['label'] }}
                                </p>
                            </div>
                        @elseif($index < $step)
                            <div class="flex flex-col justify-center items-center z-10">
                                <svg class="sm:w-[60px] sm:h-[60px] w-[40px] h-[40px]" viewBox="0 0 60 60"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="30" cy="30" r="30" fill="#FF8412" />
                                    <path
                                        d="M15.0004 35.1818L23.3244 41.4248C23.7531 41.7463 24.3591 41.6728 24.6984 41.258L44.5459 17"
                                        stroke="white" stroke-width="5" stroke-linecap="round" />
                                </svg>
                                <p class="absolute {{$translateAllignment}} text-[#FF8412] text-center">{{ $stepItem['label'] }}
                                </p>
                            </div>
                        @else
                            <div class="flex flex-col justify-center items-center z-10">
                                <svg class="sm:w-[60px] sm:h-[60px] w-[40px] h-[40px]" viewBox="0 0 60 60"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="30" cy="30" r="27.5" stroke="#D5D5D5" stroke-width="5" />
                                </svg>
                                <p class="text-[#D5D5D5] absolute {{$translateAllignment}} text-center">{{ $stepItem['label'] }}
                                </p>
                            </div>
                        @endif
                    </span>
                </li>
            @endif
        @endforeach
    </ol>
</div>
