@extends('layouts.app')

@section('content')<!DOCTYPE html>
<html>
<head>
    <title>Detalle del Producto</title>
</head>
<body>

<h1>Información del Producto</h1>

<p><strong>Nombre:</strong> {{ $producto->nombre }}</p>

<p><strong>Categoría:</strong> {{ $producto->categoria }}</p>

<p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>

<p><strong>Precio:</strong> ${{ $producto->precio }}</p>

<p><strong>Stock:</strong> {{ $producto->stock }}</p>

<br>

<a href="{{ route('productos.index') }}">
    Volver
</a>

</body>
</html>
@endsection