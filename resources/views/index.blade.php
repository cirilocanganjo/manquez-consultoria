@extends("Layout.App")
@section('title', 'ManQuez consultoria')
@section('conteudo')

<section id="whoArewe">
    <div class="container">
        <div class="row text-center">
            <h4 class="display-4 fw-bold text-uppercase">Quem somos</h4>
            <div class="heading-line mb-1"></div>
            <p class="lead text-justify textWhoAreWe">
                Somos uma empresa fundada em 2019, que dedica-se em prestar serviços   de consultoria empresarial.
                Nosso desafio é inovar continuamente, sempre buscando serviços de qualidade de interface amigável e de excelente custo e benefício.
                Nossa equipa conta com profissionais qualificados com compromisso em prestar um atendimento ágil, baseado na ética e na confiança priorizando às necessidades dos nossos clientes.
                Acreditamos em parcerias duradouras e estamos comprometidos em fazer o melhor para que nosso cliente tenha a melhor experiência possível.

            </p>
          </div>




    </div>
</section>

<!-- MISSÃO, VISÃO, OBJECTIVO -->

        <section class="mt-5 mb-5">

            <div class=" servicos d-flex flex-wrap container justify-content-center  col-md-12 ">

            <div style="background-color: #091841; width: 19rem;" class="mx-2 text-light card col-md-5   text-center mb-4 p-2">

                    <h3 class="display-6 fs-3 fw-bold mt-1 p-1 text-uppercase text-orange">Misão</h3>
                    <div class="text-center">

                    <div class=" text-justify p-1" >
                        <p class="lead fs-5">
                            Ajudar pessoas e empresas a criarem negócios lucrativos, oferecendo soluções estratégicas na gestão de capital humano
                        </p>

                    </div>
                    </div>

            </div>

            <div style="background-color: #091841; width: 20.5rem;" class="mx-2 text-light card col-md-5   text-center mb-4 p-2">


                    <h3 class="display-6 fs-3 fw-bold mt-1 p-1 text-uppercase text-orange">Visão</h3>

                    <div class="text-justify p-1" >

                        <span class="lead fs-5 ">
                            Ser reconhecida no mercado como empresa de consultoria empresarial que apresenta soluções das dores empresariais
                            através de uma verdadeira parceria com seus clientes que se mantém focada nas necessidades de cada empresa,
                            atendendo e respeitando a individualidade dos candidatos treinados.
                        </span>

                    </div>



            </div>

            <div style="background-color: #091841; width: 20.5rem;" class="mx-2 text-light card col-md-5   text-center mb-4 p-2">


                    <h3 class="display-6 fs-3 fw-bold mt-1 p-1 text-uppercase text-orange">Objectivo</h3>

                    <div class="text-justify p-1" >
                        <span class="lead fs-5">
                        O nosso principal objectivo de todos os nossos serviços é agregar valor ao seu negócio ou seja melhorar a performance da sua empresa não importa a dimensão                   </span>



                    </div>


            </div>


            </div>

        </section>
<!-- MISSÃO, VISÃO, OBJECTIVO -->



<section id="eventos" class="mt-5" >
  <div class="container ">
    <div class="row text-center ">
      <h1 class="display-3 fw-bold text-uppercase ">Eventos</h1>
      <div class="heading-line"></div>

    @if(count($events) === 0)
        <div class="alert alert-primary col-12   container">
            <span>Estamos sem eventos por enquanto, mantenha-te conectado para os próximos.</span>
        </div>
    @else

        @foreach ($events as $event)
        <div class="col-md-6 container mt-2 event-box ">
                <img class="img-fluid" src="{{asset("images/eventos/".$event->foto)}}" alt="">
                <p class="mt-2 p-2 text-justify shadow">{{$event->descricao}}</p>
            </div>
        @endforeach
    @endif

    </div>

    </div>

</section>

<!--
//////////////////////////////////////////////////////////////////////////////////////////////
                         START SECTION 4 - THE SERVICES
