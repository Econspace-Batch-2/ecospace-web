@extends('layout.layout')

@section('content')
    <div class="container mx-auto px-4 mb-20">
        <div class="flex justify-center">
            <div class="w-full md:w-7/12 mt-5">
                <img src="{{ asset('assets/socmed/logo_orange.svg') }}" alt="" class="mx-auto block logo-auth">
                <p class="text-center text-lg mt-3">Yuk, lanjutkan perjalananmu belajar di Economic Space dan <br
                        class="hidden md:block">kembangkan skill ekonomimu!</p>
            </div>
        </div>
        <div class="flex justify-center mt-4">
            <div class="w-full max-w-[90vw] md:max-w-lg bg-white p-10 rounded-xl border-2 border-gray-200">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- email --}}
                    <div class="flex flex-col">
                        <label for="email" class="form-label text-sm">{{ __('Email Address') }}</label>
                        <x-input type="email" name="email" id="email" placeholder="Enter your email address"
                            class="input @error('email') is-invalid @enderror" required="true" autocomplete="email"
                            autofocus="true" />
                    </div>

                    @error('email')
                        <span class="text-sm font-normal text-red-400" role="alert">
                            {{ $message }}
                        </span>
                    @enderror

                    {{-- password --}}
                    <div class="flex flex-col">
                        <label for="password" class="form-label text-sm mt-4">{{ __('Password') }}</label>
                        <x-input type="password" name="password" id="password" placeholder="Enter your password"
                            class="input @error('password') is-invalid @enderror" required
                            autocomplete="current-password" />
                    </div>

                    @error('password')
                        <span class="text-sm font-normal text-red-400" role="alert">
                            {{ $message }}
                        </span>
                    @enderror

                    <button class="btn btn-black w-full mt-4" type="submit">
                        Login
                    </button>

                    {{-- forget password --}}
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-center block text-sm mt-4">
                            {{ __('Lupa Password?') }}
                        </a>
                    @endif

                    {{-- sign in --}}
                    <p class="text-center text-sm mt-3">Belum punya akun? <a href="{{ route('register') }}"
                            class="text-orange-500">Sign Up</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection
