@extends('layouts.app')

@section('content')

<div class="login-container">
    <div class="login-form">
        <div class=login-logo>
            <img class="nav-logo" src="img/esquilax_logo_small.svg">
        </div>
        <div class=login-fields>


            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="login-fields-item">

                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>


                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div>
                <div class="login-fields-item">

                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>


                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>


                <div class="login-fields-item">

                    <label class="form-check-label" for="remember">
                        {{ __('Recordar mi sesión') }}
                    </label>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>


                </div>

                <div class="login-fields-item">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Te olvidaste la contraseña?') }}
                            </a>
                        @endif
                    </div>

            </form>




            </div>
        </div>

    <div class="login-showcase">



    </div>


</div>
@endsection
