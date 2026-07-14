@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header bg-success text-white">
        <h3>Nueva Parcela</h3>
    </div>

    <div class="card-body">

        <form action="{{ route('parcelas.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Ubicación</label>
                <input type="text" name="ubicacion" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Hectáreas</label>
                <input type="number" step="0.01" name="hectareas" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Tipo de suelo</label>
                <input type="text" name="tipo_suelo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Estado</label>

                <select name="estado" class="form-control">

                    <option>Disponible</option>

                    <option>Ocupada</option>

                    <option>En preparación</option>

                </select>

            </div>

            <button class="btn btn-success">
                Guardar
            </button>

            <a href="{{ route('parcelas.index') }}" class="btn btn-secondary">
                Cancelar
            </a>

        </form>

    </div>
</div>

@endsection