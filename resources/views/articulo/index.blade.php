@extends('layouts.plantillaBase')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
@endsection
@section('contenido')
<a href="articulos/create" class="btn btn-primary">Crear</a>


<table id="articulos" class="table table-dark table-striped">
    <thead> 
    <tr>
        <th scope="col">id</th>
        <th scope="col">Codigo</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Precio</th>
        <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($datos as $dato)
    <tr>
        <td>{{$dato->id}}</td>
        <td>{{$dato->codigo}}</td>
        <td>{{$dato->descripcion}}</td>
        <td>{{$dato->cantidad}}</td>
        <td>{{$dato->precio}}</td>
        
        <td>
        <form action="{{route ('articulos.destroy', $dato->id)}}" method="POST">
        <a href="articulos/{{$dato->id}}/edit" class="btn btn-warning">Editar</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </td>
       
        
    </tr>
    @endforeach
    </tbody>
</table>
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
<script>
$(document).ready(function() {
    $('#articulos').DataTable();
} );
</script>
@endsection

@endsection