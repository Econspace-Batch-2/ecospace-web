<section style="box-shadow: 0px 4px 10px 10px #00000033;"
    class="bg-white p-6 md:p-10 rounded-lg md:min-w-[70vw] max-w-[95vw] max-md:mx-5">
    <form data-personal-form class="grid lg:grid-cols-2 gap-x-7 gap-y-4 md:gap-y-8">
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
            <label for="whatsapp_link" class="text-black md:text-4xl text-2xl font-bold">Link Whatsapp <span
                    class="text-[#D42727]">*</span></label>
            <p class="text-[#9B9B9B] text-xs md:text-sm font-medium my-2">Isi dengan wa.me/[nomor perwakilan pendaftar].
            </p>
            <input id="whatsapp_link" type="text"
                class="form-control border-2 border-black rounded-[8px] px-6 py-3 @error('whatsapp_link') is-invalid @enderror"
                name="whatsapp_link" value="{{ old('whatsapp_link') }}" required autocomplete="whatsapp_link">

            @error('whatsapp_link')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- email --}}
        <div class="flex flex-col">
            <label for="email" class="text-black md:text-4xl text-2xl font-bold">Alamat Email <span
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
            <label for="lecturer_name" class="text-black md:text-4xl text-2xl font-bold">Nama Dosen Mata Kuliah
                <span class="text-[#D42727]">*</span></label>
            <p class="text-[#9B9B9B] text-xs md:text-sm font-medium my-2">Isi dengan nama dosen pengajar pada mata
                kuliah tersebut.</p>
            <input id="lecturer_name" type="text"
                class="form-control border-2 border-black rounded-[8px] px-6 py-3 @error('lecturer_name') is-invalid @enderror"
                name="lecturer_name" value="{{ old('lecturer_name') }}" required
                autocomplete="lecturer_name">

            @error('lecturer_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

    </form>
</section>
