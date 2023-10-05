@extends('layout.base')

<div class="pre-header">
    <div class="bg-bs d-flex flex-wrap justify-content-between">
        <div class="name d-flex flex-row align-items-center">
            <img src="{{ asset('/images/logo.jpeg') }}" class="h-55px" alt="Logo" style="height: 55px">
            <span class="fs-2 text-white align-self-center">BOOKSTAR</span>
        </div>
        <div class="align-self-center">
            <ul class="nav col-12 col-md-auto mb-2 mb-md-0">
                <li><a href="/home" class="nav-link text-white px-2">Home</a></li>
                <li><a href="/livros/listagem" class="nav-link text-white px-2">Livros</a></li>
                <li><a href="/reviews/listagem" class="nav-link text-white px-2">Reviews</a></li>
            </ul>
        </div>
        <div class="flex-shrink-0 dropdown align-self-center me-3">
            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="/perfil/{{auth()->id()}}">Meu perfil</a></li>
                <li><a class="dropdown-item" href="#">Administrador</a></li>
                <li><a class="dropdown-item" href="#">Configurações</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="">Sair</a></li>
            </ul>
        </div>
    </div>
</div>
