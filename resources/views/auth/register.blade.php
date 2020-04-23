@extends('layouts.app')

@section('content')
<!-- Start Register Area -->
<div class="register-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="register-form">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="image"></a>
                </div>

                <h2>{{ __("Regístrate") }}</h2>

                <form method="POST" action="{{ route('register') }}" novalidate>
                    @csrf
                    <div class="form-group">
                        <input
                            type="text" 
                            class="form-control @error('name') is-invalid @enderror"
                            name="name"
                            id="name"
                            value="{{ old('name') }}" 
                            required
                            autocomplete="name"
                            autofocus
                            placeholder="{{ __('Nombre') }}"
                        >
                        <span class="label-title"><i class='bx bx-user'></i></span>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            name="email"
                            id="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            placeholder="{{ __("Correo electrónico") }}"
                        >
                        <span class="label-title"><i class='bx bx-envelope'></i></span>
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
                            id="password"
                            placeholder="{{ __("Contraseña") }}"
                            required
                            autocomplete="new-password"
                        >
                        <span class="label-title"><i class='bx bx-lock'></i></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <div class="terms-conditions">
                            <label class="checkbox-box">
                                Al registrarse usted acepta los <a href="#">Términos y condiciones </a> y las <a href="#">Políticas de privacidad</a> de Kücha.
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="register-btn">{{ __("Registrar") }}</button>

                    <p class="mb-0">{{ __("¿Ya tienes una cuenta?") }} <a href="{{ route('login') }}">Iniciar sesión</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Register Area -->
@endsection
