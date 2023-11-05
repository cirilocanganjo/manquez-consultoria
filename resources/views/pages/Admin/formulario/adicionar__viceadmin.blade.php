@extends('pages.Admin.index')
@section('conteudo__dinamico')

<div class="card">
    <div class="card-header text-uppercase">
        <h5>Informação pessoal</h5>
    </div>

    <!-- Parte da apresentação das mensagens -->
       @if (Session::has('info'))
     <div id="alert" class=" text-center container col-md-8 alert alert-warning text-dark mt-2">
        <span class="">{{ Session::get('info') }}</span>
  </div>
    @endif

<form action="{{ route('conta/admin/criada') }}" method="post">
@csrf

    <div class="d-flex flex-wrap mt-2">

    <div class="col-md-5 ">
        <div class="form-group">
            <label class="form-label" for="">Nome:</label>
            <input placeholder="Digite o nome" class="form-control" type="text" name="name"  required>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Email:</label>
            <input placeholder="Digite o email" class="form-control" type="email" name="email" required>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">Telefone:</label>
            <input placeholder="Digite o número de telefone" class="form-control" type="tel" name="telefone" required>

        </div>


    </div>

    <div class="col-md-5 ">

        <div class="form-group">
            <label class="form-label" for="">Província:</label>
            <select class="form-select" name="provincia" required>
            <option>Luanda</option>
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
        </div>



        <div class="form-group">
            <label class="form-label" for="">Senha:</label>
            <input placeholder="Digite a palavra-passe" class="form-control" type="password" name="password" required>
        </div>


        <!-- Campo de texto oculto para o perfil do usuario-->
        <input type="hidden" name="vice_administrador" value="1">
        <input type="hidden" name="administrador" value="0">
        <input type="hidden" name="cliente" value="0">

    </div>

</div>
<div class="mx-3 mb-1">
    <input class="btn btn-primary" type="submit" value="Salvar">
</div>
</form>



</div>






@endsection
