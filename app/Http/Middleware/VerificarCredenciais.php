<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerificarCredenciais
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Verifica se o nome e o CPF estão na sessão
         if (!$request->session()->has('nome') || !$request->session()->has('cpf')) {
            // Redireciona ou retorna uma resposta de erro
            return redirect()->route('login')->with('error', 'Faça login para acessar esta página.');
        }

        return $next($request);
    }
}
