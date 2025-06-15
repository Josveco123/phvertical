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
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Cambio a unsignedBigInteger
            $table->foreign('user_id')->references('id')->on('users'); // Clave externa
            $table->string('nombre',255);
            $table->string('razon_social',255);
            $table->string('whatsapp',60);
            $table->string('producto');
            $table->string('ciudad', 120)->nullable();
            $table->date('fecha_visita');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitas');
    }
};
