<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Remove a tabela antiga que não será mais usada
        Schema::dropIfExists('candidaturas');

        // Cria a tabela de Responsáveis
        Schema::create('responsaveis', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 150);
            $table->string('cpf', 20)->unique();
            $table->string('rg', 25)->nullable();
            $table->string('telefone', 25);
            $table->string('email', 150)->nullable();
            $table->string('endereco', 255)->nullable();
            $table->string('parentesco', 50)->nullable();
            $table->timestamps();
        });

        // Cria a tabela de Pacientes
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 150);
            $table->date('data_nascimento')->nullable();
            $table->string('cpf', 20)->nullable();
            $table->string('rg', 25)->nullable();
            
            // Relacionamento com Responsável
            $table->unsignedBigInteger('responsavel_id')->nullable();
            $table->foreign('responsavel_id')->references('id')->on('responsaveis')->onDelete('set null');

            $table->text('historico_medico')->nullable();
            $table->text('medicamentos_uso_continuo')->nullable();
            $table->text('restricoes_alimentares')->nullable();
            $table->enum('status', ['ativo', 'inativo', 'em_processo_admissao'])->default('em_processo_admissao');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pacientes');
        Schema::dropIfExists('responsaveis');
        
        // Recria candidaturas caso precise reverter
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
};
