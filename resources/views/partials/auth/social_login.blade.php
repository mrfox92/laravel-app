<div class="col-md-4 my-2">
    <div class="card">
        <div class="card-header text-center">{{ __("Iniciar con redes sociales") }}</div>
        <div class="card-body">
            <a class="btn btn-primary btn-block" href="{{ route('social_auth', ['driver' => 'facebook']) }}">
                {{ __("Facebook") }} <i class="bx bxl-facebook"></i>
            </a>
            <a class="btn btn-danger btn-block" href="{{ route('social_auth', ['driver' => 'google']) }}">
                {{ __("Google") }} <i class="bx bxl-google"></i>
            </a>
        </div>
    </div>
</div>