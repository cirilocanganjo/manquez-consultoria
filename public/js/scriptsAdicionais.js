
/* O script abaixo possiblita definir a duração do computente
 div na tela durante o temp de 3s->(4000 milissegundos)
 */
$("document").ready(function()
{
    setTimeout(function()
    {
        $("div.alert-success").remove();

    },6000);
});

//Função para a autenticação e preenchimento dos campos vazios
// $('#login').on('submit', function(event){
//     event.preventDefault(); 

//     if($('#email').val() == ""){
//         $('#alerta_campos_texto').html('<div class="alert alert-danger" role="alert">o campo de e-mail é obrigatório ser preenchido</div>')
//     }else if($('#senha').val() == ""){
//         $('#alerta_campos_texto').html('<div class="alert alert-danger" role="alert">o campo de senha é obrigatório ser preenchido</div>')

//     }else{
// 	 var credenciais = $("#login").serialize();
//      $.post("", credenciais, function (){
//      });
//     // alert('Ola mundo');
//     }


// });

//Esta sintaxe impede a pagina de recarregar quando clicado num botão
// $(function(){

//      $("#login").on('submit', function(e){
//           e.preventDefault();
        

//         //O código permite submeter a dados que provêm de páginas sem reload
//         $.ajax({
//             url:$(this).attr('action'),
//             method:$(this).attr('method'),
//             data:new FormData(this),
//             processData:false,
//             dataType: 'json',
//             contentType:false,
//             beforeSend: function(){
//                 $(document).find('span.error-text').text('')
//             },
//             success: function(data){
//                 if(data.status == 0){
//                     $.each(data.error, function(prefix, val){
//                     $('span.'+prefix+'_error').text(val[0]);

//                     })
//                 } 

//             }


//         });
//     });

//  });
