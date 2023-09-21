<?php

namespace App\Models\Autor;

use App\Models\Livro\Livro;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autor';
    protected $primaryKey = 'id_autor';
    protected $fillable = [
        'id_autor',
        'nome',
        'data_nascimento',
    ];

    public function livros()
    {
        return $this->hasMany(Livro::class);
    }

}
