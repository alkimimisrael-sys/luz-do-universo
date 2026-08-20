<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Depoimento extends Model
{
    protected $fillable = [
        'nome',
        'parentesco',
        'texto',
        'nota',
        'ativo',
        'foto_path',
    ];

    protected $casts = [
        'ativo' => 'boolean',
        'nota'  => 'integer',
    ];

    public function scopeAtivos($query)
    {
        return $query->where('ativo', true)->latest();
    }

    public function estrelas(): string
    {
        $filled = str_repeat('★', $this->nota);
        $empty  = str_repeat('☆', 5 - $this->nota);
        return $filled . $empty;
    }
}
