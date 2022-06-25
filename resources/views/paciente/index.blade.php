@extends('adminlte::page')

@section('title', 'Crud Pacientes')

@section('content_header')
    <h1>LISTADO PACIENTES</h1>
@stop

@section('content')
<a href="pacientes/create" class="btn btn-primary">AGREGAR</a>

<table id="pacientes" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Documento</th>
            <th scope="col">TipoDeDocumento</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Dirección</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Género</th>
            <th scope="col">FechaDeNacimiento</th>
            <th scope="col">EstadoCivil</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
        <tbody>
          @foreach ($pacientes as $paciente)
          <tr>
            <td>{{$paciente->id}}</td>
            <td>{{$paciente->documento}}</td>
            <td>{{$paciente->tipoDocumento}}</td>
            <td>{{$paciente->nombres}}</td>
            <td>{{$paciente->apellidos}}</td>
            <td>{{$paciente->direccion}}</td>
            <td>{{$paciente->telefono}}</td>
            <td>{{$paciente->genero}}</td>
            <td>{{$paciente->fechaNacimiento}}</td>
            <td>{{$paciente->estadoCivil}}</td>
            <td>
                <form action="{{route('pacientes.destroy', $paciente->id)}}" method="POST">   
                <a href="/pacientes/{{$paciente->id}}/edit"class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
                </form> 
            </td>
            </tr>
            @endforeach
        </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
    $('#pacientes').DataTable();
});
</script>
@stop