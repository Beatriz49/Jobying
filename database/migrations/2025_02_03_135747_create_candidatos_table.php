<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('idade');
            $table->string('foto')->nullable();
            $table->text('skills');
            $table->text('experiencias');
            $table->text('trabalhos');
            $table->string('procurando');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('candidatos');
    }
};
