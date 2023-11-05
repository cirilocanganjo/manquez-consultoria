@extends('pages.Admin.index')
@section('conteudo__dinamico')

<div class="card">
    <div class="card-header text-uppercase">
        <h5>Informação pessoal</h5>
    </div>

    <!-- Parte da apresentação das mensagens -->
       @if (Session::has('admin_updated'))
     <div class=" text-center container col-md-8 alert alert-warning text-dark mt-2">
        <span class="">{{ Session::get('admin_updated') }}</span>
  </div>
    @endif

<form action="{{ route('atualizar/admin') }}" method="post">
@csrf

    <div class="d-flex flex-wrap mt-2">

    <div class="col-md-5 ">
        <div class="form-group">
            <label class="form-label" for="">Nome:</label>
            <input placeholder="Digite o nome" class="form-control" type="text" name="name" value="{{ $editar_admin->name ?? '' }}"  required>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Email:</label>
            <input placeholder="Digite o email" class="form-control" type="email" name="email" value="{{ $editar_admin->email ?? '' }}"required>
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">Telefone:</label>
            <input placeholder="Digite o número de telefone" class="form-control" type="tel" name="telefone" value="{{ $editar_admin->telefone ?? '' }}" required>


        </div>


    </div>

    <div class="col-md-5 ">

        <div class="form-group">
            <label class="form-label" for="">Província:</label>
            <input class="form-control" name="provincia" type="text" value="{{ $editar_admin->provincia ?? '' }}" required>

        </div>

        <div class="form-group">
            <label class="form-label" for="">Senha:</label>
            <input placeholder="Digite a nova palavra-passe" class="form-control" type="password" name="password" value="{{ $editar_admin->password ?? '' }}" required>
        </div>

        <!-- Campo de texto oculto para o perfil do usuario-->
        <input type="hidden" name="administrador" value="1">
        <input type="hidden" name="cliente" value="0">

    </div>

</div>
<div class="mx-3 mb-1">
    <input class="btn btn-primary" type="submit" value="Salvar">
</div>
</form>



</div>






@endsection
