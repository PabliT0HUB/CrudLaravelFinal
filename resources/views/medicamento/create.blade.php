@extends('adminlte::page')

@section('title', 'AGREGAR')

@section('content_header')
    <h1>Agregar Medicamento</h1>
@stop

@section('content')
<form action="/medicamentos" method="POST">
  @csrf
  <div class="mb-3">
    <input id="id" name="id" type="hidden" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">nombre</label>
    <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">precio</label>
    <input id="precio" name="precio" type="text" class="form-control" tabindex="3">
  </div>

  <a href="/medicamentos" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop