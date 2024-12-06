<section class="bg-white max-w-3xl p-10 shadow-xl rounded-lg flex flex-col gap-4">
    <div class="">
        <h1 class="font-bold text-3xl">Bukti Pembayaran</h1>
        <p class="text-[#9B9B9B] text-sm">Lakukan pembayaran sebesar Rp120.000/sesi melalui scan QR di bawah ini.
            Upload bukti screenshot pembayaran dengan max size = 10 MB.</p>
    </div>
    <div class="flex gap-4">
        {{-- QR Section --}}
        <div class="space-y-4">
            <img src="{{ asset('assets/purchase/qr-econ-space.png') }}" alt="" class="object-contain">
            <div class="flex w-full justify-between">
                <img src="{{ asset('assets/purchase/shoopepay.png') }}" alt="" class="object-contain w-16">
                <img src="{{ asset('assets/purchase/gopay.png') }}" alt="" class="object-contain w-16">
                <img src="{{ asset('assets/purchase/bca.png') }}" alt="" class="object-contain w-16">

            </div>
        </div>

        {{-- Upload Section --}}
        <div>
            <label for="bukti_pembayaran" class="text-[#9B9B9B] text-sm">Upload Bukti Pembayaran</label>
            <div class="relative">
                <div
                    class="min-w-[300px] h-[200px] border-[5px] border-black rounded-lg flex flex-col items-center justify-center gap-3">
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
                <input type="file" name="bukti_pembayaran" id="bukti_pembayaran"
                    class="w-full border border-[#9B9B9B] opacity-0 rounded-lg p-2 h-[200px] absolute top-0">
            </div>
        </div>
    </div>
</section>
