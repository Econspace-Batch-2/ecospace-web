@extends('layout.layout')

@section('content')
    <div class="w-full">
        <div class="bg-white p-10 max-w-sm m-auto mt-10 shadow-smooth rouded-xl">
            <div class="font-medium text-xl">{{ __('Reset Password') }}</div>

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group row mb-3">
                    <label for="email" class="text-sm text-gray-800">{{ __('Email Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="input form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="password" class="text-sm text-gray-800">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="input form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="password-confirm"
                        class="text-sm text-gray-800">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="input form-control" name="password_confirmation"
                            required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary w-full">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
