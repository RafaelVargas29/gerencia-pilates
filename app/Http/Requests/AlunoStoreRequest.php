<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'rg' =>'required|string|size:9|unique:alunos,rg',
            'cpf' => 'required|string|size:11|unique:alunos,cpf',
            'celular' => 'required|string|max:15',
            'contato_emergencia' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'modalidade' => 'required|string|in:pilates,yoga,musculacao',
            'frequencia' => 'required|string|in:diaria,semanal,mensal',
            'forma_pagamento' => 'required|string|in:cartao,dinheiro,pix',
            'data_vencimento' => 'required|date',
            'tipo_aluno' => 'required|string|in:mensalista,gym_pass',
        ];
    }
}
