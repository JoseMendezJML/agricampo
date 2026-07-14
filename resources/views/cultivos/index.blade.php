@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>🌾 Gestión de Cultivos</h2>

    <a href="{{ route('cultivos.create') }}" class="btn btn-success">
        <i class="bi bi-plus-circle"></i> Nuevo Cultivo
    </a>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="card">
    <div class="card-body">

        <table class="table table-hover align-middle">

            <thead class="table-success">

                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Ubicación</th>
                    <th>Cantidad</th>
                    <th>Estado</th>
                    <th width="180">Acciones</th>
                </tr>

            </thead>

            <tbody>

            @forelse($cultivos as $cultivo)

                <tr>

                    <td>{{ $cultivo->id }}</td>

                    <td>{{ $cultivo->nombre }}</td>

                    <td>{{ $cultivo->tipo }}</td>

                    <td>{{ $cultivo->ubicacion }}</td>

                    <td>{{ $cultivo->cantidad }}</td>

                    <td>
                        <span class="badge bg-success">
                            {{ $cultivo->estado }}
                        </span>
                    </td>

                    <td>

                        <a href="{{ route('cultivos.edit',$cultivo) }}"
                           class="btn btn-warning btn-sm">

                            <i class="bi bi-pencil-square"></i>

                        </a>

                        <form action="{{ route('cultivos.destroy',$cultivo) }}"
                              method="POST"
                              style="display:inline;">

                            @csrf
                            @method('DELETE')

                            <button
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Eliminar cultivo?')">

                                <i class="bi bi-trash"></i>

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="7" class="text-center">

                        No existen cultivos registrados.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>
</div>

@endsection