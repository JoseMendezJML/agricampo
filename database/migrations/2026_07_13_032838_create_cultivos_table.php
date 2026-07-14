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
        Schema::create('cultivos', function (Blueprint $table) {
    $table->id();

    $table->string('nombre');
    $table->string('tipo');
    $table->string('ubicacion')->nullable();
    $table->date('fecha_siembra');
    $table->date('fecha_cosecha')->nullable();
    $table->integer('cantidad');
    $table->string('estado')->default('En crecimiento');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cultivos');
    }
};
