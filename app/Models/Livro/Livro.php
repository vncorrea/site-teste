<?php

namespace App\Models\Livro;

use App\Models\Autor\Autor;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = 'livro';
    protected $primaryKey = 'id_livro';

    protected $fillable = [
        'id_livro',
        'titulo',
        'autor',
        'ano_lancamento',
        'id_livro_genero',
        'qtd_paginas',
        'imagem_url',
        'qtd_visualizacao',
    ];

    //Inicio Relacionamentos

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'id_autor');
    }

    public function genero()
    {
        return $this->belongsTo(LivroGenero::class, 'id_livro_genero');
    }
    //Fim Relacionamentos

    public function getAnoLancamentoFormatadoAttribute() {
        return Carbon::parse($this->attributes['ano_lancamento'])->year;
    }
}
