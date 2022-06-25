@extends('adminlte::page')

@section('title', 'AGREGAR')

@section('content_header')
    <h1>Agregar Paciente</h1>
@stop

@section('content')
<form action="/pacientes" method="POST">
  @csrf
  <div class="mb-3">
    <input id="id" name="id" type="hidden" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Documento</label>
    <input id="documento" name="documento" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">tipoDocumento</label>
    <input id="tipoDocumento" name="tipodocumento" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombres</label>
    <input id="nombres" name="nombres" type="text" step="any"  class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Apellidos</label>
    <input id="apellidos" name="apellidos" type="text" step="any"  class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Direccion</label>
    <input id="direccion" name="direccion" type="text" step="any" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Teléfono</label>
    <input id="telefono" name="telefono" type="number" step="any"  class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Género</label>
    <input id="genero" name="genero" type="text" step="any" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">FechaNacimiento</label>
    <input id="fechanacimiento" name="fechanacimiento" type="date" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">EstadoCivil</label>
    <input id="estadocivil" name="estadocivil" type="text" step="any"  class="form-control" tabindex="3">
  </div>

  <a href="/pacientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop