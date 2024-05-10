<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = [
            ['nome' => 'Cliente 1', 'email' => 'cliente1@example.com'],
            ['nome' => 'Cliente 2', 'email' => 'cliente2@example.com'],
            ['nome' => 'Cliente 3', 'email' => 'cliente3@example.com'],
        ];

        return view('app.clientes', compact('clientes'));
    }
}
