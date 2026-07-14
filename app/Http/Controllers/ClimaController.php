<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ClimaController extends Controller
{
    public function index()
    {
        $apiKey = env('OPENWEATHER_API_KEY');

        $ciudad = "Ocosingo";
        $pais = "MX";

        $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
            'q' => $ciudad . ',' . $pais,
            'appid' => $apiKey,
            'units' => 'metric',
            'lang' => 'es'
        ]);

        if ($response->failed()) {

    dd($response->status(), $response->json());

}

        $datos = $response->json();

        return view('clima.index', compact('datos'));
    }
}