<?php

namespace App\Models\Livro;

use Illuminate\Database\Eloquent\Model;

class LivroGenero extends Model
{
    protected $table = 'livro_genero';
    protected $primaryKey = 'id_livro_genero';
    protected $fillable = [
        'id_livro_genero',
        'descricao',
    ];

    public function livros()
    {
        return $this->belongsToMany(Livro::class);
    }

}
