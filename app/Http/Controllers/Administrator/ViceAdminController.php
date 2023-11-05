<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testemunho;
use App\Models\User;
use App\Models\MarcacaoConsultoria;
class ViceAdminController extends Controller
{
    public function index(){

        $testemunhos = Testemunho::all();
        $consultoria_limite = MarcacaoConsultoria::orderBy('id_consultoria','DESC')->paginate(5);
        $consultorias = MarcacaoConsultoria::all();

        return view('pages.Admin.vice_admin.index_viceadmin', [
            'testemunhos' => $testemunhos,
            'consultoria_limite' => $consultoria_limite,
            'consultorias' => $consultorias
        ]);
    }


    public function tabela_testemunhos(){

        $testemunhos = Testemunho::all();
        $testemunho_limite = Testemunho::orderBy('id_testemunho','ASC')->paginate(5);
        $consultoria_limite = MarcacaoConsultoria::orderBy('id_consultoria','DESC')->paginate(5);
        $consultorias = MarcacaoConsultoria::all();

        return view('pages.Admin.vice_admin.tabelas.table__testemunhos', [
            'testemunhos' => $testemunhos,
            'testemunho_limite' => $testemunho_limite,
            'consultoria_limite' => $consultoria_limite,
            'consultorias' => $consultorias
        ]);
    }


    public function apagar_testemunho($id){

        $testemunho = Testemunho::FindOrFail($id);
        $testemunho->delete();
        return back();
    }



    public function tabela_consultorias(){

        $testemunhos = Testemunho::all();
        $consultoria_limite = MarcacaoConsultoria::orderBy('id_consultoria','DESC')->paginate(5);

        $consultorias = MarcacaoConsultoria::all();

        return view('pages.Admin.vice_admin.tabelas.table__consultorias', [
            'testemunhos' => $testemunhos,
            'consultoria_limite' => $consultoria_limite,

            'consultorias' => $consultorias
        ]);
    }


}
