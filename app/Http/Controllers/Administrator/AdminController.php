<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Routing\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Depoimento;
use App\Models\Consultoria;
use App\Models\User;
use App\Models\Gallery;
use App\Models\Evento;

class AdminController extends Controller
{

    public function index(){

        $testemunhos = Depoimento::all();
        $usuarios = User::all();
        $consultorias = Consultoria::all();
        $notifications = \DB::table("consultorias")->where("notification", "=", "1")->get();


        return view('pages.Admin.index', [
            'testemunhos' => $testemunhos,
            'usuarios' => $usuarios,
            'consultorias' => $consultorias,
            "notifications" => $notifications

        ]);
    }

    //Adicionar Depoimento

    public function adicionarDepoimento(){

        $evento = Evento::all();
        $testemunhos = Depoimento::all();
        $usuarios = User::all();
        $consultorias = Consultoria::all();
        $notifications = \DB::table("consultorias")->where("notification", "=", "1")->get();
        return view('pages.Admin.formulario.adicionar__depoimento',
        [
            'evento' => $evento,
            'testemunhos' => $testemunhos,
            'usuarios' => $usuarios,
            'consultorias' => $consultorias,
            "notifications" =>$notifications
        ]);

    }

    public function novo_evento(){

        $evento = Evento::all();
        $testemunhos = Depoimento::all();
        $usuarios = User::all();
        $consultorias = Consultoria::all();
        $notifications = \DB::table("consultorias")->where("notification", "=", "1")->get();
        return view('pages.Admin.formulario.adicionar__evento',
        [
            'evento' => $evento,
            'testemunhos' => $testemunhos,
            'usuarios' => $usuarios,
            'consultorias' => $consultorias,
            "notifications" =>$notifications
        ]);

    }

    public function tabela_eventos(){

        $evento_limite = Evento::orderBy('id','ASC')->paginate(5);
        $evento = Evento::all();
        $testemunhos = Depoimento::all();
        $usuarios = User::all();
        $consultorias = Consultoria::all();
        $notifications = \DB::table("consultorias")->where("notification", "=", "1")->get();

        return view('pages.Admin.table.table__eventos', [
            'evento' => $evento,
            'evento_limite' => $evento_limite,
            'testemunhos' => $testemunhos,
            'usuarios' => $usuarios,
            'consultorias' => $consultorias,
            "notifications" => $notifications

        ]);
    }

    public function listaDepoimentos(){

        $testemunhos = Depoimento::all();
        $testemunho_limite = Depoimento::orderBy('id_depoimento','ASC')->paginate(5);
        $usuarios = User::all();
        $consultorias = Consultoria::all();
        $notifications = \DB::table("consultorias")->where("notification", "=", "1")->get();


        return view('pages.Admin.table.table__depoimentos', [
            'testemunhos' => $testemunhos,
            'testemunho_limite' => $testemunho_limite,
            'usuarios' => $usuarios,
            'consultorias' => $consultorias,
            "notifications" => $notifications
        ]);
    }


