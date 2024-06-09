<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $metodo_autenticacao): Response
    {
            echo $metodo_autenticacao;
        if($metodo_autenticacao == 'padrao'){
            
        }

        if($metodo_autenticacao == 'ldap'){
            return $next($request);
        }


            // } else{
        //     return Response('Acesso negado! Rota exige autenticação !!!');
        // }
        // return $next($request);
    }
}
