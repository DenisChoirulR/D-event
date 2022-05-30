@extends('layouts.auth.auth-design')

@section('content')
<div class="container-login100" style="background-image: url('assets/images/forest-dark-red.jpg');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
        <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
            @csrf
            <span class="login100-form-title p-b-37">
                Sign In
            </span>

            <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
                <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                     @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
                <input id="password" class="input100 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <span class="focus-input100"></span>
            </div>

            <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn">
                    Sign In
                </button>
            </div>
        </form>
            <br>
            <div class="text-center">
                <a href="/" class="txt2 hov1 pull-left">
                    Back To Home
                </a>
            </div>
            <div class="text-center">
                <a href="/register-option" class="txt2 hov1 pull-right">
                    Sign Up
                </a>
            </div>
    </div>
</div>
@endsection
