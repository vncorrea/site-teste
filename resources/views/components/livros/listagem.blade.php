<div class="col-6 col-sm-4 col-md-3 h-25 cursor-pointer" data-id-livro="{{$livro->id_livro}}">
    <div class="card shadow-sm">
        <img class="card-img-top w-100" src="{{$livro->imagem_url}}" alt="" style="height: 400px;">
        <div class="card-body">
            <p class="titulo_livro fs-5">{{$livro->titulo}}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="dados_livro">
                    <span id="genero_livro" class="badge bg-success p-2">{{$livro->genero->descricao}}</span>
                    <span id="ano_livro" class="badge bg-bs p-2">{{$livro->ano_lancamento_formatado}}</span>
                </div>
                <div class="visualizoes_livro">
                    <i class="fas fa-eye"></i>
                    <small id="visualizacoes_livro" class="text-body-secondary">{{$livro->qtd_visualizacao}}</small>
                </div>
            </div>
        </div>
    </div>
</div>
