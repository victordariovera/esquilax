@extends('layouts.app')
@section('content')



<div class="login">
    <div class="login_title">
        <img src="img/esquilax_logo_small.svg">esquilax
     </div>


     <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form__group field">
            <input type="text" class="form__field" placeholder="Nombre name="name" id='name' required />
            <label for="name" class="form__label">Nombre:</label>
          </div>

     <div class="form__group field">
         <input type="email" class="form__field" placeholder="Email" name="email" id='email' required />
         <label for="name" class="form__label">Email:</label>
       </div>

       <div class="form__group field">
         <input type="password" class="form__field" placeholder="password" name="password" id='password' required />
         <label for="name" class="form__label">Password:</label>
       </div>

       <div class="form__group field">
        <input type="password" class="form__field" placeholder="Confirmá tu Password" name="password_confirmation" id='password_confirmation' required />
        <label for="name" class="form__label">Confirmá tu Password:</label>
      </div>

       <div class="form__group field">
           <input class="btn_std" type="submit" value="Ingresar">
       </div>

    </form>
</div>
<div class="login_art">

</div>


<div class="login-container">
    <div class="login-form">
        <div class=login-logo>
            <img class="nav-logo" src="img/esquilax_logo_small.svg">
        </div>
        <div class=login-fields>



                <form method="POST" action="{{ route('register') }}">
                    @csrf


                    <div class="login-fields-item">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="login-fields-item">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="login-fields-item">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="login-fields-item">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>


                    <div class="login-fields-item">
                        <button type="submit">
                            {{ __('Register') }}
                        </button>
                    </div>


                </form>





            </div>
        </div>

    <div class="login-showcase">



    </div>


</div>
@endsection

