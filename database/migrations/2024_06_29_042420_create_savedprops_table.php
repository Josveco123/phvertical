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
        Schema::create('savedprops', function (Blueprint $table) {
            $table->id();
            $table->integer('prop_id')->nullable(false);
            $table->integer('user_id')->nullable(false);
            $table->string('title', 200)->nullable(false);
            $table->string('image', 200)->nullable(false);
            $table->string('location', 200)->nullable(false);
            $table->string('price', 200)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('savedprops');
    }
};
