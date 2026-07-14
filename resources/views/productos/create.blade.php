@extends('layouts.app')

@section('content')

<div class="card">

<div class="card-header bg-success text-white">

<h3>Nuevo Producto</h3>

</div>

<div class="card-body">

<form action="{{ route('productos.store') }}" method="POST">

@csrf

<div class="mb-3">

<label>Nombre</label>

<input type="text" name="nombre" class="form-control" required>

</div>

<div class="mb-3">

<label>Categoría</label>

<input type="text" name="categoria" class="form-control" required>

</div>

<div class="mb-3">

<label>Descripción</label>

<textarea name="descripcion" class="form-control"></textarea>

</div>

<div class="mb-3">

<label>Precio</label>

<input type="number" step="0.01" name="precio" class="form-control" required>

</div>

<div class="mb-3">

<label>Stock</label>

<input type="number" name="stock" class="form-control" required>

</div>

<button class="btn btn-success">

Guardar

</button>

<a href="{{ route('productos.index') }}" class="btn btn-secondary">

Cancelar

</a>

</form>

</div>

</div>

@endsection