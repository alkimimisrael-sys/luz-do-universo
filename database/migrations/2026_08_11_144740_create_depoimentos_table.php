<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('depoimentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('parentesco', 80)->nullable(); // Ex: "Filha do residente"
            $table->text('texto');
            $table->tinyInteger('nota')->default(5); // 1 a 5 estrelas
            $table->boolean('ativo')->default(true);
            $table->string('foto_path', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('depoimentos');
    }
};
