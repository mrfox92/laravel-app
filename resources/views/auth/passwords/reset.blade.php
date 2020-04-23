@extends('layouts.app')

@section('content')
<!-- Start Reset Password Area -->
<div class="reset-password-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="reset-password-content">
                <div class="row m-0">
                    <div class="col-lg-5 p-0">
                        <div class="image">
                            <img src="assets/img/computer.png" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-7 p-0">
                        <div class="reset-password-form">
                            <h2>{{ __("Reestablece tu contraseña") }}</h2>

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="password" class="form-control" name="name" placeholder="{{ __('Ingresa una nueva contraseña') }}">
                                    <span class="label-title"><i class='bx bx-lock'></i></span>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" name="email" placeholder="{{ __('confirma tu nueva contraseña') }}">
                                    <span class="label-title"><i class='bx bx-lock-alt'></i></span>
                                </div>

                                <button type="submit" class="reset-password-btn">Reset my Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Reset Password Area -->
{{-- reset password laravel --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end reset password laravel --}}
@endsection
