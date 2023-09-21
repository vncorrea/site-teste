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
        Schema::create('livro', function (Blueprint $table) {
            $table->id('id_livro');
            $table->foreignId('id_livro_genero')->constrained('livro_genero', 'id_livro_genero');
            $table->string('titulo');
            $table->text('descricao');
            $table->date('ano_lancamento');
            $table->integer('qtd_paginas');
            $table->foreignId('id_autor')->constrained('autor', 'id_autor');
            $table->text('imagem_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livro');
    }
};
