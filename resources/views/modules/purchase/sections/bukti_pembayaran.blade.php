<section class="bg-white p-10 shadow-xl rounded-lg flex flex-col gap-4">
    <div class="space-y-2">
        <h1 class="font-bold text-2xl">Bukti Pembayaran</h1>
        <p class="text-[#9B9B9B] text-sm">Lakukan pembayaran sebesar Rp120.000/sesi melalui scan QR di bawah ini.
            Upload bukti screenshot pembayaran dengan max size = 10 MB.</p>
    </div>
    <div class="flex flex-col md:flex-row gap-4">
        {{-- QR Section --}}
        <div class="space-y-4 min-w-full md:min-w-[400px]">
            <img src="{{ asset('assets/purchase/qr-econ-space.png') }}" alt="" class="object-contain w-full">
            <div class="flex w-full justify-between">
                <img src="{{ asset('assets/purchase/shoopepay.png') }}" alt="" class="object-contain w-16">
                <img src="{{ asset('assets/purchase/gopay.png') }}" alt="" class="object-contain w-16">
                <img src="{{ asset('assets/purchase/bca.png') }}" alt="" class="object-contain w-16">
            </div>
        </div>

        {{-- Upload Section --}}
        <div class="flex flex-col gap-8 w-full">
            <div>
                <div class="relative w-full">
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
                    <input data-payment-input type="file" name="pembayaran" id="input_pembayaran" accept="image/*"
                        class="w-full border border-[#9B9B9B] opacity-0 rounded-lg p-2 h-[200px] absolute top-0 cursor-pointer">
                </div>
                <button onclick="document.getElementById('input_pembayaran').click()"
                    class="btn bg-[#FF8412] rounded-lg text-white font-semibold hover:bg-[#FF8412]/90 duration-300 w-full mt-5">Choose
                    File</button>
            </div>
            <div id="bukti-pembayaran"></div>
        </div>
    </div>
</section>
<script>
    const inputPembayaran = document.getElementById('input_pembayaran');
    const buktiPembayaran = document.getElementById('bukti-pembayaran');

    inputPembayaran.addEventListener('change', (e) => {
        const file = e.target.files[0];
        if (file.size > 10 * 1024 * 1024) {
            alert('File size exceeds 10 MB');
            return;
        }
        const reader = new FileReader();
        reader.onload = () => {
            const title = document.createElement('div');
            title.textContent = file.name;
            title.classList.add('text-black', 'text-sm', 'font-medium', 'border-2', 'border-4', 'border-black',
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
                buktiPembayaran.innerHTML = '';
                inputPembayaran.value = '';
            });
            title.appendChild(x);
            buktiPembayaran.innerHTML = '';
            buktiPembayaran.appendChild(title);
        };
        reader.readAsDataURL(file);
    });
</script>
