@extends("pages/Client/Layout/App")
@section("title", "registe o seu depoimento")

@section("Content")
<section id="home" class="intro-section">
  <div class="container">
    <div class="row align-items-center text-white">
      <!-- START THE CONTENT FOR THE INTRO  -->
      <div class="col-md-6 intros text-center flex-wrap " style="margin-top: -5rem;">
        <h1 class="display-2">

        <span class="display-2--intro p-2">ManQuez Consultoria</span>
          <span class="display-2--description lh-base p-2">
            Faça-nos a sua avaliação com base a experiência que teve sobre os nossos serviços deixando o seu comentário
          </span>

        </h1>
        <div>

            <i class="display-1 fa fa-thumbs-up "></i>
        </div>


      </div>

      <!-- START THE CONTENT FOR THE VIDEO -->
      <div class="col-md-6 intros " style="margin-top: -4rem;">
        <div class="card text-dark">
            <div class="cardt-tittle text-center text-uppercase p-3">
                <h5 class="display-6">dados necessários!</h5>
            </div>

            <div class="card-body">

                <form action="{{Route('salvar/depoimento')}}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- Hidden Field -->
                    <input type="hidden" name="userId" value="{{Auth::user()->userId}}">
                <!-- Hidden Field -->

                <!-- Exibição de Mensagem caso já tenha o email Adicionado-->
                @error("email")
                <div class="text-center alert alert-danger col-md-12 p-2">
                    <p class="">{{$message}} </p>
                </div>
                @enderror
                <!-- Exibição de Mensagem caso já tenha o email Adicionado-->


                <div class=" form-group ">
                 <input class="shadow form-control form-control-lg mb-1" type="hidden" name="nome_cliente" placeholder="Nome:" value="{{Auth::user()->nome}}">
                 <label class="p-1" for="form-label text-orange" style="color:orangered">Cargo (opcional)</label>
                 <select  class="shadow form-select form-control-lg mb-1" name="cargo">
                   <option selected disabled>Seleccione o seu cargo</option>
                   <option>CEO</option>
                   <option>CTO</option>
                   <option>Gestor de Projectos</option>
                   <option>Designer</option>
                   <option>Recepcionista</option>
                   <option>Empreendedor</option>
                 </select>

                  <input class="shadow form-control form-control-lg" type="hidden" name="email" placeholder="E-mail:" value="{{Auth::user()->email}}">
                 <label class="p-1" for="form-label">Depoimento</label>
                 <textarea required cols="10" rows="5" class="shadow form-control form-control-lg mb-1" placeholder="Digite aqui o seu depoimento" name="depoimento" ></textarea>

                  <div class="form-group botao mt-2">
                    <button type="submit" class="  btn btn-primary form-control ">Enviar</button>
                  </div>
                  <div class="text-center mt-2">
                      <a href="/">Ir para o início</a>

                  </div>

                </div>


            </div>






                    </div>



                </form>



            </div>

        </div>
      </div>



<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>

</section>


@endsection
