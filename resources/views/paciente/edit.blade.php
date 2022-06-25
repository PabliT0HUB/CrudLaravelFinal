@extends('adminlte::page')

@section('title', 'EDITAR')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')
<form action="/pacientes/{{$paciente->id}}" method="POST">
@csrf
@method('PUT')
  <div class="mb-3">
  <label for="" class="form-label">ID</label>
    <input value="{{$paciente->id}}" id="id" name="id" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Documento</label>
    <input value ="{{$paciente->documento}}" id="documento" name="documento" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">tipoDocumento</label>
    <input value ="{{$paciente->tipoDocumento}}" id="tipoDocumento" name="tipodocumento" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombres</label>
    <input value ="{{$paciente->nombres}}" id="nombres" name="nombres" type="text" step="any"  class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellidos</label>
    <input value ="{{$paciente->apellidos}}" id="apellidos" name="apellidos" type="text" step="any"  class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input value ="{{$paciente->direccion}}" id="direccion" name="direccion" type="text" step="any" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Teléfono</label>
    <input value ="{{$paciente->telefono}}" id="telefono" name="telefono" type="number" step="any"  class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Género</label>
    <input value ="{{$paciente->genero}}" id="genero" name="genero" type="text" step="any" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">FechaNacimiento</label>
    <input value ="{{$paciente->fechaNacimiento}}" id="fechanacimiento" name="fechanacimiento" type="date" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">EstadoCivil</label>
    <input value ="{{$paciente->estadoCivil}}" id="estadocivil" name="estadocivil" type="text" step="any"  class="form-control" tabindex="3">
  </div>

  <a href="/pacientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop