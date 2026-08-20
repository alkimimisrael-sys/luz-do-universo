<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('configuracoes', function (Blueprint $table) {
            $table->string('chave', 100)->primary();
            $table->text('valor')->nullable();
            $table->string('descricao', 255)->nullable();
            $table->timestamps();
        });

        // Dados iniciais do residencial
        DB::table('configuracoes')->insert([
            ['chave' => 'whatsapp',       'valor' => '5511993052051',                     'descricao' => 'Número do WhatsApp (com código do país)', 'created_at' => now(), 'updated_at' => now()],
            ['chave' => 'whatsapp_display','valor' => '(11) 99305-2051',                   'descricao' => 'Número exibido no site',                  'created_at' => now(), 'updated_at' => now()],
            ['chave' => 'instagram',       'valor' => 'residencial.luzdouniverso',          'descricao' => 'Usuário do Instagram (sem @)',            'created_at' => now(), 'updated_at' => now()],
            ['chave' => 'email',           'valor' => 'residencial.luzdouniverso@gmail.com','descricao' => 'E-mail de contato',                       'created_at' => now(), 'updated_at' => now()],
            ['chave' => 'endereco',        'valor' => 'Rua Santa Lucrécia, 127, Sacomã, São Paulo - SP, 04249-060', 'descricao' => 'Endereço completo', 'created_at' => now(), 'updated_at' => now()],
            ['chave' => 'maps_link',       'valor' => 'https://maps.google.com/?q=Rua+Santa+Lucr%C3%A9cia,+127,+Sacom%C3%A3,+S%C3%A3o+Paulo+-+SP,+04249-060', 'descricao' => 'Link Google Maps', 'created_at' => now(), 'updated_at' => now()],
            ['chave' => 'anos_experiencia','valor' => '15',                                  'descricao' => 'Anos de experiência',                   'created_at' => now(), 'updated_at' => now()],
            ['chave' => 'total_residentes','valor' => '80+',                                 'descricao' => 'Total de residentes atendidos',         'created_at' => now(), 'updated_at' => now()],
            ['chave' => 'total_equipe',    'valor' => '25+',                                 'descricao' => 'Profissionais na equipe',               'created_at' => now(), 'updated_at' => now()],
            ['chave' => 'whatsapp_mensagem','valor' => 'Olá! Gostaria de saber mais informações sobre o Residencial Luz do Universo.', 'descricao' => 'Mensagem padrão WhatsApp', 'created_at' => now(), 'updated_at' => now()],
            ['chave' => 'nome_site',       'valor' => 'Residencial Luz do Universo',         'descricao' => 'Nome completo do residencial',          'created_at' => now(), 'updated_at' => now()],
            ['chave' => 'slogan',          'valor' => 'Cuidado com Amor, Dignidade e Respeito', 'descricao' => 'Slogan/tagline do residencial',      'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('configuracoes');
    }
};
