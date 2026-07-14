```php
@extends('layouts.app')

@section('content')

<div class="container mt-4">

    @if(isset($error))

        <div class="alert alert-danger">
            {{ $error }}
        </div>

    @else

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow-lg border-0">

                <div class="card-header bg-success text-white text-center">

                    <h2>🌦️ Clima en Ocosingo, Chiapas</h2>

                </div>

                <div class="card-body">

                    <div class="row text-center">

                        <div class="col-md-6 mb-4">

                            <h4>🌡️ Temperatura</h4>

                            <h2 class="text-danger">
                                {{ $datos['main']['temp'] }} °C
                            </h2>

                        </div>

                        <div class="col-md-6 mb-4">

                            <h4>💧 Humedad</h4>

                            <h2 class="text-primary">
                                {{ $datos['main']['humidity'] }} %
                            </h2>

                        </div>

                        <div class="col-md-6 mb-4">

                            <h4>💨 Velocidad del viento</h4>

                            <h2 class="text-info">
                                {{ $datos['wind']['speed'] }} km/h
                            </h2>

                        </div>

                        <div class="col-md-6 mb-4">

                            <h4>☁️ Estado</h4>

                            <h2 class="text-success">
                                {{ ucfirst($datos['weather'][0]['description']) }}
                            </h2>

                        </div>

                    </div>

                    <hr>

                    <div class="text-center">

                        <h5>📍 Ciudad</h5>

                        <p class="fs-4">
                            {{ $datos['name'] }}
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    @endif

</div>

@endsection
```
