@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>🗺 Gestión de Parcelas</h2>

    <a href="{{ route('parcelas.create') }}" class="btn btn-success">
        <i class="bi bi-plus-circle"></i>
        Nueva Parcela
    </a>

</div>

@if(session('success'))

<div class="alert alert-success">

{{ session('success') }}

</div>

@endif

<div class="card">

<div class="card-body">

<table class="table table-hover">

<thead class="table-success">

<tr>

<th>ID</th>
<th>Nombre</th>
<th>Ubicación</th>
<th>Hectáreas</th>
<th>Tipo de suelo</th>
<th>Estado</th>
<th>Acciones</th>

</tr>

</thead>

<tbody>

@forelse($parcelas as $parcela)

<tr>

<td>{{ $parcela->id }}</td>

<td>{{ $parcela->nombre }}</td>

<td>{{ $parcela->ubicacion }}</td>

<td>{{ $parcela->hectareas }}</td>

<td>{{ $parcela->tipo_suelo }}</td>

<td>{{ $parcela->estado }}</td>

<td>

<a href="{{ route('parcelas.edit',$parcela) }}"
class="btn btn-warning btn-sm">

<i class="bi bi-pencil"></i>

</a>

<form action="{{ route('parcelas.destroy',$parcela) }}"
method="POST"
style="display:inline">

@csrf
@method('DELETE')

<button
class="btn btn-danger btn-sm"
onclick="return confirm('¿Eliminar parcela?')">

<i class="bi bi-trash"></i>

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="7" class="text-center">

No hay parcelas registradas.

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

</div>

@endsection