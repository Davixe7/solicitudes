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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->string('apellido_casada')->nullable();
            $table->string('tipo_documento');
            $table->string('pasaporte')->nullable();
            $table->string('cui');
            $table->date('fecha_nacimiento');

            $table->string('telefono');
            $table->string('email');
            $table->string('sexo');
            $table->string('estado_civil');
            $table->text('direccion');
            $table->string('status')->default('pendiente')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
