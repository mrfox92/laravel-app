<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VueTables\EloquentVueTables;
use App\Service;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function services()
    {
        return view('admin.services');
    }

    public function servicesJson() {

        if ( request()->ajax() ) {

            $vueTables = new EloquentVueTables;

            $data = $vueTables->get(new Service, ['id', 'name', 'description' , 'status']);

            return response()->json($data);
        }

        return abort(401);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function updateServiceStatus() {

        if ( request()->ajax() ) {
            $service = Service::find( request()->input('serviceId') );
            // pendiente: notificar al usuario vendedor por correo, el estado de su servicio
            $service->status = request()->input('newStatus');
            $service->save();
            return response()->json(['message' => 'ok']);
        }

        return abort(401);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
