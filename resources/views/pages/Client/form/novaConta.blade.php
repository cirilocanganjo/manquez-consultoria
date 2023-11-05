@extends("pages/Client/Layout/App")
@section("title", "criação de conta")

@section("Content")
<section id="home" class="intro-section">
  <div class="container">
    <div class="row align-items-center text-white">
      <!-- START THE CONTENT FOR THE INTRO  -->
      <div class="col-md-6 intros text-center flex-wrap " style="margin-top: -5rem;">
        <h1 class="display-2">
          <span class="display-2--intro p-2">ManQuez Consultoria</span>
          <span class="display-2--description lh-base">
            Faça a abertura da sua conta e conheça os nossos serviços
          </span>
        </h1>

      </div>

      <!-- START THE CONTENT FOR THE VIDEO -->
      <div class="col-md-6 intros " style="margin-top: -4rem;">
        <div class="card text-dark">
            <div class="cardt-tittle text-center text-uppercase p-3">
                <h5 class="display-6">dados pessoais!</h5>
            </div>

            <div class="card-body">

                <form action="{{ route('conta/criada') }}" method="post">
                @csrf

                <div class=" form-group ">
                  <input class="shadow form-control form-control-lg mb-1" type="text" name="nome" value="{{ old('nome') }}" placeholder="Nome:" >
                  @error('nome') <span class="text-danger">{{ $message }}</span> @enderror

                  <input class="shadow form-control form-control-lg mb-1" type="email" name="email" value="{{ old('email') }}" placeholder="E-mail:">

                  @error('email') <span class="text-danger">{{ $message }}</span> @enderror


                  <input class="shadow form-control form-control-lg mb-1" type="tel" name="telefone" value="{{ old('telefone') }}" placeholder="Telefone:">

                  @error('telefone') <span class="text-danger">{{ $message }}</span> @enderror


                           </div>

                           </div>

                           <div class="segundo p-3">
                            <div class=" form-group  mb-3">
                               <select class="shadow form-select form-select-lg mb-1" value="{{ old('provincia') }}"  name="provincia">
                               <option selected disabled>Província:</option>
                               <option >Luanda</option>
                               <option>Benguela</option>
                               <option >Bengo</option>
                               <option >Bié</option>
                               <option >Kwanza Norte</option>
                               <option >Kwanza Sul</option>
                               <option >Namibe</option>
                               <option >Huambo</option>
                               <option >Huíla</option>
                               <option >Kuando Kubango</option>
                               <option >Cunene</option>
                               <option >Lunda Norte</option>
                               <option >Lunda Sul</option>
                               <option >Uíge</option>
                               <option >Zaire</option>
                               </select>
                               @error('provincia') <span class="text-danger">{{ $message }}</span> @enderror


                               <input class="shadow form-control form-control-lg mb-1" type="password" name="password" placeholder="Senha:">
                               @error('password') <span class="text-danger">{{ $message }}</span> @enderror

                               <input class="shadow form-control form-control-lg mb-1" type="password" name="confirmar_senha" placeholder="Confirmar senha:">
                               @error('confirmar_senha') <span class="text-danger">{{ $message }}</span> @enderror

                              <div class="form-group botao mt-2">
                                <button type="submit" class="  btn btn-primary form-control ">Salvar</button>
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



<div class="whatsapp-box">
    <a  href="https://api.whatsapp.com/send?phone=244991365207" target="_blank">
   <i class="icone fab fa-whatsapp"></i>
 </a>
</div>


@endsection

