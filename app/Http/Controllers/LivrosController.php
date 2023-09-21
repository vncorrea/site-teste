<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LivrosController extends Controller
{
    public function index()
    {
        return view('livros.listagem');
    }
}
