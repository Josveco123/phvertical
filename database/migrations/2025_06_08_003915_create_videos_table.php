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
    Schema::create('videos', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_props');
        $table->string('nombre');
        $table->timestamps();

        // Clave foránea correcta (apunta a tabla 'props', no 'properties')
        $table->foreign('id_props')
              ->references('id')
              ->on('props')
              ->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
