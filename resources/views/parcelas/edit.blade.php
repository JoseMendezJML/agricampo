@extends('layouts.app')

@section('content')

<div class="card">

<div class="card-header bg-warning">

<h3>Editar Parcela</h3>

</div>

<div class="card-body">

<form action="{{ route('parcelas.update',$parcela) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">

<label>Nombre</label>

<input
type="text"
name="nombre"
class="form-control"
value="{{ $parcela->nombre }}">

</div>

<div class="mb-3">

<label>Ubicación</label>

<input
type="text"
name="ubicacion"
class="form-control"
value="{{ $parcela->ubicacion }}">

</div>

<div class="mb-3">

<label>Hectáreas</label>

<input
type="number"
step="0.01"
name="hectareas"
class="form-control"
value="{{ $parcela->hectareas }}">

</div>

<div class="mb-3">

<label>Tipo de suelo</label>

<input
type="text"
name="tipo_suelo"
class="form-control"
value="{{ $parcela->tipo_suelo }}">

</div>

<div class="mb-3">

<label>Estado</label>

<input
type="text"
name="estado"
class="form-control"
value="{{ $parcela->estado }}">

</div>

<button class="btn btn-warning">

Actualizar

</button>

<a href="{{ route('parcelas.index') }}" class="btn btn-secondary">

Cancelar

</a>

</form>

</div>

</div>

@endsection