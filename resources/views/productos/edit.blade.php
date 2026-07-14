@extends('layouts.app')

@section('content')

<div class="card">

<div class="card-header bg-warning">

<h3>Editar Producto</h3>

</div>

<div class="card-body">

<form action="{{ route('productos.update',$producto) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">

<label>Nombre</label>

<input
type="text"
name="nombre"
class="form-control"
value="{{ $producto->nombre }}">

</div>

<div class="mb-3">

<label>Categoría</label>

<input
type="text"
name="categoria"
class="form-control"
value="{{ $producto->categoria }}">

</div>

<div class="mb-3">

<label>Descripción</label>

<textarea
name="descripcion"
class="form-control">{{ $producto->descripcion }}</textarea>

</div>

<div class="mb-3">

<label>Precio</label>

<input
type="number"
step="0.01"
name="precio"
class="form-control"
value="{{ $producto->precio }}">

</div>

<div class="mb-3">

<label>Stock</label>

<input
type="number"
name="stock"
class="form-control"
value="{{ $producto->stock }}">

</div>

<button class="btn btn-warning">

Actualizar

</button>

<a href="{{ route('productos.index') }}" class="btn btn-secondary">

Cancelar

</a>

</form>

</div>

</div>

@endsection