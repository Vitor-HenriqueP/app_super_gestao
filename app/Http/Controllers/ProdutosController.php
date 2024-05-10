<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = [
            ['nome' => 'Produto 1', 'preco' => 'R$ 88,77'],
            ['nome' => 'Produto 2', 'preco' => 'R$ 122,29'],
            ['nome' => 'Produto 3', 'preco' => 'R$ 39,51'],
        ];

        return view('app.produtos', compact('produtos'));
    }
}
