@extends('layout.layout')

@section('content')
    <div class="flex justify-center">
        <div class="">
            <img src="{{ asset('assets/socmed/logo_orange.svg') }}" alt="" class="mx-auto d-block logo-auth">
            <h1 class="text-center font-32 font-700 mt-3">Lupa Password</h1>
            <p class="text-center font-24 font-400 mt-3">Yuk, lanjutkan perjalananmu belajar di Economic Space dan <br
                    class="desktop">kembangkan skill ekonomimu!</p>
        </div>
    </div>
    <div class="flex justify-center mt-4">
        <div class="bg-white p-10 border-2 border-gray-200 rounded-xl max-w-[90vw] md:max-w-lg">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <label for="email" class="text-sm">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                    placeholder="Enter your registered email address">
                @error('email')
                    <span class="invalid-feedback text-sm font-medium" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <button type="submit" class="btn btn-black mt-5 w-full">
                    Send Password Reset Link
                </button>
            </form>
        </div>
    </div>
@endsection
