<?php

namespace App\Http\Controllers;

use App\Models\Cultivo;
use App\Models\Parcela;
use App\Models\Producto;
use Illuminate\Support\Facades\Http;


class DashboardController extends Controller
{

    public function index()
    {

        $totalCultivos = Cultivo::count();

        $totalParcelas = Parcela::count();

        $totalProductos = Producto::count();



        // CLIMA EN TIEMPO REAL

        $respuesta = Http::get(
            'https://api.openweathermap.org/data/2.5/weather',
            [
                'q' => 'Ocosingo,Mexico',
                'appid' => '13efaf236263a157c26d5c3745e14233',
                'units' => 'metric',
                'lang' => 'es'
            ]
        );


        $datosClima = $respuesta->json();



        $clima = [

            'temp' => $datosClima['main']['temp'] ?? '--',

            'humedad' => $datosClima['main']['humidity'] ?? '--',

            'viento' => $datosClima['wind']['speed'] ?? '--',

            'descripcion' => $datosClima['weather'][0]['description'] ?? '--'

        ];



        return view('dashboard', compact(

            'totalCultivos',

            'totalParcelas',

            'totalProductos',

            'clima'

        ));

    }

}