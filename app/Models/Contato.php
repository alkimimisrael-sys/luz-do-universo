<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'assunto',
        'mensagem',
        'lido',
    ];

    protected $casts = [
        'lido' => 'boolean',
    ];

    public function scopeNaoLidos($query)
    {
        return $query->where('lido', false);
    }

    public function marcarComoLido(): void
    {
        $this->update(['lido' => true]);
    }
}
