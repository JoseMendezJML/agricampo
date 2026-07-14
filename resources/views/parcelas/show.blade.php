@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Detalle Parcela</title>
</head>
<body>

<h1>Información de la Parcela</h1>

<p><strong>Nombre:</strong> {{ $parcela->nombre }}</p>

<p><strong>Ubicación:</strong> {{ $parcela->ubicacion }}</p>

<p><strong>Hectáreas:</strong> {{ $parcela->hectareas }}</p>

<p><strong>Tipo de suelo:</strong> {{ $parcela->tipo_suelo }}</p>

<p><strong>Estado:</strong> {{ $parcela->estado }}</p>

<a href="{{ route('parcelas.index') }}">
Volver
</a>

</body>
</html>
@endsection