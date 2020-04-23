@extends('layouts.app')

@section('content')
<!-- Start Forgot Password Area -->
<div class="forgot-password-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-8">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="forgot-password-content">
                <div class="row m-0">
                    <div class="col-lg-5 p-0">
                        <div class="image">
                            <img src="{{ asset('img/computer.png') }}" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-7 p-0">
                        <div class="forgot-password-form">
                            <h2>{{ __("Recupera tu contraseña") }}</h2>
                            <p class="mb-0">{{ __("Proporcione la dirección de correo electrónico que utilizaste para registrarte en Kücha.") }}</p>

                            <form method="POST" action="{{ route('password.email') }}" novalidate>
                                @csrf
                                <div class="form-group">
                                    <input
                                        type="email" 
                                        class="form-control @error('email') is-invalid @enderror"
                                        name="name" 
                                        id="name"
                                        value="{{ old('name') }}"
                                        required
                                        autocomplete="email"
                                        autofocus
                                        placeholder="{{ __("Correo electrónico") }}">
                                    <span class="label-title"><i class='bx bx-envelope'></i></span>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <button type="submit" class="forgot-password-btn">{{ __("Enviar enlace") }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Forgot Password Area -->
@endsection
