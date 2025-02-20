<section class="bg-white p-10 rounded-lg flex flex-col gap-5 shadow-smooth border-2 border-gray-100 w-full">
    <div class="w-full">
        <h1 class="font-bold text-2xl max-md:text-center  text-black">Jadwal Appointlet</h1>
        <p class="w-full text-[#9B9B9B] text-sm md:text-base font-medium mt-4 text-justify">Pilih mata kuliah dan jadwal yang tersedia dengan click card atau akses link-nya. Setelah memilih jadwal, <span class="text-[#D42727]">WAJIB SCREENSHOT</span> sebagai bukti pengisian.</p>
    </div>

    {{-- Appointlet Link --}}
    <div id="appointlet" class="grid lg:grid-cols-2 gap-x-6 gap-y-8">
        @foreach ($appointlets as $appointlet)
        
            @if ($appointlet->link)
                <div class="bg-white md:p-8 p-4 rounded-lg cursor-pointer hover:shadow-lg transition-all duration-300 border-2 md:border-4 border-[#FF8412]"
                    onclick="window.open('{{ $appointlet->link }}', '_blank')">
                    <h1 class="font-semibold text-lg md:text-2xl text-[#FF8412]">{{ $appointlet->title }}</h1>
                    <p class="text-[#FF8412] text-sm font-medium">{{ $appointlet->link }}</p>
                </div>
            @endif
        @endforeach
    </div>

    {{-- Bukti Screenshot --}}
    <h1 class="font-bold text-2xl max-md:text-center text-black">Bukti Screenshot Appointlet</h1>
    <p class="text-[#9B9B9B] text-sm text-center">Contoh bukti screenshot yang benar:</p>
    <img src="{{ asset('assets/purchase/appointlet-example.png') }}" alt="" class="object-contain">

    {{-- Bukti Pembayaran --}}

    {{-- Upload Section --}}
    <p for="bukti_pembayaran" class="text-[#9B9B9B] text-sm md:mb-4">Upload bukti screenshot Appointlet dengan max
        size = 10 MB.</p>
    <div class="grid lg:grid-cols-2 gap-8">
        <div class="space-y-4">
            <div class="relative md:w-full">
                <div
                    class="w-full h-[200px] border-[5px] border-black rounded-lg flex flex-col items-center justify-center gap-3">
                    <div class="border-[3px] border-black p-2 rounded-md">
                        <svg width="69" height="65" viewBox="0 0 69 65" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M34.5 4L32.7322 2.23223L34.5 0.464465L36.2678 2.23223L34.5 4ZM37 62.5C37 63.8807 35.8807 65 34.5 65C33.1193 65 32 63.8807 32 62.5L37 62.5ZM0.232235 34.7322L32.7322 2.23223L36.2678 5.76777L3.76777 38.2678L0.232235 34.7322ZM36.2678 2.23223L68.7678 34.7322L65.2322 38.2678L32.7322 5.76777L36.2678 2.23223ZM37 4L37 62.5L32 62.5L32 4L37 4Z"
                                fill="black" />
                        </svg>
                    </div>
                    <p class="text-base text-center text-black">Drag file to upload</p>
                </div>
                <input data-appointlet-input type="file" name="input_appointlet" id="input_appointlet" accept="image/*"
                    class="w-full border border-[#9B9B9B] opacity-0 rounded-lg p-2 h-[200px] absolute top-0 cursor-pointer">
            </div>
            <button onclick="document.getElementById('input_appointlet').click()" class="btn btn-primary w-full" >
                Choose File</button>
        </div>
        <div id="bukti-appointlet"></div>
    </div>
    <script>
        const inputAppointlet = document.getElementById('input_appointlet');
        const buktiAppointlet = document.getElementById('bukti-appointlet');

        inputAppointlet.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file.size > 10 * 1024 * 1024) {
                alert('File size exceeds 10 MB');
                return;
            }
            const reader = new FileReader();
            reader.onload = () => {
                const title = document.createElement('div');
                title.textContent = file.name;
                title.classList.add('text-black', 'text-sm', 'font-medium', 'border-2', 'md:border-4',
                    'border-black',
                    'rounded-lg', 'py-2', 'px-4', 'flex', 'items-center', 'justify-between');
                const x = document.createElement('div');
                x.classList.add('cursor-pointer', 'transition-all', 'duration-300');
                x.innerHTML = `
                    <svg width="20" height="20" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30 2.5L3 29.5" stroke="#D42727" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3 2.5L30 29.5" stroke="#D42727" stroke-width="4.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                `;
                x.addEventListener('click', () => {
                    buktiAppointlet.innerHTML = '';
                    inputAppointlet.value = '';
                });
                title.appendChild(x);
                buktiAppointlet.innerHTML = '';
                buktiAppointlet.appendChild(title);
            };
            reader.readAsDataURL(file);
        });
    </script>
</section>
