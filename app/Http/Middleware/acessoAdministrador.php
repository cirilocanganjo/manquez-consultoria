<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class acessoAdministrador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->check() AND auth()->user()->nivel_acesso === "administrador"){

        }else{
            return redirect()->back();
        }

        return $next($request);
    }
}
