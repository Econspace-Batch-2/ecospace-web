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
        <div class="col-12 col-md-6">
            <div class="p-3 p-md-5 auth-card mb-5">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}" class="bg-white p-10 max-w-sm">
                    @csrf
                    <label for="email" class="form-label font-21">{{ __('Email Address') }}</label>
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
    </div>
@endsection
