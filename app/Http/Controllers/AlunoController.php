<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('aluno.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aluno.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aluno = new Aluno();
        
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|unique:alunos,cpf',
            'rg' => 'nullable|string|max:20',
            'celular' => 'required|string|max:15',
            'contato_emergencia' => 'nullable|string|max:15',
            'data_nascimento' => 'required|date',
            'modalidade' => 'required|string|max:50',
            'frequencia' => 'required|string|max:50',
            'forma_pagamento' => 'required|string|max:50',
            'data_vencimento' => 'required|date',
            'tipo_aluno' => 'required|string|max:50',
        ]);

        $aluno->nome = $request->input('nome');
        $aluno->cpf = $request->input('cpf');
        $aluno->rg = $request->input('rg');
        $aluno->celular = $request->input('celular');
        $aluno->contato_emergencia = $request->input('contato_emergencia');
        $aluno->data_nascimento = $request->input('data_nascimento');
        $aluno->idade = now()->diffInYears($request->input('data_nascimento'));
        $aluno->modalidade = $request->input('modalidade');
        $aluno->frequencia = $request->input('frequencia');
        $aluno->forma_pagamento = $request->input('forma_pagamento');
        $aluno->data_vencimento = $request->input('data_vencimento');
        $aluno->tipo_aluno = $request->input('tipo_aluno');

        $aluno->save();
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
    public function update(Request $request, Aluno $aluno)
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
