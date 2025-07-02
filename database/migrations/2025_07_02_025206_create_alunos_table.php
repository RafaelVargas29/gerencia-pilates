<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf')->unique();
            $table->string('rg')->unique();
            $table->date('data_nascimento');
            $table->integer('idade');
            $table->string('celular')->nullable();
            $table->string('contato_emergencia');
            $table->string('modalidade');
            $table->string('frequencia');
            $table->string('forma_pagamento'); 
            $table->date('data_vencimento');
            $table->string('tipo_aluno');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
