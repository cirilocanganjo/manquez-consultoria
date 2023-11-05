@extends("pages/Client/Layout/App")
@section("title", "solicitação de consultoria")

@section("Content")
    <section id="home" class="intro-section " style="margin-top:-8rem;">

  <section  class="get-started" >
    <div class="container" >

      <div class="row text-center">

        <h1 class="display-3 fw-bold text-uppercase">Contacte-nos</h1>
        <div class="heading-line"></div>
        <p class="lh-lg">
        Ajudamos Pessoas e Empresas a criarem negócios lucrativos e providenciar soluções na Gestão de Pessoas!

        </p>
      </div>

    <!--  PARTE ESQUERDA DO CONTAINER -->
    <div class="row   bg-white text-dark"  style="box-shadow: 0 0 0 0.25rem orangered;">

        <div class="col-12 col-lg-6 gradient shadow p-3">



          <div class=" form w-100 pb-2">

            <h3 class="display-4--title mb-5 text-center text-uppercase ">Marque a sua consultoria</h3>
            <form method="post" action="{{Route("solicitar.consultoria")}}" class="row" enctype="multipart/form-data">
              @csrf

              <!-- Hidden Field userId -->
                <input type="hidden" name="userId" value="{{Auth::user()->userId}}">
              <!-- Hidden Field userId -->
              <div class="col-lg-6 col-md mb-3">
                  <label class="form-label" for="">Nome:</label>
                <input type="text" placeholder="Nome" id="inputFirstName" name="nome_cliente" class="shadow form-control form-control-lg" value="{{ Auth::user()->nome }}">
              </div>
              <div class="col-lg-6 col-md mb-3">
                <label class="form-label" for="">Telefone:</label>

                <input type="text" placeholder="Contacto" name="telefone"  id="inputLastName" class="shadow form-control form-control-lg" value="{{ Auth::user()->telefone}}">
                @error('telefone') <span class="text-danger">{{ $message }}</span> @enderror

              </div>

              <div class="col-lg-12 mb-3">
                <label class="form-label" for="">Email:</label>
                  <input type="email" placeholder="Email" name="email"   id="inputEmail" class="shadow form-control form-control-lg" value="{{ Auth::user()->email }}">
                </div>

            <div class="col-lg-12 mb-3">
                <label class="form-label" for="">Serviço:<br>
                    @error('servico_consultoria') <span id="text-alert" class="text-danger  ">{{ $message }}</span> @enderror
                </label>

               <select class="shadow form-select form-select-lg" name="servico_consultoria" >
                  <option disabled selected >Selecionar</option>

                     <option>Consultoria Empresarial</option>
                     <option>Contabilidade Organizada e Fiscal</option>
                     <option>Gestão de Capital Humano</option>
                     <option>Treinamento Profissional e Estágio</option>
               </select>
            </div>


              <div class="col-lg-12 mb-3">
                    <label class="form-label text-danger" for="">Anexar ficheiro pdf (Opcional):</label>
                    <input type="file"  name="attachment" accept="application/pdf" size="1024"  class="shadow form-control form-control-lg"  >
                    @if(Session("alert"))
                    <span class="text-danger mt-2">{{Session("alert")}}</span>
                    @endif
              </div>

              <div class="col-lg-12 mb-3">
                <label class="form-label" for="">Assunto(Opcional):</label>

              <textarea style="resize: none;" name="mensagem"  id="message" rows="4" class="shadow form-control form-control-lg" ></textarea>
              </div>
              <div class="text-center d-grid mt-1">


                <button  type="submit"  class="btn btn-primary rounded-pill pt-3 pb-3">
                  Enviar
                  <i class="fas fa-paper-plane"></i>
                </button>
                <div class="text-center p-2">
                  <a href="/">Ir para o início</a>
                </div>


              </div>
            </form>



          </div>
        </div>
    <!-- FIM PARTE ESQUERDA DO CONTAINER -->


         <!-- PARTE DIREITA DO CONTAINER -->
        <div class="col-12 col-lg-6 text-white  shadow p-1" style="background-color: rgb(9, 24, 65); !important" >
          <div class="cta-info w-100" >


            <h4 class="display-4 fw-bold">Satisfação Garantida a 100%</h4>

            <p class="lh-lg">
           ManQuez Consultoria, há <strong class="timeFoundation text-orange" id="timeFoundation"></strong> anos trabalhando para si, dando  nosso melhor para suprir e cobrir as necessidades
           dos nossos Clientes com vigor!
            </p>

            <p class="lh-lg">
             A sua satisfação é a nossa prioridade!
            </p>
            <h3 class="display-3--brief">A sua empresa precisa de acessoria jurídica e fiscal ou acessoria de RH?</h3>
            <ul class="cta-info__list">
              <li>Estamos aqui.</li>
              <li>Temos a solução do que procura.</li>

            </ul>




          </div>
        </div>

    <!-- FIM PARTE DIREITA DO CONTAINER -->





      </div>
    </div>
  </section>

<!-- Cria o efeito de ondas na página-->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
<!-- Fim Criar o efeito de ondas na página-->

</section>

<div class="whatsapp-box">
  <a  href="https://api.whatsapp.com/send?phone=244991365207" target="_blank">
 <i class="icone fab fa-whatsapp"></i>
</a>
</div>

<script src="{{asset('js/App.js')}}"></script>
@endsection
