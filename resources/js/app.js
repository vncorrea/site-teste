import './bootstrap';

import { createApp } from "vue";
import ListagemLivros from './components/Livros/ListagemLivros.vue';
import DetalhesLivros from './components/Livros/DetalhesLivros.vue';

const app = createApp();
app.component('listagemlivros', ListagemLivros);
app.component('detalheslivros', DetalhesLivros);
app.mount('#app');


import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import '@fortawesome/fontawesome-free/scss/fontawesome.scss';
import '@fortawesome/fontawesome-free/scss/brands.scss';
import '@fortawesome/fontawesome-free/scss/regular.scss';
import '@fortawesome/fontawesome-free/scss/solid.scss';
import '@fortawesome/fontawesome-free/scss/v4-shims.scss';
