<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Livro\Livro;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LivrosController extends Controller
{
    public function index()
    {
        $livros = Livro::with('genero')->get()->sortBy('qtd_visualizacoes')->take(3);
        return view('livros.listagem')->with([
            'livros' => $livros
        ]);
    }

    public function detalhes($idLivro) {
        $livro = Livro::where('id_livro', $idLivro)->with('genero')->with('autor')->first();
        $anoLancamento = $livro->ano_lancamento_formatado;

        return view('livros.detalhes')->with([
            'livro' => $livro,
            'anoLancamento' => $anoLancamento
        ]);
    }
}
