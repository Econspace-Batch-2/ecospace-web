@extends('layout.layout')
@section('content')
    <main class="w-full min-h-[100vh] pb-20 flex items-center justify-start flex-col">
        <h1 class="text-3xl md:text-4xl text-black font-black text-center mb-8">Registration Tutoring Economic Space</h1>

        @include('modules.purchase.components.progress-tracker', [
            'step' => (int) request()->get('step', 1),
        ])
        @include('modules.purchase.components.informasiModal')

        @if (request()->get('step', 1) == 1)
            @include('modules.purchase.sections.universitasAsal')
        @elseif (request()->get('step', 1) == 2)
            @include('modules.purchase.sections.appointlet')
        @elseif (request()->get('step', 1) == 4)
            @include('modules.purchase.sections.bukti_pembayaran')
        @endif

        <div class="w-full flex justify-between md:max-w-[70vw] my-10">
            <button
                class="rounded-lg text-white bg-[#25D366] text-2xl font-semibold hover:shadow-lg transition-all px-10 py-5 h-[76px] flex items-center gap-4"><svg
                    width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.0755 0.580688C8.19522 0.580688 0.154452 8.32533 0.150968 17.8433C0.148645 20.887 0.975484 23.8576 2.54323 26.474L0 35.4194L9.50284 33.019C12.1462 34.4017 15.0854 35.123 18.0685 35.1209H18.0755C27.9557 35.1209 35.9965 27.3751 36 17.8572C36.0023 13.2469 34.1396 8.90714 30.7544 5.64508C27.3705 2.38185 22.8705 0.58185 18.0755 0.580688ZM18.0755 32.2049H18.0697C15.3964 32.2049 12.7742 31.5128 10.4865 30.2052L9.94065 29.894L4.30374 31.3177L5.80877 26.0222L5.45458 25.4799C3.96686 23.2109 3.17489 20.5565 3.17613 17.8433C3.17961 9.9314 9.864 3.49669 18.0813 3.49669C22.0599 3.49785 25.8004 4.99243 28.6142 7.70404C31.428 10.4157 32.976 14.0215 32.9737 17.856C32.9702 25.7679 26.287 32.2049 18.0743 32.2049H18.0755ZM26.2475 21.4572C25.7992 21.2424 23.5974 20.1984 23.1863 20.0532C22.7764 19.9104 22.4779 19.836 22.1795 20.268C21.8822 20.7 21.0228 21.672 20.7627 21.9589C20.5003 22.2469 20.239 22.2817 19.7907 22.0669C19.3425 21.8509 17.899 21.3957 16.1895 19.9255C14.8575 18.7828 13.9587 17.3706 13.6974 16.9375C13.4361 16.5066 13.6695 16.2732 13.8937 16.0584C14.0946 15.8668 14.3419 15.5555 14.5649 15.3035C14.7879 15.0515 14.8622 14.8715 15.0132 14.5835C15.1618 14.2967 15.0875 14.0435 14.9748 13.8287C14.8622 13.6115 13.968 11.4887 13.5929 10.6258C13.2306 9.78508 12.8613 9.89772 12.5861 9.88379C12.3248 9.87217 12.0275 9.86869 11.7267 9.86869C11.4306 9.86869 10.944 9.97669 10.5329 10.4087C10.123 10.8407 8.96516 11.8835 8.96516 14.0064C8.96516 16.1304 10.5701 18.1812 10.7942 18.4692C11.0183 18.756 13.9529 23.1144 18.4459 24.984C19.5143 25.4265 20.3481 25.6924 20.9996 25.8922C22.0726 26.2208 23.0493 26.1732 23.8204 26.0629C24.6797 25.9386 26.4705 25.02 26.8421 24.0132C27.216 23.0064 27.216 22.1424 27.1045 21.9624C26.9954 21.7824 26.6957 21.6744 26.2475 21.4572Z"
                        fill="white" />
                </svg>
                Contact Person
            </button>
            <div class="gap-10 flex">
                @if (request()->get('step', 1) > 1)
                    <button id="prevButton"
                        class="rounded-lg text-white bg-gray-500 text-2xl font-semibold hover:shadow-lg transition-all px-10 py-5 h-[76px] flex items-center gap-4">
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 5l-7 7 7 7" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        Previous
                    </button>
                @else
                    <button
                        class="rounded-lg text-[#FF8412] text-2xl font-semibold hover:shadow-lg transition-all border-[5px] border-[#FF8412] px-8 py-5 h-[76px]">
                        View Tutor Details
                    </button>
                @endif
                <button id="nextButton"
                    class="btn bg-[#FF8412] rounded-lg text-white text-2xl font-semibold hover:bg-[#FF8412]/90 transition-all border-0 px-16 py-5 h-[76px]">
                    Next
                </button>
            </div>
        </div>

        <input type="hidden" id="currentStep" value="{{ request()->get('step', 1) }}">
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let currentStep = parseInt(document.getElementById('currentStep').value);

            // Handle "Next" button click
            document.getElementById('nextButton').addEventListener('click', function() {
                currentStep = currentStep + 1;
                window.location.href = `/purchase?step=${currentStep}`;
            });

            // Handle "Previous" button click
            const prevButton = document.getElementById('prevButton');
            if (prevButton) {
                prevButton.addEventListener('click', function() {
                    currentStep = currentStep - 1;
                    window.location.href = `/purchase?step=${currentStep}`;
                });
            }
        });
    </script>
@endsection

