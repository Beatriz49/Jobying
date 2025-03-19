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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('path');
            $table->string('horario') ->nullable();
            $table->string('data') ->nullable();
            $table->string('cargo') ->nullable();
            $table->string('local') ->nullable();
            $table->string('beneficios') ->nullable();
            $table->string('perfileperado') ->nullable();
            $table->string('detalhes') ->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
