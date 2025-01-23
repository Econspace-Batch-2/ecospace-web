<section class="bg-white p-6 md:p-10 rounded-lg w-full shadow-smooth border-2 border-gray-100">
    <form data-personal-form class="grid lg:grid-cols-2 gap-x-7 gap-y-4 md:gap-y-8">
        @csrf

        {{-- name --}}
        <div class="flex flex-col">
            <label for="name" class="text-black text-xl font-semibold">Nama Lengkap <span
                    class="text-[#D42727]">*</span></label>
            <p class="text-[#9B9B9B] text-xs md:text-sm font-medium my-2">Isi dengan nama lengkap perwakilan pendaftar.
            </p>
            <input id="name" type="text"
                class="form-control input @error('name') is-invalid @enderror"
                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- asal jurusan --}}
        <div class="flex flex-col">
            <label for="asal_jurusan" class="text-black text-xl font-semibold">Asal Jurusan <span
                    class="text-[#D42727]">*</span></label>
            <p class="text-[#9B9B9B] text-xs md:text-sm font-medium my-2">Isi dengan asal jurusan perwakilan pendaftar.
            </p>
            <input id="asal_jurusan" type="text"
                class="form-control input @error('asal_jurusan') is-invalid @enderror"
                name="asal_jurusan" value="{{ old('asal_jurusan') }}" required autocomplete="asal_jurusan">

            @error('asal_jurusan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- link whatsapp --}}
        <div class="flex flex-col">
            <label for="whatsapp_link" class="text-black text-xl font-semibold">Link Whatsapp <span
                    class="text-[#D42727]">*</span></label>
            <p class="text-[#9B9B9B] text-xs md:text-sm font-medium my-2">Isi dengan wa.me/[nomor perwakilan pendaftar].
            </p>
            <input id="whatsapp_link" type="text"
                class="form-control input @error('whatsapp_link') is-invalid @enderror"
                name="whatsapp_link" value="{{ old('whatsapp_link') }}" required autocomplete="whatsapp_link">

            @error('whatsapp_link')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- email --}}
        <div class="flex flex-col">
            <label for="email" class="text-black text-xl font-semibold">Alamat Email <span
                    class="text-[#D42727]">*</span></label>
            <p class="text-[#9B9B9B] text-xs md:text-sm font-medium my-2">Isi dengan alamat email perwakilan pendaftar.
            </p>
            <input id="email" type="email"
                class="form-control input @error('email') is-invalid @enderror"
                name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        {{-- nama dosen mata kuliah --}}
        <div class="flex flex-col">
            <label for="lecturer_name" class="text-black text-xl font-semibold">Nama Dosen Mata Kuliah
                <span class="text-[#D42727]">*</span></label>
            <p class="text-[#9B9B9B] text-xs md:text-sm font-medium my-2">Isi dengan nama dosen pengajar pada mata
                kuliah tersebut.</p>
            <input id="lecturer_name" type="text"
                class="form-control input @error('lecturer_name') is-invalid @enderror"
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
