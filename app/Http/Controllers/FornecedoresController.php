<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index()
    {
        $fornecedores = [
            ['nome' => 'Fornecedor 1', 'contato' => 'fornecedor1@example.com'],
            ['nome' => 'Fornecedor 2', 'contato' => 'fornecedor2@example.com'],
            ['nome' => 'Fornecedor 3', 'contato' => 'fornecedor3@example.com'],
        ];

        return view('app.fornecedores', compact('fornecedores'));
    }
}
