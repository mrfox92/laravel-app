@extends('layouts.app')

@section('content')
    <div class="pl-5 pr-5">
        <div class="row justify-content-center">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre/Título</th>
                        <th>Descripción</th>
                        <th>Estado</th>
                        <th>Estado/disponibilidad</th>
                        <th>Fecha término</th>
                        <th>
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($services as $service)
                    <tr>
                        <td>
                            <img
                                class="rounded-circle"
                                src="{{ $service->pathAttachment() }}" 
                                alt="{{ $service->name }}"
                                style="height:50px; width:50px;"
                            >
                        </td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>
                            @switch($service->status)
                                @case(1)
                                    <span class="badge badge-primary text-white">
                                        {{ __("Publicado") }}
                                    </span>
                                    @break
                                @case(2)
                                    <span class="badge badge-warning text-muted">
                                        {{ __("Pendiente") }}
                                    </span>
                                    @break
                                @case(3)
                                    <span class="badge badge-danger text-white">
                                        {{ __("Rechazado") }}
                                    </span>
                                    @break
                                    
                            @endswitch
                        </td>
                        <td>
                            @switch($service->av_status)
                                @case(1)
                                    <span class="badge badge-success">
                                        {{ __("Disponible") }}
                                    </span>
                                    @break
                                @case(2)
                                    <span class="badge badge-primary">
                                        {{ __("En Marcha") }}
                                    </span>
                                    @break
                                @case(3)
                                    <span class="badge badge-secondary">
                                        {{ __("Finalizada") }}
                                    </span>
                                    @break
                            @endswitch
                        </td>
                        <td>{{ $service->finished_at ?: 'No definida' }}</td>
                        <td colspan="3">
                            <a href="{{ route('services.show', ['slug' => $service->slug]) }}" class="btn btn-success mb-1"><i class="bx bx-show-alt"></i></a>
                            <a href="{{ route('services.edit', ['slug' => $service->slug]) }}" class="btn btn-primary mb-1"><i class="bx bx-edit"></i></a>
                            <a href="#" class="btn btn-danger mb-1"><i class="bx bxs-trash"></i></a>
                        </td>
                    </tr>
                        
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="row justify-content-center">
            {{ $services->links() }}
        </div>
    </div>
@endsection