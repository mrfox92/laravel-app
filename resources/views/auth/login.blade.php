@extends('layouts.app')

@section('content')


<div class="login-area my-2">
    <div class="row justify-content-center">
        <div class="col-md-8 my-2">
            <div class="login-form">
                {{-- <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="image"></a>
                </div> --}}

                <h2>{{ __("Bienvenido") }}</h2>

                <form method="POST" action="{{ route('login') }}" novalidate>
                    @csrf
                    <div class="form-group">
                        <input 
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            placeholder="{{ __('Correo electrónico') }}"
                            autofocus
                        >
                        <span class="label-title"><i class='bx bx-user'></i></span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            name="password" 
                            required
                            autocomplete="current-password"
                            placeholder="{{ __('Contraseña') }}"
                        >
                        <span class="label-title"><i class='bx bx-lock'></i></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="remember-forgot">
                            <label for="remember" class="checkbox-box"> {{ __("Recordarme") }}
                                <input 
                                    type="checkbox"
                                    name="remember"
                                    id="remember"
                                    {{ old('remember') ? 'checked' : '' }}
                                >
                                <span class="checkmark"></span>
                            </label>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="forgot-password">
                                    {{ __("¿Problemas con tu contraseña?") }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <button type="submit" class="login-btn">
                        {{ __('Iniciar sesión') }}
                    </button>

                    <p class="mb-0">{{ __("¿No tienes una cuenta?") }} <a href="{{ route('register') }}">{{ __("Regístrate") }}</a></p>
                </form>
            </div>
        </div>
        @include('partials.auth.social_login')
    </div>
</div>

@endsection
