<template>
    <div class="card ps-0 d-flex flex-row border-2 border-secondary w-100">
        <div class="col-2">
            <div class="w-100 foto_livro">
                <img class="livro-foto" :src="livro.imagem_url" alt="">
            </div>
        </div>
        <div class="col-10">
            <div class="titulo_livro d-flex justify-content-center">
                <div class="border-bottom border-dark px-5">
                    <span class="fs-2 fw-bold text-black">{{ livro.titulo }}</span>
                </div>
            </div>
            <div class="informacoes_livro d-flex flex-row">
                <div class="col-10 py-3">
                    <div class="border-end">
                        <p class="fw-bold">Descrição:</p>
                        <span class="text-start fs-6">{{ livro.descricao }}</span>
                    </div>
                </div>
                <div class="col-2 py-5">
                    <p class="text-center mb-0">Autor:</p>
                    <p class="text-center cursor-pointer text-primary" @click="handleAutorClick">{{ livro.autor.nome }}</p>
                    <p class="text-center mb-0">Ano do lançamento:</p>
                    <p class="text-center">{{ dataFormatada }}</p>
                    <p class="text-center mb-0">Gênero:</p>
                    <p class="text-center">{{ livro.genero.descricao }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { format } from "date-fns";
export default {

    props: {
        livro: Object
    },

    methods: {
        handleAutorClick() {
            window.location.href = `/autor/${this.livro.id_autor}`
        }
    },
    computed: {
        dataFormatada() {
            return format(new Date(this.livro.ano_lancamento), "yyyy");
        },
    }
}

</script>

