@extends('layouts.app')

@section('content')
    @inject('regions', 'App\Services\Regions')
    
    <div class="pl-5 pr-5">
        <form
            method="POST"
            action="{{ ! $service->id ? route('services.store') : route('services.update', ['service' => $service->id]) }}"
            novalidate
            enctype="multipart/form-data"
        >
            @if( $service->id )
                @method('PUT')
            @endif

            @csrf

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">
                            {{ __("Información del servicio") }}
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label">
                                    {{ __("Nombre") }}
                                </label>
                                <div class="col-md-8">

                                    <input 
                                        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        name="name"
                                        id="name"
                                        value="{{ old('name') ?: $service->name }}"
                                        required
                                        autofocus
                                        placeholder="{{ __("Ingrese un nombre o título") }}"
                                    >

                                    @if( $errors->has('name') )
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label">
                                    {{ __("Descripción") }}
                                </label>
                                <div class="col-md-8">

                                    <textarea
                                        class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                        name="description"
                                        id="description"
                                        required
                                        rows="8"
                                        placeholder="{{ __("Ingrese una descripción...") }}"
                                    >{{ old('description') ?: $service->description }}</textarea>

                                    @if( $errors->has('description') )
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif

                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="type_id" class="col-md-4 col-form-label">
                                    {{ __("Tipo servicio") }}
                                </label>
                                <div class="col-md-8">
                                    <select class="form-control{{ $errors->has('type_id') ? ' is-invalid' : '' }}" name="type_id" id="type_id">
                                        <option value="">Seleccione tipo</option>
                                        @foreach (\App\Type::pluck('name', 'id') as $id => $type)
                                            <option {{ (int) old('type_id') === $id || $service->type_id === $id ? 'selected' : '' }} value="{{ $id }}">
                                                {{ $type }}
                                            </option>
                                        @endforeach

                                        @if ( $errors->has('type_id') )
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('type_id') }}</strong>
                                            </span>
                                        @endif

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label">
                                    {{ __("Precio (Opcional)") }}
                                </label>
                                <div class="col-md-8">
                                    <input
                                        class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                                        name="price"
                                        value="{{ old('price') ?: $service->price }}"
                                        id="price"
                                        placeholder="{{ __('Ingrese un precio') }}"
                                    >
                                    @if ( $errors->has('price') )
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="quantity" class="col-md-4 col-form-label">
                                    {{ __("Cantidad (Opcional)") }}
                                </label>
                                <div class="col-md-8">
                                    <input
                                        class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}"
                                        name="quantity"
                                        value="{{ old('quantity') ?: $service->quantity }}"
                                        id="quantity"
                                        placeholder="{{ __('Ingrese cantidad') }}"
                                    >
                                    @if ( $errors->has('quantity') )
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('quantity') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="finished_at" class="col-md-4 col-form-label">
                                    {{ __("Fecha término (Opcional)") }}
                                </label>
                                <div class="col-md-8">
                                    <input
                                        class="form-control{{ $errors->has('finished_at') ? ' is-invalid' : '' }}"
                                        type="date"
                                        name="finished_at"
                                        id="finished_at"
                                        value="{{ old('finished_at') ?: $service->finished_at }}"
                                    >
                                    @if( $errors->has('finished_at') )
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('finished_at') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="category_id" class="col-md-4 col-form-label">
                                    {{ __("Categoría") }}
                                </label>
                                <div class="col-md-8">
                                    <select 
                                        class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}"
                                        name="category_id"
                                        id="category_id"
                                        required
                                    >
                                        <option value="">Seleccionar categoria</option>
                                        @foreach (\App\Category::pluck('name', 'id') as $id => $category)
                                            <option {{ (int) old('category_id') === $id || $service->category_id === $id ? 'selected' : '' }} value="{{ $id }}">
                                                {{ $category }}
                                            </option>
                                        @endforeach

                                        @if ( $errors->has('category_id') )
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('category_id') }}</strong>
                                            </span>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="region_id" class="col-md-4 col-form-label">
                                    {{ __("Regiones") }}
                                </label>
                                <div class="col-md-8">
                                    <select
                                        class="form-control{{ $errors->has('region_id') ? ' is-invalid' : '' }}" 
                                        v-model="selected_region"
                                        v-on:change="loadCommunes" 
                                        name="region_id" 
                                        id="region"
                                        data-old="{{ old('region_id') ?: $service->region_id }}"
                                    >
                                        @foreach ($regions->get() as $index => $region)
                                            <option value="{{ $index }}">
                                                {{ $region }}
                                            </option>
                                        @endforeach

                                        @if ( $errors->has('region_id') )
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('region_id') }}</strong>
                                            </span>
                                        @endif

                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="commune_id" class="col-md-4 col-form-label">
                                    {{ __("Comunas") }}
                                </label>
                                <div class="col-md-8">
                                    <select
                                        v-model="selected_commune" 
                                        class="form-control{{ $errors->has('region_id') ? ' is-invalid' : '' }}"
                                        name="commune_id"
                                        id="commune"
                                        data-old="{{ old('commune_id') ?: $service->commune_id }}"
                                    >   
                                        <option value="">{{ __("Selecciona una comuna") }}</option>
                                        <option v-for="(commune, index) in communes" v-bind:value="index">
                                            @{{ commune }}
                                        </option>
                                    </select>
                                </div>
                            </div> 
                            <div class="form-group custom-file mb-3">
                                <div class="col-md-12">
                                    <input
                                        class="custom-file-input{{ $errors->has('picture') ? ' is-invalid' : '' }}"
                                        type="file"
                                        name="picture"
                                        id="picture"
                                    >
                                    <label for="picture" class="custom-file-label">
                                        {{ __("Subir imagen") }}
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ $btnText }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection