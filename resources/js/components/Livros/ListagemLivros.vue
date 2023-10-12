<template>
    <div class="col-6 col-sm-4 col-md-3 h-25">
        <div class="card shadow-sm cursor-pointer livro" @click="handleLivroClick">
            <img class="card-img-top w-100" :src="livro.imagem_url" alt="" style="height: 400px;">
            <div class="card-body">
                <p class="titulo_livro fs-5">{{ livro.titulo }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="dados_livro">
                        <span class="badge bg-success p-2">{{ livro.genero.descricao }}</span>
                        <span class="badge bg-bs p-2">{{ livro.ano_lancamento_formatado }}</span>
                    </div>
                    <div class="visualizoes_livro">
                        <i class="fas fa-eye"></i>
                        <small class="text-body-secondary ms-1">{{ livro.qtd_visualizacao }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        livro: Object
    },
    methods: {
        handleLivroClick() {
            window.location.href = `/livros/${this.livro.id_livro}`
        }
    }
}
</script>
