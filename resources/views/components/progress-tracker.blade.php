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
    <ol class="flex w-3/4">
        @foreach ($steps as $index => $stepItem)
            @if ($index == count($steps) - 1)
                @if ($index + 1 == $step)
                    <li class="flex items-end w-full">
                        <div class="flex flex-col justify-center items-center z-10">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30" cy="30" r="27.5" stroke="#FF8412" stroke-width="5" />
                                <circle cx="30" cy="30" r="10" fill="#FF8412" />
                            </svg>
                            <p class="text-black absolute translate-y-12 text-center">{{ $stepItem['label'] }}
                            </p>
                        </div>
                    </li>
                @else
                    <li class="flex items-end w-full">
                        <div class="flex flex-col justify-center items-center z-10">
                            <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="30" cy="30" r="27.5" stroke="#D5D5D5" stroke-width="5" />
                            </svg>
                            <p class="text-black absolute translate-y-12 text-center">{{ $stepItem['label'] }}
                            </p>
                        </div>
                    </li>
                @endif
            @else
                @php
                    $borderColor = $steps[$index + 1]['completed']
                        ? 'border-orange-500 text-white '
                        : 'border-gray-200 text-gray-500 ';
                @endphp
                <li
                    class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:{{ $borderColor }} after:border-4 after:inline-block">
                    <span class="flex items-center justify-center w-10 h-10 rounded-full lg:h-12 lg:w-12 shrink-0">
                        @if ($index + 1 == $step)
                            <div class="flex flex-col justify-center items-center z-10">
                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="30" cy="30" r="27.5" stroke="#FF8412" stroke-width="5" />
                                    <circle cx="30" cy="30" r="10" fill="#FF8412" />
                                </svg>
                                <p class="text-black absolute translate-y-12 text-center">{{ $stepItem['label'] }}</p>
                            </div>
                        @elseif($index < $step)
                            <div class="flex flex-col justify-center items-center z-10">
                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="30" cy="30" r="30" fill="#FF8412" />
                                    <path
                                        d="M15.0004 35.1818L23.3244 41.4248C23.7531 41.7463 24.3591 41.6728 24.6984 41.258L44.5459 17"
                                        stroke="white" stroke-width="5" stroke-linecap="round" />
                                </svg>
                                <p class="text-black absolute translate-y-12 text-center">{{ $stepItem['label'] }}</p>
                            </div>
                        @else
                            <div class="flex flex-col justify-center items-center z-10">
                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="30" cy="30" r="27.5" stroke="#D5D5D5" stroke-width="5" />
                                </svg>
                                <p class="text-black absolute translate-y-12 text-center">{{ $stepItem['label'] }}</p>
                            </div>
                        @endif
                    </span>
                </li>
            @endif
        @endforeach
    </ol>
</div>
