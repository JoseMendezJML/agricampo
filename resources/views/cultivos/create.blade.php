@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header bg-success text-white">
        <h3>
            <i class="fa-solid fa-seedling"></i>
            Registrar Cultivo
        </h3>
    </div>

    <div class="card-body">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('cultivos.store') }}" method="POST">

            @csrf

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label class="form-label">Nombre</label>
                    <input
                        type="text"
                        name="nombre"
                        class="form-control"
                        value="{{ old('nombre') }}"
                        required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Tipo</label>
                    <input
                        type="text"
                        name="tipo"
                        class="form-control"
                        value="{{ old('tipo') }}"
                        required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Ubicación</label>
                    <input
                        type="text"
                        name="ubicacion"
                        class="form-control"
                        value="{{ old('ubicacion') }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Cantidad</label>
                    <input
                        type="number"
                        name="cantidad"
                        class="form-control"
                        value="{{ old('cantidad') }}"
                        required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Fecha de Siembra</label>
                    <input
                        type="date"
                        name="fecha_siembra"
                        class="form-control"
                        value="{{ old('fecha_siembra') }}"
                        required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Fecha de Cosecha</label>
                    <input
                        type="date"
                        name="fecha_cosecha"
                        class="form-control"
                        value="{{ old('fecha_cosecha') }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Estado</label>

                    <select name="estado" class="form-select">

                        <option value="En crecimiento">En crecimiento</option>
                        <option value="Listo para cosecha">Listo para cosecha</option>
                        <option value="Cosechado">Cosechado</option>

                    </select>

                </div>

            </div>

            <hr>

            <button class="btn btn-success">
                <i class="fa-solid fa-floppy-disk"></i>
                Guardar
            </button>

            <a href="{{ route('cultivos.index') }}" class="btn btn-secondary">
                Cancelar
            </a>

        </form>

    </div>

</div>

@endsection