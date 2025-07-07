<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Requests;
use App\Http\Requests\AlunoStoreRequest;
use Illuminate\Http\RedirectResponse;

class AlunoController extends Controller
{
    // Chama tela de início do sistema
    public function index()
    {
        return view('aluno.index');
    }

    // Cham o formulário de criação de aluno
    public function create()
    {
        return view('aluno.create');
    }

    // Salva os dados do aluno no banco de dados
    public function store(AlunoStoreRequest $request): RedirectResponse
    {
        $aluno = new Aluno();

        // 
        $validated = $request->validated();

        //dd($validated);

        $aluno->nome = $validated['nome'];
        $aluno->cpf = $validated['cpf'];
        $aluno->rg = $validated['rg'];
        $aluno->celular = $validated['celular'];
        $aluno->contato_emergencia = $validated['contato_emergencia'];
        $aluno->data_nascimento = $validated['data_nascimento'];
        $aluno->idade = now()->diffInYears($validated['data_nascimento']);
        $aluno->modalidade = $validated['modalidade'];
        $aluno->frequencia = $validated['frequencia'];
        $aluno->forma_pagamento = $validated['forma_pagamento'];
        $aluno->data_vencimento = $validated['data_vencimento'];
        $aluno->tipo_aluno = $validated['tipo_aluno'];

        $aluno->save();

        return redirect()->route('/aluno'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Aluno $aluno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aluno $aluno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validated $validated, Aluno $aluno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aluno $aluno)
    {
        //
    }
}
