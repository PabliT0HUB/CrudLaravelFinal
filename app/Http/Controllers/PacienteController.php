<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PacienteModel;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = PacienteModel::all();
        return view('paciente.index')->with('pacientes',$pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pacientes = new PacienteModel();

        $pacientes->id = $request->get('id');
        $pacientes->documento = $request->get('documento');
        $pacientes->tipodocumento = $request->get('tipodocumento');
        $pacientes->nombres = $request->get('nombres');
        $pacientes->apellidos = $request->get('apellidos');
        $pacientes->direccion = $request->get('direccion');
        $pacientes->telefono = $request->get('telefono');
        $pacientes->genero = $request->get('genero');
        $pacientes->fechanacimiento = $request->get('fechanacimiento');
        $pacientes->estadocivil = $request->get('estadocivil');

        $pacientes->save();

        return redirect('/pacientes');

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
        $pacientes = PacienteModel::find($id);
        return view('paciente.edit')->with('paciente', $pacientes);
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
        $pacientes = PacienteModel::find($id);

        $pacientes->id = $request->get('id');
        $pacientes->documento = $request->get('documento');
        $pacientes->tipodocumento = $request->get('tipodocumento');
        $pacientes->nombres = $request->get('nombres');
        $pacientes->apellidos = $request->get('apellidos');
        $pacientes->direccion = $request->get('direccion');
        $pacientes->telefono = $request->get('telefono');
        $pacientes->genero = $request->get('genero');
        $pacientes->fechanacimiento = $request->get('fechanacimiento');
        $pacientes->estadocivil = $request->get('estadocivil');

        $pacientes->save();

        return redirect('/pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pacientes = PacienteModel::find($id);
        $pacientes->delete();
        return redirect('/pacientes');
    }
}
