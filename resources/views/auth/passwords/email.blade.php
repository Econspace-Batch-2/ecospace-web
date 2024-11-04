@extends('layout.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-7 mt-5">
            <img src="{{asset('assets/socmed/logo_orange.svg')}}" alt="" class="mx-auto d-block logo-auth">
            <h1 class="text-center font-32 font-700 mt-3">Lupa Password</h1>
            <p class="text-center font-24 font-400 mt-3">Yuk, lanjutkan perjalananmu belajar di Economic Space dan <br class="desktop">kembangkan skill ekonomimu!</p>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <div class="col-12 col-md-6">
            <div class="p-3 p-md-5 auth-card mb-5">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                    <label for="email" class="form-label font-21">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your registered email address">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <button type="submit" class="btn bg-black text-white w-100 font-24 font-700 mt-4">
                        {{ __('Send Password Reset Link') }}
                    </button>
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
