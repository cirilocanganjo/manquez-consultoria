<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ajudamos pessoas e empresas a criarem negócios lucrativos e a providenciar soluções na gestão de pessoas!">
    <meta name="keywords" content="Consultoria, Manquez Consultoria, Consultoria Empresarial">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/styles.css') }}">
  </head>
<body>
<!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 1 - THE NAVBAR SECTION
/////////////////////////////////////////////////////////////////////////////////////////////-->
<header id="home">

    <nav  class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top text-center">
        <div class="container">
          <a class="navbar-brand text-light logo d-flex flex-column align-items-center" href="/">
            <img height="40px;" width="40px;" src="{{ asset('images/logotipo/logotipo.png') }}" alt="Logo ManQuez">
            <p class="">ManQuez</p>
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav" >
              <li class="nav-item" ><a class="nav-link active" aria-current="page" href="{{Route("start/app")}}">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#whoArewe">Quem somos</a></li>
              <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
              <li class="nav-item"><a class="nav-link" href="#eventos">Eventos</a></li>
              <li class="nav-item"><a class="nav-link" href="#galeria">Galeria</a></li>
              @auth
              @if (Auth::user()->nivel_acesso === "cliente")
              <li class="nav-item "><a class="nav-link" href="{{Route("solicitacao.consultoria")}}" >Solicitar</a>
              @endif
              @endauth

              @guest
                <li class="nav-item"><a class="nav-link"  href="{{Route("formulario/autenticacao")}}">login</a></li>
              @endguest

                @auth
                <li class="nav-item dropdown ">
                    <a  class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->nome }}</a>
                    <div class="dropdown-menu ">
                    @if (Auth::user()->nivel_acesso === "cliente")
                      <a style="text-transform: none" class="dropdown-item text-dark text-capitalize " href="{{Route('terminar/sessao') }}">
                        <i class="fa fa-power-off"></i> Sair
                    </a>

                    @elseif(Auth::user()->nivel_acesso === "administrador")
                    <div >
                        <a class="dropdown-item  text-dark text-capitalize" href="{{Route("admin/index")}}">Área administrativa
                        </a>
                        <a class="dropdown-item  text-dark text-capitalize" href="{{Route('terminar/sessao') }}">Terminar sessão</a>
                    </div>

                    @elseif(Auth::user()->nivel_acesso === "gestor")
                      <a class="dropdown-item  text-dark   text-capitalize" href="{{Route("gestor/index")}}">Área administrativa</a>
                      <a class="dropdown-item  text-dark    text-capitalize" href="{{ route('terminar/sessao') }}">Terminar sessão</a>
                    @endif

                    </div>
                    </li>

                    </div>

                @endauth
            </ul>

          </div>
        </div>

    </nav>

</header>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                            START SECTION 2 - THE INTRO SECTION
/////////////////////////////////////////////////////////////////////////////////////////////////////-->

<section id="home" class="intro-section">

    <div class="d-flex flex-wrap text-center">

      <div class="container">
        <!-- Parte da apresentação das mensagens -->
      @if (Session::has('info'))
        <div id="alert" class=" text-center container col-md-10 alert alert-warning text-dark">
            <span class="">{{ Session::get('info') }}</span>
        </div>
        </div>
      @endif


      @if (Session::has('testemunho'))
        <div id="alert" class=" text-center container col-md-10 alert alert-warning text-dark">
            <span class="">{{ Session::get('testemunho') }}</span>
        </div>
        </div>
      @endif


    <div class=" col-md-6 container text-light  ">


        <h1 class="display-2">
          <span class="display-2--intro">ManQuez Consultoria</span>

            <span  class="display-2--description lh-base existencyBox">
                Há <strong class="timeFoundation text-orange" id="timeFoundation"></strong> anos de existência em que a sua satisfação é nossa prioridade.
            </span>
        </h1>

    </div>

  </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 310"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

  </section>


<!-- Conteúdo da Página -->

    @yield('conteudo')


<!-- Fim Conteúdo da Página -->




<div class="whatsapp-box">
    <a  href="https://api.whatsapp.com/send?phone=244991365207" target="_blank">
   <i class="icone fab fa-whatsapp"></i>
 </a>
</div>




<!-- ///////////////////////////////////////////////////////////////////////////////////////////
                           START SECTION 9 - THE FOOTER
