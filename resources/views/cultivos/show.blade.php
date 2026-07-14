@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header bg-info text-white">

        <h3>

            <i class="fa-solid fa-eye"></i>

            Detalle del Cultivo

        </h3>

    </div>

    <div class="card-body">

        <table class="table">

            <tr>
                <th>Nombre</th>
                <td>{{ $cultivo->nombre }}</td>
            </tr>

            <tr>
                <th>Tipo</th>
                <td>{{ $cultivo->tipo }}</td>
            </tr>

            <tr>
                <th>Ubicación</th>
                <td>{{ $cultivo->ubicacion }}</td>
            </tr>

            <tr>
                <th>Cantidad</th>
                <td>{{ $cultivo->cantidad }}</td>
            </tr>

            <tr>
                <th>Fecha de Siembra</th>
                <td>{{ $cultivo->fecha_siembra }}</td>
            </tr>

            <tr>
                <th>Fecha de Cosecha</th>
                <td>{{ $cultivo->fecha_cosecha }}</td>
            </tr>

            <tr>
                <th>Estado</th>
                <td>{{ $cultivo->estado }}</td>
            </tr>

        </table>

        <a href="{{ route('cultivos.index') }}" class="btn btn-secondary">
            Regresar
        </a>

    </div>

</div>

@endsection