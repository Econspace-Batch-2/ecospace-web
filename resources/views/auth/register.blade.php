@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-7 mt-5">
            <img src="{{asset('assets/socmed/logo_orange.svg')}}" alt="" class="mx-auto d-block logo-auth">
            <h1 class="text-center font-32 font-700 mt-3">Register</h1>
            <p class="text-center font-24 font-400 mt-3">Yuk, lanjutkan perjalananmu belajar di Economic Space dan <br class="desktop">kembangkan skill ekonomimu!</p>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-12 col-md-6">
            <div class="p-5 auth-card mb-5">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                        {{-- name --}}
                        <label for="name" class="col-md-4 col-form-label font-21">{{ __('Full Name') }}</label>
                        <input id="name" type="text" class="form-control font-21 p-3 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter your full name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                        {{-- email --}}
                        <label for="email" class="col-md-4 col-form-label font-21 mt-4">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control font-21 p-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email address">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        {{-- phone --}}
                        <label for="phone" class="col-md-4 col-form-label font-21 mt-4">{{ __('Phone Number') }}</label>
                        <input id="phone" type="tel" class="form-control font-21 p-3 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Enter your phone number">

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        {{-- password --}}
                        <label for="password" class="col-md-4 col-form-label font-21 mt-4">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control font-21 p-3 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                        {{-- confirm --}}
                        <label for="password-confirm" class="col-md-4 col-form-label font-21 mt-4">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control font-21 p-3" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password">

                        <button type="submit" class="btn bg-black text-white w-100 mt-5 font-24 font-700">
                            {{ __('Sign Up') }}
                        </button>

                        {{-- login --}}
                    <p class="text-center font-21 mt-3">Sudah punya akun? <a href="{{ route('login') }}" class="text-orange">Log in</a></p>
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
