@extends('adminlte::page')

@section('title', 'Crud Medicamentos')

@section('content_header')
    <h1>LISTADO MEDICAMENTOS</h1>
@stop

@section('content')
<a href="medicamentos/create" class="btn btn-primary">AGREGAR</a>

<table id="medicamentos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Precio</th>
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
        <tbody>
          @foreach ($medicamentos as $medicamento)
          <tr>
            <td>{{$medicamento->id}}</td>
            <td>{{$medicamento->nombre}}</td>
            <td>{{$medicamento->precio}}</td>
            <td>
                <form action="{{route('medicamentos.destroy', $medicamento->id)}}" method="POST">   
                <a href="/medicamentos/{{$medicamento->id}}/edit"class="btn btn-info">Editar</a>
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
    $('#medicamentos').DataTable();
});
</script>
@stop