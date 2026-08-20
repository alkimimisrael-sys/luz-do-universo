<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paciente extends Model
{
    protected $table = 'pacientes';

    protected $fillable = [
        'nome',
        'data_nascimento',
        'cpf',
        'rg',
        'responsavel_id',
        'historico_medico',
        'medicamentos_uso_continuo',
        'restricoes_alimentares',
        'status', // ativo, inativo, em_processo_admissao
    ];

    protected $casts = [
        'data_nascimento' => 'date',
    ];

    public function responsavel(): BelongsTo
    {
        return $this->belongsTo(Responsavel::class, 'responsavel_id');
    }
}
