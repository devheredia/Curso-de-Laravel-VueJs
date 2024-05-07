<?php

namespace App\Http\Controllers;

class PrincipalController extends Controller
{
    public function principal()
    {
        // Você pode passar dados para a view aqui, se desejar
        // Por exemplo: $data = ['mensagem' => 'Bem-vindo ao site!'];

        return view('site.principal');
    }
}
