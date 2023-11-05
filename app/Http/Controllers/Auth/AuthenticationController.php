<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
     //Autenticação do usuário

     public function autenticacao_usuario(Request $request)
     {

        $credenciais = $request->validate([

        "email" => ["required", "email"],
        "password" => ["required"]


        ]);


         if(Auth::attempt($credenciais)){

           if(Auth::user()->nivel_acesso === "cliente")
           {
               return redirect()->to("/solicitacao/consultoria");

           }else if(Auth::user()->nivel_acesso === "administrador") {

             return redirect()->to("/painel/administrativo");

         }else if(Auth::user()->nivel_acesso === "gestor") {

             return redirect()->to("/gestor/index");
         }

       }else{

           return redirect()->back()->with('alerta','e-mail ou palavra-passe incorretos.');

       }






     }
}
