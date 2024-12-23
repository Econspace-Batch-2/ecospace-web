<section style="box-shadow: 0px 4px 10px 10px #00000033;" class="bg-white p-6 md:p-10 rounded-lg md:min-w-[70vw] max-w-[95vw] max-md:mx-5">
    <form class="grid lg:grid-cols-2 gap-x-7 gap-y-4 md:gap-y-8" method="POST" action="{{ route('register') }}">
        @csrf

        {{-- name --}}
        <div class="flex flex-col">
            <label for="name" class="text-black md:text-4xl text-2xl font-bold">Nama Lengkap <span
                    class="text-[#D42727]">*</span></label>
            <p class="text-[#9B9B9B] text-xs md:text-sm font-medium my-2">Isi dengan nama lengkap perwakilan pendaftar.
            </p>
            <input id="name" type="text"
                class="form-control border-2 border-black rounded-[8px] px-6 py-3 @error('name') is-invalid @enderror"
                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- asal jurusan --}}
        <div class="flex flex-col">
            <label for="asal_jurusan" class="text-black md:text-4xl text-2xl font-bold">Asal Jurusan <span
                    class="text-[#D42727]">*</span></label>
            <p class="text-[#9B9B9B] text-xs md:text-sm font-medium my-2">Isi dengan asal jurusan perwakilan pendaftar.
            </p>
            <input id="asal_jurusan" type="text"
                class="form-control border-2 border-black rounded-[8px] px-6 py-3 @error('asal_jurusan') is-invalid @enderror"
                name="asal_jurusan" value="{{ old('asal_jurusan') }}" required autocomplete="asal_jurusan">

            @error('asal_jurusan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- link whatsapp --}}
        <div class="flex flex-col">
            <label for="whatsapp" class="text-black md:text-4xl text-2xl font-bold">Link Whatsapp <span
                    class="text-[#D42727]">*</span></label>
            <p class="text-[#9B9B9B] text-xs md:text-sm font-medium my-2">Isi dengan wa.me/[nomor perwakilan pendaftar].
            </p>
            <input id="whatsapp" type="text"
                class="form-control border-2 border-black rounded-[8px] px-6 py-3 @error('whatsapp') is-invalid @enderror"
                name="whatsapp" value="{{ old('whatsapp') }}" required autocomplete="whatsapp">

            @error('whatsapp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- email --}}
        <div class="flex flex-col">
            <label for="name" class="text-black md:text-4xl text-2xl font-bold">Alamat Email <span
                    class="text-[#D42727]">*</span></label>
            <p class="text-[#9B9B9B] text-xs md:text-sm font-medium my-2">Isi dengan alamat email perwakilan pendaftar.
            </p>
            <input id="email" type="email"
                class="form-control border-2 border-black rounded-[8px] px-6 py-3 @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- nama dosen mata kuliah --}}
        <div class="flex flex-col">
            <label for="dosen_mata_kuliah" class="text-black md:text-4xl text-2xl font-bold">Nama Dosen Mata Kuliah <span
                    class="text-[#D42727]">*</span></label>
            <p class="text-[#9B9B9B] text-xs md:text-sm font-medium my-2">Isi dengan nama dosen pengajar pada mata kuliah tersebut.</p>
            <input id="dosen_mata_kuliah" type="text"
                class="form-control border-2 border-black rounded-[8px] px-6 py-3 @error('dosen_mata_kuliah') is-invalid @enderror"
                name="dosen_mata_kuliah" value="{{ old('dosen_mata_kuliah') }}" required autocomplete="dosen_mata_kuliah">

            @error('dosen_mata_kuliah')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

    </form>
</section>
