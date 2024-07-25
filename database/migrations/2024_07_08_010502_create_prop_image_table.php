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
        Schema::create('prop_image', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prop_id'); // Cambia a unsignedBigInteger para que coincida con la clave primaria
            $table->string('image',200)->nullable(false); // fotos de la vivienda
            $table->timestamps();

            // Definir la clave foránea
            $table->foreign('prop_id')->references('id')->on('props')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prop_image');
    }
};
