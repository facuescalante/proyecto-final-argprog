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
        Schema::create('infracciones', function (Blueprint $table) {
            $table->id();
            $table->string('fecha');
            $table->string('descripcion');
            $table->unsignedBigInteger('automotores_id');
            $table->foreign('automotores_id')->references('id')->on('automotores')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infracciones');
    }
};
