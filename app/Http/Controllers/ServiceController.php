<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServiceCreateRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Helpers\Helper;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Service;
use App\Commune;
use App\Region;

class ServiceController extends Controller
{   

    public function show ( $slug ) {

        $service = Service::with(['seller'])->where('slug', $slug)->first();

        return view('services.details', compact('service'));

    }

    public function getCommunes ( Request $request ) {


        if ( $request->ajax() ) {

            $communes = Commune::where('region_id', $request->region_id)->get();

            foreach ($communes as $commune) {
                
                $communesArray[$commune->id] = $commune->name;
            }

            return response()->json($communesArray);
        }

    }

    public function create () {

        $service = new Service();
        $btnText = __("Crear servicio");
        
        return view ('services.form', compact('service', 'btnText'));
    }

    public function store ( ServiceCreateRequest $request ) {

        $picture = Helper::uploadFile('picture', 'services');

        $request->merge(['picture' => $picture]);
        $request->merge(['seller_id' => auth()->user()->seller->id]);
        $request->merge(['status' => Service::PENDING]);
        $request->merge(['av_status' => Service::AVAILABLE]);
        $request->merge(['slug' => Str::slug($request->name,'-')]);

        Service::create($request->input());

        return back()->with('message', [
            'class'     =>  'success',
            'message'   =>  __("Servicio creado exitosamente, recibirá un correo con información luego de su revisión")
        ]);

    }

    public function edit ($slug) {

        $service = Service::with(['commune'])->whereSlug($slug)->first();
        $service->region_id = $service->commune->region_id;
        $btnText = __("Actualizar servicio");

        return view('services.form', compact('service', 'btnText'));
    }

    public function update ( ServiceUpdateRequest $serviceRequest, Service $service ) {

        if ( $serviceRequest->hasFile('picture') ) {
            Storage::delete('services/'. $service->picture);
            $picture = Helper::uploadFile('picture', 'services');
            $serviceRequest->merge(['picture' => $picture]);
        }

        //  actualizamos los datos 
        $service->fill( $serviceRequest->input() )->save(); //  actualizamos a partir de los cambios en el formulario

        return redirect()->route('services.edit', ['slug' => $service->slug])
            ->with('message', [
                'class'     =>  'success',
                'message'   =>  __("Servicio Actualizado con éxito")
            ]);
    }
}
