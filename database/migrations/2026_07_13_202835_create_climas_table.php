<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('climas', function (Blueprint $table) {

            $table->id();

            // Ubicación del registro climático
            $table->string('ubicacion');


            // Temperatura en grados Celsius
            $table->decimal('temperatura', 5, 2);


            // Porcentaje de humedad
            $table->integer('humedad');


            // Probabilidad de lluvia %
            $table->integer('probabilidad_lluvia');


            // Velocidad del viento km/h
            $table->decimal('velocidad_viento', 5, 2);


            // Fecha del registro
            $table->date('fecha');


            $table->timestamps();

        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('climas');
    }
};