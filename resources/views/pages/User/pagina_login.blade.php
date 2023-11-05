@extends("pages.User.Layout.App")
@section("title", "Login")

    @section("Content")
         <div class="card container text-dark col-md-5  p-2">
               <!-- Parte da apresentação das mensagens -->
           @if (Session::has('informacao'))
          <div id="alert" class=" text-center container col-md-12 alert alert-success text-dark">
              <span class="">{{ Session::get('informacao') }}</span>
         </div>
          @endif

          @if (Session::has('alerta'))
          <div id="alert" class=" text-center container col-md-12 alert alert-warning text-dark">
              <span class="">{{ Session::get('alerta') }}</span>
         </div>
          @endif
      <!-- Fim da Parte da apresentação das mensagens -->

            <div class="card-tittle text-center text-captalize p-3">
                <h3 class="display-6">Autentique-se!</h5>
            </div>

            <div class="card-body ">

                <form method="post" action="{{ route('autenticacao/usuario') }}">
                @csrf

                 <div class="geral mb-4 mt-2">


                     <div class=" form-group col-md-12 col-sm-12 mb-2">

                         <input class="shadow form-control form-control-lg "  type="text" name="email" placeholder="E-mail:" >
                         @error('email')<span class="text-danger ">{{ $message }}</span> @enderror
                        </div>

                     <div class="form-group col-md-12">
                         <input class="shadow form-control form-control-lg" id="senha" type="password" name="password" placeholder="Senha:">
                         @error('password')<span class="text-danger ">{{ $message }}</span> @enderror

                     </div>


                     <div class="form-group col-md-12">

                         <button type="submit" class=" form-control btn btn-primary mt-2 ">Entrar</button>
                     </div>

                     <div class="form-group col-md-12  mt-3" >
                        <span>Ainda não tem uma conta? <a href="{{ route('formulario/nova/conta') }}">clique aqui para criar</a></span>
                     </div>

                 </div>
            </div>

        </form>

            </div>

        </div>

</div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>



    <div class="whatsapp-box">
        <a  href="https://api.whatsapp.com/send?phone=244991365207" target="_blank">
    <i class="icone fab fa-whatsapp"></i>
    </a>
    </div>
@endsection
