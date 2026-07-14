@extends('layouts.app')

@section('content')

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 class="fw-bold text-success">
            🌦️ Registros del Clima
        </h2>


        <a href="{{ route('climas.create') }}" 
           class="btn btn-success">

            + Nuevo registro

        </a>

    </div>



    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif




    <div class="card shadow border-0">

        <div class="card-body">


            <table class="table table-hover">


                <thead class="table-success">

                    <tr>

                        <th>Ubicación</th>

                        <th>🌡️ Temperatura</th>

                        <th>💧 Humedad</th>

                        <th>🌧️ Lluvia</th>

                        <th>💨 Viento</th>

                        <th>📅 Fecha</th>

                        <th>Acciones</th>

                    </tr>

                </thead>



                <tbody>


                @forelse($climas as $clima)


                    <tr>


                        <td>
                            {{ $clima->ubicacion }}
                        </td>


                        <td>
                            {{ $clima->temperatura }} °C
                        </td>


                        <td>
                            {{ $clima->humedad }} %
                        </td>


                        <td>
                            {{ $clima->probabilidad_lluvia }} %
                        </td>


                        <td>
                            {{ $clima->velocidad_viento }} km/h
                        </td>


                        <td>
                            {{ $clima->fecha }}
                        </td>



                        <td>


                            <a href="{{ route('climas.edit',$clima->id) }}"
                               class="btn btn-warning btn-sm">

                                ✏️

                            </a>




                            <form action="{{ route('climas.destroy',$clima->id) }}"
                                  method="POST"
                                  class="d-inline">


                                @csrf
                                @method('DELETE')


                                <button class="btn btn-danger btn-sm"
                                onclick="return confirm('¿Eliminar registro?')">

                                    🗑️

                                </button>


                            </form>


                        </td>



                    </tr>



                @empty


                    <tr>

                        <td colspan="7" class="text-center">

                            No hay registros climáticos

                        </td>

                    </tr>


                @endforelse


                </tbody>


            </table>


        </div>

    </div>


</div>


@endsection