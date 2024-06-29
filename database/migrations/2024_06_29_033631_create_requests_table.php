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
        Schema::create('requests', function (Blueprint $table) {
            $table->id(); // Esta línea define automáticamente 'id' como auto_increment primary key
            $table->integer('prop_id')->nullable(false);
            $table->string('agent_name', 200)->nullable(false);
            $table->integer('user_id')->nullable(false);
            $table->string('name', 200)->nullable(false);
            $table->string('email', 200)->nullable(false);
            $table->string('phone', 70)->nullable(false);
            $table->timestamps();
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
