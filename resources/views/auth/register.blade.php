@extends('layouts.app')

@section('content')
    <div class="page-content--bge5">
        <div class="container" style="margin-bottom: 2cm;">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="{{ url('/') }}">
                            <h3>TREEBO LIBRARY</h3>
                            <h4>ADMINISTRATOR REGISTER</h4>
                        </a>
                    </div>
                    <div class="login-form" style="margin-top: 15px;">
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <button type="submit" class="au-btn au-btn--block au-btn--green m-b-20" style="margin-top: 30px;">
                                {{ __('Register') }}
                            </button>
                            <div class="social-login-content">
                                <div class="social-button">
                                    <a href="{{ url('/') }}" class="au-btn au-btn--block au-btn--blue2"> 
                                        <center>Kembali ke Homepage</center>
                                    </a>
                                </div>
                            </div>
                            <div class="register-link">
                                <p>
                                    @if (Route::has('register'))
                                        Kembali ke halaman  
                                        <a href="{{ route('login') }}">{{ __('Login Admin?') }}</a>  
                                    @endif
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
