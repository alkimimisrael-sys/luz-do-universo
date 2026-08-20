<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('email', 150);
            $table->string('telefone', 25)->nullable();
            $table->string('assunto', 100)->nullable();
            $table->text('mensagem');
            $table->boolean('lido')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contatos');
    }
};
