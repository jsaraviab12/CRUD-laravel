@extends('layouts.plantillaBase')

@section('contenido')
<a href="articulos/create" class="btn btn-primary">Crear</a>


<table class="table table-dark table-striped">
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

@endsection