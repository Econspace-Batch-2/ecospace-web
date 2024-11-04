@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-7 mt-5">
            <img src="{{asset('assets/socmed/logo_orange.svg')}}" alt="" class="mx-auto d-block logo-auth">
            <h1 class="text-center font-32 font-700 mt-3">Login</h1>
            <p class="text-center font-24 font-400 mt-3">Yuk, lanjutkan perjalananmu belajar di Economic Space dan <br class="desktop">kembangkan skill ekonomimu!</p>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-12 col-md-6">
            <div class="p-3 p-md-5 auth-card mb-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    {{-- email --}}
                    <label for="email" class="form-label font-21">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control font-21 p-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email address">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    {{-- password --}}
                    <label for="password" class="form-label font-21 mt-4">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control font-21 p-3 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    {{-- remember me --}}
                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label font-21" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    {{-- submit --}}
                    <button type="submit" class="btn bg-black text-white w-100 font-24 font-700 mt-4">
                        {{ __('Login') }}
                    </button>

                    {{-- forget password --}}
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-center d-block font-21 mt-4 text-orange">
                            {{ __('Lupa Password?') }}
                        </a>
                    @endif

                    {{-- sign in --}}
                    <p class="text-center font-21 mt-3">Belum punya akun? <a href="{{ route('register') }}" class="text-orange">Sign in</a></p>

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
