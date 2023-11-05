<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class usuario_jaAutenticado
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */


     /*
        Verifica se o Usuario ja esta autenticado e nao pode mais
        voltar a rota para se autenticar novamente ou
        criar uma conta de novo
    */
    public function handle(Request $request, Closure $next)
    {


        if(auth()->check() AND (url('/criar/conta') === $request->url())){

            return redirect()->back();

        } else if(auth()->check() AND url('/formulario/autenticacao') === $request->url()){

            return redirect()->back();

         }




        return $next($request);
    }


}
