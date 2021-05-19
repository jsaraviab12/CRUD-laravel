@extends('layouts.plantillaBase');

@section('contenido')
<form action="/articulos" method="POST">
@csrf
  <div class="mb-3">
    <label for="codigo" class="form-label">Codigo</label>
    <input type="text" class="form-control" id="codigo" name="codigo">
  </div>
  <div class="mb-3">
    <label for="descripcion" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion">
  </div><div class="mb-3">
    <label for="cantidad" class="form-label">Cantidad</label>
    <input type="number" class="form-control" id="cantidad" name="cantidad">
  </div><div class="mb-3">
    <label for="precio" class="form-label">Precio</label>
    <input type="number" class="form-control" id="precio" name="precio">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/aticulo"class="btn btn-secondary">Cancelar</a>
</form>
@endsection