@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Nueva Parcela</title>
</head>
<body>

<h1>Registrar Parcela</h1>

<form action="{{ route('parcelas.store') }}" method="POST">

    @csrf

    <p>Nombre</p>
    <input type="text" name="nombre">

    <p>Ubicación</p>
    <input type="text" name="ubicacion">

    <p>Hectáreas</p>
    <input type="number" step="0.01" name="hectareas">

    <p>Tipo de suelo</p>
    <input type="text" name="tipo_suelo">

    <p>Estado</p>
    <input type="text" name="estado">

    <br><br>

    <button type="submit">
        Guardar
    </button>

</form>

<br>

<a href="{{ route('parcelas.index') }}">
Regresar
</a>

</body>
</html>
@endsection