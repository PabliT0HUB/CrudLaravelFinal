<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medicamentosModel;


class medicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicamentos = medicamentosModel::all();
        return view('medicamento.index')->with('medicamentos',$medicamentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medicamentos = new medicamentosModel();

        $medicamentos->id = $request->get('id');
        $medicamentos->nombre = $request->get('nombre');
        $medicamentos->precio = $request->get('precio');

        $medicamentos->save();

        return redirect('/medicamentos');

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
        $medicamentos = medicamentosModel::find($id);
        return view('medicamento.edit')->with('medicamento', $medicamentos);
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
        $medicamentos = medicamentosModel::find($id);

        $medicamentos->id = $request->get('id');
        $medicamentos->nombre = $request->get('nombre');
        $medicamentos->precio = $request->get('precio');

        $medicamentos->save();

        return redirect('/medicamentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicamentos = medicamentosModel::find($id);
        $medicamentos->delete();
        return redirect('/medicamentos');
    }
}
