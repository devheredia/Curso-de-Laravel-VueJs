<?php

namespace App\Http\Controllers;

class PrincipalController extends Controller
{
    public function principal()
    {
        $motivo_contato = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação',
        ];
        // Você pode passar dados para a view aqui, se desejar
        // Por exemplo: $data = ['mensagem' => 'Bem-vindo ao site!'];

        return view('site.principal', ['motivo_contato' => $motivo_contato]);
    }
}
