@extends('layouts.app')

@section('content')

<div class="pl-5 pr-5 my-5">
    <div class="row justify-content-center">
        @forelse ($servicesCategory as $service)
            <div class="col-md-4">
                <div class="card mb-30 p-0" style="cursor: pointer;">
                    <div class="card-body">
                        <img src="{{ $service->pathAttachment() }}" alt="image">
                    </div>

                    <div class="card-body p-4">
                        <h5 class="card-title">{{ $service->name }}</h5>
                        <hr>
                        <span class="badge badge-success my-2">{{ $service->category->name }}</span>
                        <i class="float-right" data-feather="heart"></i>
                        <p class="mb-2">{{ Str::limit( $service->description, 100 ) }}</p>

                        <small class="text-muted">{{ $service->seller->user->name }}</small>

                        <a href="#" class="btn btn-primary btn-block mt-2">{{ __("Ver en detalle") }}</a>
                    </div>
                </div>
            </div>        
        @empty
            <div class="alert alert-dark">
                {{ __("No hay ningún servicio disponible") }}
            </div>
        @endforelse
    </div>

    <div class="row justify-content-center my-5">
        {{ $servicesCategory->links() }}
    </div>
</div>


<!-- Breadcrumb Area -->
{{-- <div class="breadcrumb-area">
    <h1>Dashboard</h1>

    <ol class="breadcrumb">
        <li class="item"><a href="dashboard-analytics.html"><i class='bx bx-home-alt'></i></a></li>

        <li class="item">Dashboard</li>

        <li class="item">Analytics</li>
    </ol>
</div> --}}
<!-- End Breadcrumb Area -->


@endsection
