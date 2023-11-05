<?php

namespace App\Http\Controllers\User;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Depoimento;
 use App\Models\Consultoria;

class UserController extends Controller
{


    //Formulario auth do usuário

    public function formulario_autenticacao()
    {

        return view('pages.User.pagina_login');
    }

    //Fim Autenticação do usuário





    public function formulario_novaconta(){
        return view('pages.Client.form.novaConta');
    }

    public function conta_criada(Request $request){

        $request->validate([

            'nome' => 'required',
            'email' => 'required|unique:users',
            'telefone' => 'required',
            'provincia' => 'required',
            'password' => 'required',
            'confirmar_senha' => 'required|same:password',
        ]);

        $usuario = $request->all();
        $usuario['password'] = \Hash::make($request->password);
        $usuario = User::create($usuario);

        if($usuario){
        return redirect('/formulario/autenticacao')->with('informacao','A sua conta foi criada com sucesso, autentique-se para efectuar marcações.');
        }else{

        return back()->with('aviso', 'Houve um problema durante a criação da sua conta');


        }



    }

    public function solicitacaoConsultoria(){

         return view('pages.Client.form.consultoria');
    }


    public function solicitarConsultoria(Request $request)
    {


        //Validação

        $request->validate([
            "servico_consultoria" => ["required"],
         ],
        [
            "servico_consultoria.required" => "Seleccione o serviço que pretende solicitar",
        ]

     );

    $informations = $request->all();

    if($request->hasFile("attachment") && $request->file("attachment")->isValid()){
    $file = $request->attachment;
    $extension = $file->extension();
    $nameFile = "anexo".strtotime("now").".". $extension;

/* A lógica abaixo permite somente que sejam carregados ficheiros
 em pdf e num tamanho igual ou inferior a 10MB. Para a análise do tamanho usou-se o filesize que
 analiza o tamanho do ficheiro e retorna o seu tamnho em bytes no entanto por apenas necessitarmos de 10MB
 converteu-se 10MB em bytes que equivaleu a 10485760 bytes.

*/
    if($extension === "pdf" && filesize($informations["attachment"]) <= 15000000){
        $file->move(public_path("files/pdfs"), $nameFile);
        $informations["attachment"] = $nameFile;
        $informations["userId"] = $request->userId;
        $informations["notification"] = 1;
        $consultoria = Consultoria::create($informations);
        if($consultoria){
        return redirect()->to("/")->with('info', 'A sua consultoria foi agendada entraremos em contacto, brevemente!');
       }

    }else{

        return redirect()->back()->with("alert", "O ficheiro não pode ter um tamanho superior a 15MB");
    }

    if($extension != "pdf"){
        return redirect()->back()->with("alert", "O ficheiro precisa de estar em formato pdf");
    }
}
        $informations = $request->all();
        $informations["notification"] = 1;
        $informations["userId"] = $request->userId;
        $consultoria = Consultoria::create($informations);
        if($consultoria){
        return redirect()->to("/")->with('info', 'A sua consultoria foi agendada entraremos em contacto, brevemente!');


}
    }


    public function novoDepoimento(){

        $cliente = User::all();
        return view('pages.Client.form.depoimento', ['cliente' => $cliente]);

    }


    public function salvarDepoimento(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:depoimentos',],
        [
            'email.unique' => 'Você já adicionou o seu depoimento, anteriormente!' ]);


        $informations = $request->all();
        $informations["userId"] = $request->userId;
        $depoimento = Depoimento::create($informations);

        if($depoimento){
            return redirect('/')->with('testemunho','Agradecemos pelo seu feedback!');
        }

    }



    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }





}