///////////////////////////////////////////////////////////////////////////////////////////////-->
<footer id="sobre" class="footer ">
  <div class="container p-3" style="box-shadow: 0 0 0 0.10rem orangered;">
    <div class="row">
      <!-- CONTENT FOR THE MOBILE NUMBER  -->
  <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
            <path d="M15 7a2 2 0 0 1 2 2" />
            <path d="M15 3a6 6 0 0 1 6 6" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="tel:244931877583" class="contact-box__info--title">931 877 583</a>
          <p class="contact-box__info--subtitle">  Segunda-Sexta, 9h as 16h</p>
        </div>
  </div>
      <!-- CONTENT FOR EMAIL  -->
    <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <polyline points="3 9 12 15 21 9 12 3 3 9" />
            <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
            <line x1="3" y1="19" x2="9" y2="13" />
            <line x1="15" y1="13" x2="21" y2="19" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="mailto:geral@manquez.ao" class="contact-box__info--title">geral@manquez.ao</a>
          <p class="contact-box__info--subtitle">Suporte Online</p>
        </div>
    </div>
      <!-- CONTENT FOR LOCATION  -->
  <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="18" y1="6" x2="18" y2="6.01" />
            <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
            <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
            <line x1="9" y1="4" x2="9" y2="17" />
            <line x1="15" y1="15" x2="15" y2="20" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="#sobre" class="contact-box__info--title">Morro Bento, Luanda-Angola</a>
          <p class="contact-box__info--subtitle">Rua 21 de Janeiro, Condomínio Interland</p>
        </div>
  </div>

    </div>
     </div>

  <!-- START THE SOCIAL MEDIA CONTENT  -->
  <div class="footer-sm" style="background-color: rgb(9, 24, 65);">
    <div class="container">
      <div class="row py-4 text-center text-white">
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
          Visite as nossas Redes Sociais  <span> <i class="fas fa-arrow-right"></i></span>
        </div>
        <div class="col-lg-7 col-md-6">
          <a href="https://facebook.com/manquezconsultoria" target="_blank"><i class="fab fa-facebook"></i></a>
           <a href="https://instagram.com/manquezconsultoria" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- START THE CONTENT FOR THE CAMPANY INFO -->
  <div class="container mt-5 p-3" style="box-shadow: 0 0 0 0.10rem orangered;">
    <div class="row text-white justify-content-center mt-3 pb-3">
      <div class="col-12 col-sm-6 col-lg-6 mx-auto">
        <h5 class="text-capitalize fw-bold">ManQuez Consultoria</h5>
        <hr class="bg-white d-inline-block mb-4 mx-5" style="width: 100px; height: 2px;">
        <h5 class="">
         A sua satisfação é a nossa prioridade!
        </h5>
        <p class="lh-lg">
       Ajudamos pessoas e empresas a criarem negócios lucrativos e a providenciar soluções na gestão de pessoas!
      </p>

      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
        <h5 class="text-capitalize fw-bold">Áreas</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <ul class="list-inline campany-list">
          <li><a href="#">Consultoria Empresarial</a></li>
          <li><a href="#">Contabilidade Organizada e Fiscal</a></li>
          <li><a href="#">Gestão de Capital Humano</a></li>
          <li><a href="#">Treinamento Profissional e Estágio</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
        <h5 class="text-capitalize fw-bold">Navegador</h5>
        <hr class="bg-white d-inline-block mb-4 mx-3" style="width: 70px; height: 2px;">
        <ul class="list-inline campany-list">
          <li>Perguntas frequentes</li>
          <li>Depoimentos</li>
           <li>Agendar Consultoria</li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
        <h5 class="text-capitalize fw-bold">Contactos</h5>
        <hr class="bg-white d-inline-block mb-4 mx-3" style="width: 70px; height: 2px;">
        <ul class="list-inline campany-list">
           <li><a href="tel:+244931877583">+244931 877 583</a></li>
          <li><a href="tel:+244991365207">+244991 365 207</a></li>

        </ul>
      </div>
    </div>
  </div>

  <!-- START THE COPYRIGHT INFO  -->
  <div class="footer-bottom pt-5 pb-5">
    <div class="container">
      <div class="row text-center text-white">
        <div class="col-12">

          <div class="footer-bottom__copyright text-white ">
            &COPY;Copyright {{date("Y")}} ManQuez Consultoria - Todos os direitos reservados
          </div>

        </div>
      </div>
    </div>
  </div>
</footer>

 <!-- BACK TO TOP BUTTON  -->

 {{-- <a href="#" class="shadow btn-primary rounded-circle back-to-top">
  <i class="fas fa-chevron-up"></i>
</a>    --}}


     <script src="{{ asset('assets/vendors/js/glightbox.min.js') }}"></script>
     <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
     <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
     <script src="{{ asset('js/bootstrap.min.js') }}"></script>
     <script type="text/javascript" src="{{asset('js/scriptsAdicionais.js')}}" ></script>


</body>
</html>