///////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="servicos" class="services">
  <div class="container">
    <div class="row text-center text-uppercase mt-5">
      <h4 class="display-4 fw-bold mt-5 ">Nossos Serviços</h4>
      <div class="heading-line mb-1"></div>
    </div>
  <!-- START THE DESCRIPTION CONTENT  -->

         <div class="text-justify col-md-8 text-center container d-flex flex-wrap flex-column  justify-content-center align-items-center  mb-1 text-center">

        <p class="lead text-center">
                Agora ficou mais fácil registar a sua empresa.<br>
                Com a ManQuez consultoria tens a solução que precisas, trabalhamos para si e ajudamos-te com o seu negócio!
             </p>
         </div>



  <!-- SERVICOS  -->
    <main>

      <div class=" servicos d-flex flex-wrap container justify-content-center  col-md-12 ">

        <div style="background-color: #091841; width: 20.5rem; " class=" text-light card col-md-5 mx-2 text-center mb-4 p-2">

              <div class="p-1" style="color: orangered;">
                <i class=" fas fa-handshake fs-1 "></i>
              </div>
                <h3 class="display-6 fs-3 fw-bold mt-1 p-1 text-uppercase">Consultoria Empresarial</h3>
                <div class="text-center" >
                  <div class="text-start"style="display: flex; flex-direction: column;">

                    <span class="lead fs-5">
                      - Consultoria
                  </span>
                  <span class="lead fs-5">
                      - Constituição de todo tipo de empresa e associações
                  </span>
                  <span class="lead fs-5">
                      - Alterações de sociedades
                  </span>
                  <span class="lead fs-5">
                      - Estudo de viabilidade
                  </span>
                  <span class="lead fs-5">
                      - Plano de negócio
                  </span>

                  <span class="lead fs-5">
                      - Obtenção de alvará comercial de servicos e industrial
                  </span>
                  <span class="lead fs-5">
                      - Cadastro corporativo ao INSS
                  </span>
                  <span class="lead fs-5">
                      - Criação de estatutos para todo tipo de empresa e organizações
                  </span>
                  <span class="lead fs-5">
                      - Elaboração de CV e carta de apresentação
                  </span>

                  <span class="lead fs-5">
                      - Registo de marcas e patentes
                  </span>

                  <span class="lead fs-5">
                      - Processos de nacionalidade
                  </span>
                  <span class="lead fs-5">
                      - Registo de produção nacional
                  </span>
                  <span class="lead fs-5">
                      - Atualização de documentos administrativos
                  </span>

                  <span class="lead fs-5">
                      - Licença de importação e exportação
                  </span>
                  <span class="lead fs-5">
                      - Licença de construção civil e obras públicas
                  </span>

                  <span class="lead fs-5">
                      - Representação a instituições financeiras
                  </span>

                  <span class="lead fs-5">
                      - Fornecimento e instalação de softwares
                  </span>
                  <span class="lead fs-5">
                      - Emissão de faturas
                  </span>
                  <span class="lead fs-5">
                      - Criação de logomarcas e carimbos
                  </span>


                  </div>


                </div>

        </div>

        <div style="background-color: #091841; width: 20.5rem;" class=" text-light card col-md-5   text-center mb-4 p-2">

              <div class="p-1" style="color: orangered;">
                <i class=" fas fa-hand-holding-usd fs-1 "></i>
              </div>
                <h3 class="display-6 fs-3 fw-bold mt-1 p-1 text-uppercase">Contabilidade Organizada e Fiscal</h3>
                <div class="text-center">

                <div class="text-start" style="display: flex; flex-direction: column;">
                  <span class="lead fs-5">
                    - Organização de documentos contabilísticos
                </span>
                <span class="lead fs-5">
                    - Processamento e liquidação de imposto
                </span>
                <span class="lead fs-5">
                    - Elaboração de relatórios e contas
                </span>
                <span class="lead fs-5">

                    - Realização de fecho de contas
                </span>

                <span class="lead fs-5">

                    - Suspensão temporária e definitiva do NIF
                </span>

                <span class="lead fs-5">

                    - Emissão de certidão contribuitiva não devedor
                </span>


                </div>

                </div>

        </div>

          <div style="background-color: #091841; width: 20.5rem;" class=" text-light card col-md-5 mx-2   text-center mb-4 p-2">

              <div class="p-1" style="color: orangered;">
                <i class=" fas fa-chart-line fs-1 "></i>
              </div>
                <h3 class="display-6 fs-3 fw-bold mt-1 p-1 text-uppercase">Gestão de capital Humano</h3>

                <div class="text-center">

                  <div class="text-start" style="display: flex; flex-direction: column;">
                  <span class="lead fs-5">
                    - Capital Humano
                </span>
                  <span class="lead fs-5">
                    - Processamento de salário
                </span>
                  <span class="lead fs-5">
                    - Inscrição do pessoal no INSS
                </span>
                  <span class="lead fs-5">
                    - Avaliação de desempenho
                </span>
                  <span class="lead fs-5">
                    - Qualificador ocupacional
                </span>
                  <span class="lead fs-5">
                    - Gestão de férias
                </span>
                </div>

                </div>

          </div>


          <div style="background-color: rgb(9, 24, 65); width: 20.5rem;" class=" text-light card col-md-5   text-center mb-4 p-2">

              <div class="p-1" style="color: orangered;">
                <i class=" fas fa-hands-helping fs-1 "></i>
              </div>
                <h3 class="display-6 fs-3 fw-bold mt-1 p-1 text-uppercase">Treinamento Profissional e Estágio</h3>

                <div class="text-center">

                  <div class="text-start" style="display: flex; flex-direction: column;">
                  <span class="lead fs-5">
                    - Administração de empresas
                </span>
                  <span class="lead fs-5">
                    - Gestão de pessoas
                </span>
                  <span class="lead fs-5">
                    - Secretariado executivo
                </span>
                  <span class="lead fs-5">

                    - Atendimento ao cliente
                </span>
                </div>

                </div>

          </div>


        </div>

    </main>
