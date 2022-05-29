<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espacios_comune;
use App\Models\Condominio;

class Espacio_comunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $espacios_comunes = Espacios_comune::all();
        return $espacios_comunes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $espacios_comune = new Espacios_comune();

        $condominios = Condominio::pluck('nombreTorre','id');

        return compact('espacios_comune','condominios');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Espacios_comune::$rules);

        $espacios_comune = Espacios_comune::create($request->all());
        
        return $espacios_comune;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $espacios_comune = Espacios_comune::find($id);

        return $espacios_comune;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $espacios_comune = Espacios_comune::find($id);

        $condominios = Condominio::pluck('nombreTorre','id');

        return compact('espacios_comune','condominios');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Espacios_comune $espacios_comune)
    {
        $espacios_comune = Espacios_comune::findOrFail($request->id);
        $espacios_comune->nombreEspacioComun = $request->nombreEspacioComun;
        $espacios_comune->condominio_id = $request->condominio_id;

        $espacios_comune->save();
        return $espacios_comune;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $espacios_comune = Espacios_comune::find($id)->delete();
        return $espacios_comune;
    }
}
