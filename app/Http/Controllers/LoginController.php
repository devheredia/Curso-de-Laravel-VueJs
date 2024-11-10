<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('site.login', ['titulo' => 'Login']);
    }

    public function autenticar(Request $request){
       // Regras de vaçlidação
       $regras = [
        'usuario' => 'email',
        'senha' =>  'required'
       ];

       // As mensagens de feedback de avaliação

       $feedback = [
        'usuario.email' => 'O campo usuário (e-mail) é obrigatório',
        'senha.required' => 'O campo senha é obrigatório'
       ];
       // Se não passar pelo validate ele volta pra rota antiga.
       $request->validate($regras, $feedback);
       print_r($request->all());
    }
}
