<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condominio;

class CondominioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condominios = Condominio::all();

        return $condominios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $condominio = new Condominio();

        return $condominio;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Condominio::$rules);

        $condominio = Condominio::create($request->all());

        return $condominio;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $condominio = Condominio::find($id);

        return $condominio;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $condominio = Condominio::find($id);

        return $condominio;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condominio $condominio)
    {
        $condominio = Condominio::findOrFail($request->id);
        $condominio->nombreTorre = $request->nombreTorre;

        $condominio->save();
        return $condominio;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $condominio = Condominio::find($id)->delete();

        return $condominio;
    }
}