    public function salvarDepoimentoAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:depoimentos'],
        [
            'email.unique' => 'Você já adicionou o seu depoimento, anteriormente!' ]);

        $informations = $request->all();
        $depoimento = Depoimento::create($informations);

        if($depoimento){
            return redirect()->back()->with('depoimentoMessage','O depoimento foi adicionado com sucesso!');
        }

    }


    public function apagar_testemunho($id){

        $testemunho = Depoimento::FindOrFail($id);
        $testemunho->delete();
        return back();
    }

    public function tabela_usuarios(){

        $testemunhos = Depoimento::all();
        $usuario_limite = User::orderBy('userId','ASC')->paginate(10);
        $usuarios = User::all();
        $consultorias = Consultoria::all();
        $notifications = \DB::table("consultorias")->where("notification", "=", "1")->get();


        return view('pages.Admin.table.table__usuarios', [
            'testemunhos' => $testemunhos,
            'usuario_limite' => $usuario_limite,
            'usuarios' => $usuarios,
            'consultorias' => $consultorias,
            "notifications" => $notifications
        ]);
    }

    public function apagar_usuario($id){

        $usuario = User::FindOrFail($id);
        $usuario->delete();
        return back();
    }

    public function adicionar_admin(){

        $testemunhos = Depoimento::all();
        $usuarios = User::all();
        $consultorias = Consultoria::all();
        $notifications = \DB::table("consultorias")->where("notification", "=", "1")->get();


        return view('pages.Admin.formulario.adicionar__admin',[
            'testemunhos' => $testemunhos,
            'usuarios' => $usuarios,
            'consultorias' => $consultorias,
            "notifications" => $notifications
        ]);
    }

        public function adicionar_viceadmin(){

            $testemunhos = Depoimento::all();
            $usuarios = User::all();
            $consultorias = Consultoria::all();
            $notifications = \DB::table("consultorias")->where("notification", "=", "1")->get();


            return view('pages.Admin.formulario.adicionar__viceadmin',[
                'testemunhos' => $testemunhos,
                'usuarios' => $usuarios,
                'consultorias' => $consultorias,
                "notifications" => $notifications
            ]);


        }


    public function editar_admin($id)
    {

        $editar_admin = User::find($id);
        $testemunhos = Depoimento::all();
        $usuarios = User::all();
        $consultorias = Consultoria::all();
        $notifications = \DB::table("consultorias")->where("notification", "=", "1")->get();


        return view('pages.Admin.formulario.editar__admin',[

            'editar_admin' => $editar_admin,
            'testemunhos' => $testemunhos,
            'usuarios' => $usuarios,
            'consultorias' => $consultorias,
            "notifications" => $notifications

        ]);

    }

    public function salvar_evento(Request $request){

        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'foto' => 'required',
            'data_evento' => 'required',

        ]);

        $dados = $request->all();

        $foto = $request->foto;
        $extensao = $foto->extension();
        $nomeImagem = md5($foto->getClientOriginalName() . strtotime("now")). ".". $extensao;
        $foto->move(public_path('images/eventos'), $nomeImagem);
        $dados['foto'] = $nomeImagem;

        $evento = Evento::create($dados);

        if($evento){
            return back()->with('message', 'O evento foi publicado com sucesso.');
        }
    }

    public function atualizar_admin(Request $request, $id){

        $admin = $request->all();
        $admin['password'] = \Hash::make($request->password);
        $novo_admin = User::find($id)->update($admin);

        return back()->with('admin_updated', 'Informação atualizada com sucesso!');

    }



    public function conta_admin_criada(Request $request){


        $request->validate([
            'email' => 'required|unique:users',
        ]);

        $usuario = $request->all();
        $usuario['password'] = \Hash::make($request->password);
        $usuario = User::create($usuario);

        if($usuario){

        return back()->with('info', 'Administrador cadastrado');
        }



    }


    public function tabela_consultorias(){

        $testemunhos = Depoimento::all();
        $consultoria_limite = Consultoria::orderBy('created_at','DESC')->paginate(10);
        $usuarios = User::all();
        $consultorias = Consultoria::all();
        $notifications = \DB::table("consultorias")->where("notification", "=", "1")->get();
        $notificationsReaded = \DB::update("update consultorias set notification =  false;");


        return view('pages.Admin.table.table__consultorias', [
            'testemunhos' => $testemunhos,
            'consultoria_limite' => $consultoria_limite,
            'usuarios' => $usuarios,
            'consultorias' => $consultorias,
            "notifications" => $notifications,
            "notificationsReaded" => $notificationsReaded,
         ]);
    }

    public function apagar_consultoria($id){

        $consultoria = Consultoria::FindOrFail($id);
        $consultoria->delete();
        return back();
    }

    public function updateNotification(Request $request){

        $newNotifications = new Consultoria();
        $newNotifications->notification;
        $newNotifications = 0;
        $data = $newNotifications->save();
        return readirect()->back();

     }

     public function listImages(){
        $testemunhos = Depoimento::all();
        $usuarios = User::all();
        $consultorias = Consultoria::all();
        $notifications = \DB::table("consultorias")->where("notification", "=", "1")->get();
        $pictures = \DB::table("galleries")->get();
        $galleries = \DB::table("galleries")->paginate(10);

        return view("pages.Admin.table.table__gallery", ["galleries" => $galleries,
        "testemunhos" => $testemunhos,
        "usuarios" => $usuarios,
        "consultorias" => $consultorias,
        "notifications" => $notifications,
        "pictures" => $pictures,
        ]);
     }

     public function photoAdd(){
        $testemunhos = Depoimento::all();
        $usuarios = User::all();
        $consultorias = Consultoria::all();
        $notifications = \DB::table("consultorias")->where("notification", "=", "1")->get();

         return view("pages.Admin.formulario.adicionar__foto", [
            "testemunhos" => $testemunhos,
            "usuarios" => $usuarios,
            "consultorias" => $consultorias,
            "notifications" => $notifications,
         ]);
     }



     public function saveImage(Request $request){

    //Validação
    $request->validate([
            "photo" => ["required"],
         ]
     );

    $photoRequest = $request->all();
    $photo = $request->photo;
    $extension = $photo->extension();
    $nameFile = "foto".strtotime("now").".".$extension;

    if($request->hasFile("photo") && $request->file("photo")->isValid()){
    $photoRequest["photo"] = $nameFile;
    $photo->move(public_path("images/galeria"), $nameFile);
    $photo = Gallery::create($photoRequest);
    if($photo){
    return redirect()->back()->with('alert', 'A imagem foi salva com sucesso!');

    }else{
    return redirect()->back()->with('alertWrong', 'Erro ao salvar a image!');
    }

}

}

public function deleteImage($id){

    $image = Gallery::findOrFail($id);
    $image->delete();
    return redirect()->back();
}

}
