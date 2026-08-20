<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Responsavel extends Model
{
    protected $table = 'responsaveis';

    protected $fillable = [
        'nome',
        'cpf',
        'rg',
        'telefone',
        'email',
        'endereco',
        'parentesco',
    ];

    public function pacientes(): HasMany
    {
        return $this->hasMany(Paciente::class, 'responsavel_id');
    }
}
