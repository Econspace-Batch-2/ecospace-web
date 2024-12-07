@extends('layout.layout')

@section('content')
    <div class="flex flex-col justify-center items-center gap-8">

        <img src="{{ asset('assets/socmed/logo_orange.svg') }}" alt="" class="mx-auto d-block logo-auth">
        <p class="text-center text-xl max-w-[884px]">Ayo, bergabunglah sekarang! Daftarkan akunmu dan eksplorasi dunia ekonomi yang menarik di platform kami</p>

        <div class="border-[1.5px] mt-2 border-[#00000040] rounded-[26px] md:w-[600px] w-[300px] lg:w-[800px] p-10 mb-5">
            <form class="p-5 mb-5 flex flex-col gap-6" method="POST" action="{{ route('register') }}">
                @csrf
                {{-- name --}}
                <input id="name" type="text"
                    class="form-control border-[1.5px] border-[#00000040] rounded-[14px] px-6 py-3 @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                    placeholder="Nama Lengkap">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                {{-- email --}}
                <input id="email" type="email"
                    class="form-control border-[1.5px] border-[#00000040] rounded-[14px] px-6 py-3 @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email"
                    placeholder="Enter your email address">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                {{-- phone --}}
                <div>
                    <div
                        class="text-[#343434] border-r-[1.5px] rounded-[14px] w-[70px] px-6 py-3 flex items-center justify-center absolute border-[#00000040]">
                        +62</div>
                    <input id="phone" type="tel"
                        class="form-control border-[1.5px] w-full border-[#00000040] rounded-[14px] pl-20 pr-6 py-3 @error('phone') is-invalid @enderror"
                        name="phone" value="{{ old('phone') }}" required autocomplete="phone"
                        placeholder="Enter your phone number">
                </div>

                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                {{-- password --}}
                <input id="password" type="password"
                    class="form-control border-[1.5px] border-[#00000040] rounded-[14px] px-6 py-3 @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password" placeholder="Enter your password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror


                {{-- confirm --}}
                <input id="password-confirm" type="password"
                    class="form-control border-[1.5px] border-[#00000040] rounded-[14px] px-6 py-3"
                    name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password">

                <button type="submit" class="btn text-white rounded-xl" >
                    {{ __('Sign Up') }}
                </button>

                {{-- login --}}
                <p class="text-center text-base mt-3">Sudah punya akun? <a href="{{ route('login') }}" class="text-orange">Log in</a></p>
            </form>
        </div>
    </div>

    <!-- FOOTER -->
@section('desktopBtn')
    Join Mentoring
@endsection
@section('desktopTitle')
    Ingin mendapatkan ilmu di luar Akademik?
@endsection
@section('desktopContent')
    Yuk mulai mentoring dengan expert di bidang lomba, karir, dll
@endsection
@section('mobileTitle1')
    Ingin mendapatkan ilmu di
@endsection
@section('mobileTitle2')
    luar Akademik?
@endsection
@section('mobileContent')
    Yuk mulai mentoring dengan expert di bidang lomba, karir, dll
@endsection
@section('mobileBtn')
    Join Mentoring
@endsection
    <!-- FOOTER -->
@section('desktopBtn')
    Join Mentoring
@endsection
@section('desktopTitle')
    Ingin mendapatkan ilmu di luar Akademik?
@endsection
@section('desktopContent')
    Yuk mulai mentoring dengan expert di bidang lomba, karir, dll
@endsection
@section('mobileTitle1')
    Ingin mendapatkan ilmu di
@endsection
@section('mobileTitle2')
    luar Akademik?
@endsection
@section('mobileContent')
    Yuk mulai mentoring dengan expert di bidang lomba, karir, dll
@endsection
@section('mobileBtn')
    Join Mentoring
@endsection


@endsection