</section>


<section id="galeria" class="portfolio">
  <div class="container">
    <div class="row text-center mt-5">
      <h1 class="display-3 fw-bold text-uppercase">Galeria</h1>
      <div class="heading-line"></div>
      <p class="lead p-2">
      Ajudamos pessoas e empresas a criarem os negócios lucrativos e providenciar soluções na gestão de pessoas!

      </p>
    </div>

    <!-- FILTER BUTTONS  -->
  <!--
      <div class="row mt-5 mb-4 g-3 text-center">
        <div class="col-md-12">
          <button class="btn btn-outline-primary" type="button">Todas</button>
          <button class="btn btn-outline-primary" type="button">Projeto</button>
          <button class="btn btn-outline-primary" type="button">Áreas</button>
          <button class="btn btn-outline-primary" type="button">Mercado</button>
        </div>
    </div>
  -->

    <!-- START THE PORTFOLIO ITEMS  -->
<div class="row">

    @foreach($photos as $photoGallery)
        <div class="col-md-3 d-flex flex-wrap align-items-center justify-content-center">
            <div class="portfolio-box shadow">
                <img class="img-fluid" src="{{asset("images/galeria/".$photoGallery->photo)}}" />
            </div>
        </div>
    @endforeach


</div>

  </div>
</section>



