@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header bg-warning">
        <h3>
            <i class="fa-solid fa-pen"></i>
            Editar Cultivo
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

        <form action="{{ route('cultivos.update',$cultivo) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-md-6 mb-3">
                    <label>Nombre</label>
                    <input type="text" name="nombre" class="form-control"
                        value="{{ old('nombre',$cultivo->nombre) }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Tipo</label>
                    <input type="text" name="tipo" class="form-control"
                        value="{{ old('tipo',$cultivo->tipo) }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Ubicación</label>
                    <input type="text" name="ubicacion" class="form-control"
                        value="{{ old('ubicacion',$cultivo->ubicacion) }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Cantidad</label>
                    <input type="number" name="cantidad" class="form-control"
                        value="{{ old('cantidad',$cultivo->cantidad) }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Fecha de Siembra</label>
                    <input type="date" name="fecha_siembra" class="form-control"
                        value="{{ old('fecha_siembra',$cultivo->fecha_siembra) }}">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Fecha de Cosecha</label>
                    <input type="date" name="fecha_cosecha" class="form-control"
                        value="{{ old('fecha_cosecha',$cultivo->fecha_cosecha) }}">
                </div>

                <div class="col-md-6 mb-3">

                    <label>Estado</label>

                    <select name="estado" class="form-select">

                        <option value="En crecimiento"
                            {{ $cultivo->estado=='En crecimiento' ? 'selected' : '' }}>
                            En crecimiento
                        </option>

                        <option value="Listo para cosecha"
                            {{ $cultivo->estado=='Listo para cosecha' ? 'selected' : '' }}>
                            Listo para cosecha
                        </option>

                        <option value="Cosechado"
                            {{ $cultivo->estado=='Cosechado' ? 'selected' : '' }}>
                            Cosechado
                        </option>

                    </select>

                </div>

            </div>

            <hr>

            <button class="btn btn-warning">
                <i class="fa-solid fa-floppy-disk"></i>
                Actualizar
            </button>

            <a href="{{ route('cultivos.index') }}" class="btn btn-secondary">
                Cancelar
            </a>

        </form>

    </div>

</div>

@endsection