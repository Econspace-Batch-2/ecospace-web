<section class="bg-white max-w-3xl p-10 shadow-xl rounded-lg flex flex-col gap-4">
    <div class="">
        <h1 class="font-bold text-3xl">Bukti Pembayaran</h1>
        <p class="text-[#9B9B9B] text-sm">Lakukan pembayaran sebesar Rp120.000/sesi melalui scan QR di bawah ini.
            Upload bukti screenshot pembayaran dengan max size = 10 MB.</p>
    </div>
    <div class="flex gap-4">
        {{-- QR Section --}}
        <div class="space-y-4">
            <img src="{{asset('assets/purchase/qr-econ-space.png')}}" alt="" class="object-contain">
            <div class="flex w-full justify-between">
                <img src="{{asset('assets/purchase/shoopepay.png')}}" alt="" class="object-contain w-16">
                <img src="{{asset('assets/purchase/gopay.png')}}" alt="" class="object-contain w-16">
                <img src="{{asset('assets/purchase/bca.png')}}" alt="" class="object-contain w-16">

            </div>
        </div>

        {{-- Upload Section --}}
        <div>
            <label for="bukti_pembayaran" class="text-[#9B9B9B] text-sm">Upload Bukti Pembayaran</label>
            <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="w-full border border-[#9B9B9B] rounded-lg p-2">
        </div>
    </div>
</section>
