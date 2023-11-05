@extends('pages.Admin.index')
@section('conteudo__dinamico')

<div class="card">
    <div class="card-header text-uppercase">
        <h5>Dados necessários</h5>
    </div>

    <!-- Parte da apresentação das mensagens -->
       @if (Session('depoimentoMessage'))
     <div id="alert" class=" text-center container col-md-12 alert alert-warning text-dark mt-2">
        <span class="">{{Session::get('depoimentoMessage')}}</span>
  </div>
    @endif

<form action="{{Route("salvar.depoimento")}}" method="post" enctype="multipart/form-data">
@csrf

    <div class="d-flex flex-wrap mt-2">

    <div class="col-12 mx-auto">
        <div class="form-group">
            <label class="form-label" for="">Nome:</label>
            <input placeholder="Digite o título do evento" class="form-control" type="text" name="nome_cliente"  required value="{{old("nome_cliente")}}">
            @error('nome_cliente') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="">Cargo (opcional):</label>
            <input placeholder="Digite o título do evento" class="form-control" type="text" name="cargo">
            @error('cargo') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">Email:</label>
            <input placeholder="Digite o título do evento" class="form-control" type="email" name="email"  required>
         </div>


        <div class="form-group">
            <label class="form-label" for="">Texto:</label>
            <textarea rows="10" class="form-control" name="depoimento" required></textarea>
         </div>


    </div>

</div>

<!-- Botão -->
<div class="d-flex flex-wrap mx-1 p-1">
    <input type="submit" class="btn btn-primary" value="Salvar">
    <a class="mx-1 btn btn-primary" href="{{Route("admin/tabela/testemunhos")}}">Listar depoimentos</a>
</div>
<!-- FimBotão -->

</form>



</div>






@endsection
