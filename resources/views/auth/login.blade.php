@extends('layout.layout')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full md:w-7/12 mt-5">
            <img src="{{asset('assets/socmed/logo_orange.svg')}}" alt="" class="mx-auto block logo-auth">
            <p class="text-center text-lg mt-3">Yuk, lanjutkan perjalananmu belajar di Economic Space dan <br class="hidden md:block">kembangkan skill ekonomimu!</p>
        </div>
    </div>
    <div class="flex justify-center mt-4">
        <div class="w-full md:w-6/12">
            <div class="border-2 rounded-3xl px-4 md:px-20 py-10">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- email --}}
                    <div class="flex flex-col">
                        <label for="email" class="form-label text-base">{{ __('Email Address') }}</label>
                        <x-input 
                            type="email"
                            name="email"
                            id="email"
                            placeholder="Enter your email address"
                            class="input @error('email') is-invalid @enderror"
                            required="true"
                            autocomplete="email"
                            autofocus="true"
                        />
                    </div>

                    @error('email')
                        <span class="text-sm font-normal text-red-400" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    {{-- password --}}
                    <div class="flex flex-col">
                        <label for="password" class="form-label text-base mt-4">{{ __('Password') }}</label>
                        <x-input 
                            type="password"
                            name="password"
                            id="password"
                            placeholder="Enter your password"
                            class="input @error('password') is-invalid @enderror"
                            required
                            autocomplete="current-password"
                        />
                    </div>

                    @error('password')
                        <span class="text-sm font-normal text-red-400" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <button class="btn text-white w-full rounded-xl mt-4" type="submit">
                        Submit
                    </button>

                    {{-- forget password --}}
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-center block text-base mt-4">
                            {{ __('Lupa Password?') }}
                        </a>
                    @endif

                    {{-- sign in --}}
                    <p class="text-center text-base mt-3">Belum punya akun? <a href="{{ route('register') }}" class="text-orange-500">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
@section('desktopBtn') Join Mentoring @endsection
@section('desktopTitle') Ingin mendapatkan ilmu di luar Akademik? @endsection
@section('desktopContent') Yuk mulai mentoring dengan expert di bidang lomba, karir, dll @endsection
@section('mobileTitle1') Ingin mendapatkan ilmu di @endsection
@section('mobileTitle2') luar Akademik? @endsection
@section('mobileContent') Yuk mulai mentoring dengan expert di bidang lomba, karir, dll @endsection
@section('mobileBtn') Join Mentoring @endsection

@endsection
