/*
<!-- A logica abaixo, pega o nome da barra de endereço e compara,
 se for igual a rota do Admin faz um reload a cada 1 min -->
*/
let audioNotifications = document.querySelector("#audioNotifications");
let notificationsIcon = document.getElementById("notificationsIcon");
let notificationsCounter = document.getElementById("notificationsCounter");
let withoutNotificationText = document.getElementById("withoutNotificationText");
let withoutNotificationBox = document.getElementById("withoutNotificationBox");
let geturlName = window.location.href;

/* Oculta o objecto de Exibição de Áudios*/

 audioNotifications.style.display = "none";



/* Oculta o objecto de Exibição de Áudios*/

/*
    function PlayAudio()
    {
        if(audioNotifications.paused){
            audioNotifications.play();
    }
    else {
        audioNotifications.pause();
    }
    
    }

    PlayAudio();

*/

if(geturlName == "http://127.0.0.1:8000/painel/administrativo"){



   setInterval((AutoReloadPage) => {

       window.location.reload();

   },60000);

}

//Verificar e aplicar as lógicas abaixo, caso o Admin esteja nesta Rota
if(geturlName == "http://127.0.0.1:8000/admin/tabela/consultorias"){

notificationsIcon.classList += `d-flex align-items-center justify-content-center container fas fa-bell-slash fa-3x text-gray-600`;
notificationsCounter.style.display = "none";



}

