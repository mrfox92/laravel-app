@extends('layouts.app')

@section('content')
    <div class="pl-5 pr-5">
        <services-list :labels="{{ json_encode([
            'name'          =>  __("Nombre"),
            'description'   =>  __("Descripción"),
            'status'        =>  __("Estado"),
            'activate_deactivate'   =>  __("Activar / Desactivar"),
            'reject'        =>  __("Rechazar"),
            'approve'       =>  __("Aprobar")
        ]) }}"

        route="{{ route('admin.services_json') }}"
        >

        </services-list>
    </div>
@endsection