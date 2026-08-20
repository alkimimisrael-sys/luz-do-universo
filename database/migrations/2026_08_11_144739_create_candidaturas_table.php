<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('candidaturas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('email', 150);
            $table->string('telefone', 25)->nullable();
            $table->string('cargo_interesse', 100)->nullable();
            $table->text('experiencia')->nullable();
            $table->string('curriculo_path', 255)->nullable();
            $table->enum('status', ['pendente', 'em_analise', 'aprovada', 'recusada'])->default('pendente');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('candidaturas');
    }
};
