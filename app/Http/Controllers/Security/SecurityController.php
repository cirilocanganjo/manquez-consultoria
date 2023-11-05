<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SecurityController extends Controller
{
    public function storeAdmin(){

        $credentialData = new User();
        $credentialData->nome = "Admin";
        $credentialData->email = "geral.admin@manquez.ao";
        $credentialData->nivel_acesso = "administrador";
        $credentialData->telefone = "+244938186485";
        $credentialData->provincia = "Luanda";
        $credentialData->password = \Hash::make("Admin!022manquez");
        $credentialData->save();

        return "Credenciais Salvas com sucesso!";
    }
}
