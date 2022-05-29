<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Residente;
use App\Models\Condominio;

class ResidenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$residentes = Residente::paginate();

        //return view('residente.index', compact('residentes'))
        //    ->with('i', (request()->input('page', 1) - 1) * $residentes->perPage());
        $residentes = Residente::all();
        return $residentes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $residente = new Residente();

        $condominios = Condominio::pluck('nombreTorre','id');

        return compact('residente','condominios');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Residente::$rules);

        $residente = Residente::create($request->all());
        
        return $residente;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $residente = Residente::find($id);

        return $residente;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $residente = Residente::find($id);

        $condominios = Condominio::pluck('nombreTorre','id');

        return compact('residente','condominios');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Residente $residente)
    {
        //request()->validate(Residente::$rules);
        //$residente->update($request->all());
        //return $residente;
        $residente = Residente::findOrFail($request->id);
        $residente->nombreResidentes = $request->nombreResidentes;
        $residente->telefono = $request->telefono;
        $residente->condominio_id = $request->condominio_id;

        $residente->save();
        return $residente;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $residente = Residente::find($id)->delete();
        return $residente;
    }
}
