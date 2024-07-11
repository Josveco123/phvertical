<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\text;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('props', function (Blueprint $table) {
            $table->id();
            $table->string('title',200)->nullable(false);
            $table->string('price',50)->nullable(false); //precio
            $table->string('image',200)->nullable(false); //fotos de la vivienda
            $table->string('beds',50)->nullable(false); //camas
            $table->string('baths',50)->nullable(false); //baños
            $table->string('sq_ft',50)->nullable(false); //Area construida
            $table->string('home_type',200)->nullable(false); //tipo de casa
            $table->string('year_built',200)->nullable(false); //años de construccion
            $table->string('price_sqft',50)->nullable(false); //price de por metro cuadrado
            $table->text('more_info')->nullable(false); //mas informacion
            $table->string('location',200)->nullable(false); //localizacion
            $table->string('agent_name',200)->nullable(false); //nombre vendedor
            $table->string('type',200)->nullable(false); //tipo
            $table->string('city',200)->nullable(false); //ciudad
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('props');

    }
};
