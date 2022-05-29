<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservas_espacios_comune;
use App\Models\Condominio;
use App\Models\Residente;

class Reserva_espacio_comunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas_espacios_comunes = Reservas_espacios_comune::all();
        return $reservas_espacios_comunes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reservas_espacios_comune = new Reservas_espacios_comune();

        $condominios = Condominio::pluck('nombreTorre','id');
        $residentes = Residente::pluck('telefono','nombreResidentes','id');

        return compact('reservas_espacios_comune','condominios','residentes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Reservas_espacios_comune::$rules);

        $reservas_espacios_comune = Reservas_espacios_comune::create($request->all());
        
        return $reservas_espacios_comune;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservas_espacios_comune = Reservas_espacios_comune::find($id);

        return $reservas_espacios_comune;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservas_espacios_comune = Reservas_espacios_comune::find($id);

        $condominios = Condominio::pluck('nombreTorre','id');
        $residentes = Residente::pluck('telefono','nombreResidentes','id');


        return compact('reservas_espacios_comune','condominios','residentes');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservas_espacios_comune $reservas_espacios_comune)
    {
        $reservas_espacios_comune = Reservas_espacios_comune::findOrFail($request->id);
        $reservas_espacios_comune->residente_id = $request->residente_id;
        $reservas_espacios_comune->espacio_comun_id = $request->espacio_comun_id;
        

        $reservas_espacios_comune->save();
        return $reservas_espacios_comune;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservas_espacios_comune = Reservas_espacios_comune::find($id)->delete();
        return $reservas_espacios_comune;
    }
}
