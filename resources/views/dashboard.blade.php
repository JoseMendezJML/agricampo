@extends('layouts.app')

@section('content')

<style>

.dashboard-card{
    border-radius:20px;
    transition:.3s;
}

.dashboard-card:hover{
    transform:translateY(-5px);
}

.numero{
    font-size:45px;
    font-weight:bold;
}


/* Clima flotante */

.clima-card{

    position:fixed;
    right:25px;
    top:120px;

    width:280px;

    background:white;

    border-radius:20px;

    padding:20px;

    box-shadow:0 10px 30px rgba(0,0,0,.15);

    z-index:100;

}


.clima-icon{

    font-size:55px;

}


.badge-notificacion{

    font-size:16px;

    padding:8px 14px;

    border-radius:50px;

}


</style>



<div class="container-fluid">


<h1 class="fw-bold text-success mb-4">
🌾 Panel Agricampo
</h1>



<div class="row g-4">



<!-- CULTIVOS -->

<div class="col-md-4">

<div class="card shadow border-0 dashboard-card">


<div class="card-body text-center">


<h4 class="text-success">

 Cultivos

<span class="badge bg-success badge-notificacion">

{{ $totalCultivos }}

</span>

</h4>


<div class="numero text-success">

{{ $totalCultivos }}

</div>


<p class="text-muted">

Cultivos registrados

</p>


<a href="{{ route('cultivos.index') }}"
class="btn btn-success rounded-pill">

 Administrar cultivos

</a>


</div>

</div>

</div>





<!-- PARCELAS -->


<div class="col-md-4">


<div class="card shadow border-0 dashboard-card">


<div class="card-body text-center">


<h4 class="text-primary">

 Parcelas


<span class="badge bg-primary badge-notificacion">

{{ $totalParcelas }}

</span>


</h4>



<div class="numero text-primary">

{{ $totalParcelas }}

</div>



<p class="text-muted">

Parcelas registradas

</p>


<a href="{{ route('parcelas.index') }}"
class="btn btn-primary rounded-pill">

 Administrar parcelas

</a>


</div>

</div>

</div>





<!-- PRODUCTOS -->


<div class="col-md-4">


<div class="card shadow border-0 dashboard-card">


<div class="card-body text-center">


<h4 class="text-warning">

 Productos


<span class="badge bg-warning badge-notificacion">

{{ $totalProductos }}

</span>


</h4>



<div class="numero text-warning">

{{ $totalProductos }}

</div>



<p class="text-muted">

Productos en inventario

</p>


<a href="{{ route('productos.index') }}"
class="btn btn-warning rounded-pill">

 Administrar productos

</a>



</div>

</div>

</div>



</div>





<!-- RESUMEN -->


<div class="card shadow border-0 mt-4">


<div class="card-body">


<h4>
📊 Resumen del sistema
</h4>


<hr>


<div class="row text-center">


<div class="col">

<h5> Cultivos</h5>

<strong>
{{ $totalCultivos }}
</strong>

</div>



<div class="col">

<h5> Parcelas</h5>

<strong>
{{ $totalParcelas }}
</strong>

</div>



<div class="col">

<h5> Productos</h5>

<strong>
{{ $totalProductos }}
</strong>

</div>


</div>


</div>


</div>



</div>






<!-- CLIMA EN TIEMPO REAL -->


<div class="clima-card">


<div class="text-center">


<div class="clima-icon">
🌤️
</div>


<h4>
Clima actual
</h4>



<h1 class="text-primary">

{{ $clima['temp'] ?? '--' }} °C

</h1>



<p class="text-muted">

☁️ {{ $clima['descripcion'] ?? 'Sin datos' }}

</p>



<hr>



<p>

💧 Humedad:

<strong>

{{ $clima['humedad'] ?? '--' }} %

</strong>

</p>




<p>

💨 Viento:

<strong>

{{ $clima['viento'] ?? '--' }} km/h

</strong>

</p>



<a href="{{ route('clima.index') }}"
class="btn btn-outline-primary rounded-pill">

🔄 Actualizar clima

</a>



</div>


</div>




@endsection