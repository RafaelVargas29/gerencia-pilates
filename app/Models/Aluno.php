<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'rg',
        'celular',
        'contato_emergencia',
        'data_nascimento',
        'idade',
        'modalidade',
        'frequencia',
        'forma_pagamento',
        'data_vencimento',
        'tipo_aluno',
    ];
}
