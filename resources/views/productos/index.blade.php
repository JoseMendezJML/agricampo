@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>📦 Gestión de Productos</h2>

    <a href="{{ route('productos.create') }}" class="btn btn-success">
        + Nuevo Producto
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
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>

            </thead>

            <tbody>

            @forelse($productos as $producto)

                <tr>

                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->categoria }}</td>
                    <td>${{ number_format($producto->precio,2) }}</td>
                    <td>{{ $producto->stock }}</td>

                    <td>

                        <a href="{{ route('productos.edit',$producto) }}"
                           class="btn btn-warning btn-sm">

                            Editar

                        </a>

                        <form
                            action="{{ route('productos.destroy',$producto) }}"
                            method="POST"
                            style="display:inline">

                            @csrf
                            @method('DELETE')

                            <button
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Eliminar producto?')">

                                Eliminar

                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="6" class="text-center">

                        No hay productos registrados.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection