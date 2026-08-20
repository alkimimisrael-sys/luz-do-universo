<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Configuracao extends Model
{
    protected $table = 'configuracoes'; // Evita pluralização errada: configuracaos → configuracoes

    protected $primaryKey = 'chave';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'chave',
        'valor',
        'descricao',
    ];

    /**
     * Retorna o valor de uma configuração pelo nome da chave.
     */
    public static function get(string $chave, string $default = ''): string
    {
        return Cache::remember("config_{$chave}", 3600, function () use ($chave, $default) {
            $config = static::where('chave', $chave)->first();
            return $config ? ($config->valor ?? $default) : $default;
        });
    }

    /**
     * Define/atualiza uma configuração e invalida o cache.
     */
    public static function set(string $chave, string $valor): void
    {
        static::updateOrCreate(['chave' => $chave], ['valor' => $valor]);
        Cache::forget("config_{$chave}");
    }

    /**
     * Retorna todas as configurações como array chave => valor.
     */
    public static function todas(): array
    {
        return Cache::remember('todas_configuracoes', 3600, function () {
            return static::pluck('valor', 'chave')->toArray();
        });
    }

    /**
     * Invalida o cache de todas as configurações.
     */
    public static function limparCache(): void
    {
        $configs = static::all();
        foreach ($configs as $config) {
            Cache::forget("config_{$config->chave}");
        }
        Cache::forget('todas_configuracoes');
    }
}
