<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home\AppController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Administrator\AdminController;
use App\Http\Controllers\Administrator\ViceAdminController;
use App\Http\Controllers\Security\SecurityController;
use App\Http\Controllers\Auth\AuthenticationController;




//  https://www.manquez.ao
Route::get('/', [AppController::class, 'startApp'])->name("start/app");
//  https://www.manquez.ao


//Salvar as credenciais Iniciais do Admin
Route::controller(SecurityController::class)->group(function(){
    Route::get("/store/admin", "storeAdmin");
});


//Autenticação
Route::controller(AuthenticationController::class)->group(function(){

    Route::middleware(['usuario_jaAutenticado'])->group(function(){

    //Rotas de Autenticação,Criação de Conta
    Route::post('/autenticacao/usuario', 'autenticacao_usuario')->name('autenticacao/usuario');

    });


});



Route::controller(AdminController::class)->group(function(){

    Route::middleware(['AcessoAdministrador'])->group(function(){

        Route::get("/painel/administrativo", "index")->name("admin/index");

        Route::prefix('/admin')->group(function(){

            Route::get("/adicionar/novo/depoimento", "adicionarDepoimento")->name("depoimento.novo");
            Route::post("/salvar/novo/depoimento", "salvarDepoimentoAdmin")->name("salvar.depoimento");

            Route::get('/update/notifications', 'updateNotification');
            Route::get('/adicionar/evento', 'novo_evento')->name('novo/evento');
            Route::get('/eventos', 'tabela_eventos')->name('eventos');
            Route::post('/salvar/evento', 'salvar_evento')->name('salvar/evento');


            Route::get('/tabela/testemunhos', 'listaDepoimentos')->name('admin/tabela/testemunhos');
            Route::get('/apagar/testemunho/{id}', 'apagar_testemunho')->name('apagar/testemunho');

            Route::get('/adicionar/usuario', 'adicionar_admin')->name('adicionar/admin');
            Route::get('/adicionar/viceadmin', 'adicionar_viceadmin')->name('adicionar/viceadmin');
            Route::get('/editar/admin/{id}', 'editar_admin')->name('editar/admin');
            Route::post('/atualizar/dados' ,  'atualizar_admin')->name('atualizar/admin');

            Route::post('/conta/admin/criada' ,  'conta_admin_criada')->name('conta/admin/criada');
            Route::get('/apagar/usuario/{id}', 'apagar_usuario')->name('apagar/usuario');
            Route::get('/tabela/usuarios', 'tabela_usuarios')->name('tabela/usuarios');

            Route::get('/tabela/consultorias', 'tabela_consultorias')->name('admin/tabela/consultorias');
            Route::get('/apagar/consultoria/{id}', 'apagar_consultoria')->name('apagar/consultoria');

            //CRUD das Imagens para a Galeria
            Route::get("/galeria", "listImages")->name("fotos.manquez");
            Route::get("/adicionar/foto", "photoAdd")->name("foto.nova");
            Route::post("/salvar/foto", "saveImage")->name("photo.save");
            Route::get("/excluir/foto/{id}", "deleteImage");
        });


        });
});



Route::controller(ViceAdminController::class)->group(function(){


Route::middleware(['ViceAdmin'])->group(function(){

      Route::prefix('/gestor')->group(function(){

        Route::get('/index', 'index')->name('gestor/index');

        Route::get('/tabela/testemunhos', 'listaDepoimentos')->name('gestor/listagem/testemunhos');
        Route::get('/apagar/testemunho/{id}', 'apagar_testemunho')->name('apagar/testemunho');

        Route::get('/tabela/consultorias', 'tabela_consultorias')->name('tabela/consultorias');
    });

    });

});








Route::controller(UserController::class)->group(function(){

//grupo de middlwares caso nao esteja autenticado
    Route::middleware(['autenticarUsuario'])->group(function(){

    Route::get('/solicitacao/consultoria', 'solicitacaoConsultoria')->name('solicitacao.consultoria');
    Route::get('/efetuarar/depoimento', 'novoDepoimento')->name('cliente.depoimento');


});

//Fim grupo de middlwares caso nao esteja autenticado


//grupo de middlwares caso ja esteja autenticado
Route::middleware(['usuario_jaAutenticado'])->group(function()
{
    Route::get('/formulario/autenticacao', 'formulario_autenticacao')->name('formulario/autenticacao');
    Route::get('/criar/conta' , 'formulario_novaconta')->name('formulario/nova/conta');


});
//Fim grupo de middlwares caso ja esteja autenticado



//Área Administrativa


//Rotas para,Criação de Conta
Route::post('/conta/criada' ,  'conta_criada')->name('conta/criada');
Route::get('/terminar/sessao', 'logout')->name('terminar/sessao');

//Tes
Route::post('salvar/depoimento', 'salvarDepoimento')->name('salvar/depoimento');

//Enviar consultoria
Route::post("solicitar/consultoria", "solicitarConsultoria")->name("solicitar.consultoria");



});