<!-- ////////////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 5 - THE TESTIMONIALS
/////////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="testimonials" class="testimonials">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
  <div class="container">
    <div class="row text-center text-white">
      <h1 class="display-4 fw-bold text-uppercase">Depoimentos</h1>
       <hr style="width: 100px; height: 3px; " class="mx-auto mt-3">
    @auth
        @if(Auth::user()->nivel_acesso === "cliente")
        <a  href="{{Route('cliente.depoimento')}}">Adicione o seu depoimento e dê-nos o seu feedback</a>
        @endif
    @endauth

      <p class="lead pt-1">A satisfação dos nossos clientes é a nossa prioridade, venha fazer parte e garanta a sua felicidade. ManQuez Consultoria a sua disposição</p>
    </div>

    <!-- START THE CAROUSEL CONTENT  -->

    <div class="row align-items-center text-light">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- CAROUSEL ITEM 1 -->
          <div class="carousel-item active">

            <!-- testimonials card  -->
            <div class="testimonials__card">
              <p class="lh-lg">
                <i class="fas fa-quote-left text-white"></i>
               Eu não conseguia abrir a minha empresa,
               porque não sabia como começar, que documentos tratar e onde tratar,
                mas Graças a ManQuez
               consultoria já tenho a minha empresa bem constituida e legalizada!

               <i class="fas fa-quote-right text-white"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star text-white"></i>
                  <i class="fas fa-star text-white"></i>
                  <i class="fas fa-star text-white"></i>
                  <i class="fas fa-star text-white"></i>
                    <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                </div>
              </p>
            </div>


            <!-- client picture  -->
            <div class="testimonials__picture">
              <img  src="{{asset('images/user/unknow.png') }}" alt="client-1 picture" class="rounded-pill img-fluid">
            </div>
            <!-- client name & role  -->
            <div class="testimonials__name">
              <h3>Ana Karine</h3>
              <p class="fw-light">Gestora de projectos</p>
            </div>


          </div>

          @foreach ($depoimentos as $depoimento)
           <!-- CAROUSEL ITEM 2 -->
                <div class="carousel-item">
                    <!-- testimonials card  -->
                    <div class="testimonials__card">
                    <p class="lh-lg">
                        <i class="fas fa-quote-left text-white"></i>
                        {{ $depoimento->depoimento }}

                        <i class="fas fa-quote-right text-white"></i>
                        <div class="ratings p-1">
                        <i class="fas fa-star text-white"></i>
                        <i class="fas fa-star text-white"></i>
                        <i class="fas fa-star text-white"></i>
                        <i class="fas fa-star text-white"></i>
                        <i class="fas fa-star text-white"></i>
                        <i class="fas fa-star text-white"></i>
                        </div>
                    </p>
                    </div>
                    <!-- client picture  -->

                    <div class="testimonials__picture">
                    <img src="{{ asset('images/user/unknow.png') }}" alt="client-2 picture" class="rounded-circle img-fluid">
                    </div>

                    <!-- client name & role  -->
                    <div class="testimonials__name">
                    <h3>{{ $depoimento->nome_cliente }}</h3>
                    <p class="fw-light">{{ $depoimento->cargo }}</p>
                    </div>
                </div>
          @endforeach





          </div>

      <div class="text-center">
          <button class="btn btn-outline-light fas fa-long-arrow-alt-left" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        </button>
        <button class="btn btn-outline-light fas fa-long-arrow-alt-right" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        </button>
      </div>

      </div>


    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

</section>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                       START SECTION 6 - THE FAQ
//////////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="faq" class="faq">
  <div class="container">
    <div class="row text-center mt-4">
      <h1 class="fw-bold display-5 text-uppercase">Perguntas feitas frequentemente</h1>
      <div class="heading-line mt-2"></div>

    </div>
    <!-- ACCORDION CONTENT  -->
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="accordion" id="accordionExample">

            <!-- ACCORDION ITEM 0 -->
            <div class="accordion-item shadow mb-3">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 Quem somos?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                   <span>
                    Somos uma empresa de prestação de serviços vocacionada na área de consultoria empresarial.</span>



                </div>
              </div>
            </div>
          <!-- ACCORDION ITEM 1 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               O que é uma consultoria?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <span>
                  Consultoria é um serviço oferecido por um profissional
                  ou empresa de uma área específica para outro profissional ou empresa com a finalidade
                  de levantar as necessidades do cliente por meio de diagnosticos e processos e posteriormente recomendar ações de melhoria.
                </span>

              </div>
            </div>
          </div>

             <!-- ACCORDION ITEM 2 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               Que passos devo seguir para abertura da minha empresa?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body" style="display: flex; flex-direction: column">
              <span>
                - Conheça o seu mercado
              </span>
              <span>
                - Defina um objectivo alcançável
              </span>
              <span>
                - Dedique-se na prospecção de clientes
              </span>
              <span>
                - Invista na presença online
              </span>

              </div>
            </div>
          </div>
             <!-- ACCORDION ITEM 3 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Quais os benefícios de uma consultoria?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
             <span>
              A consultoria pode agilizar o alcance de resultados,além disso a experiência de mercado
              de um consultor evita que a organização cometa erros que possam atrasar o alcance dos seus objectivos.
            </span>

          </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- Script usado para pegar o ano de existência da Empresa -->
<script src="{{asset('js/App.js')}}"></script>
<!-- Script usado para pegar o ano de existência da Empresa -->

@endsection
