@extends('pages.Admin.index')
@section('conteudo__dinamico')

<div class="card">
    <div class="card-header text-uppercase">
        <h5>Informação do evento</h5>
    </div>

    <!-- Parte da apresentação das mensagens -->
       @if (Session::has('message'))
     <div id="alert" class=" text-center container col-md-12 alert alert-warning text-dark mt-2">
        <span class="">{{ Session::get('message') }}</span>
  </div>
    @endif

<form action="{{ route('salvar/evento') }}" method="post" enctype="multipart/form-data">
@csrf

    <div class="d-flex flex-wrap mt-2">


    <div class="col-12 mx-auto">
        <div class="form-group">
            <label class="form-label" for="">Titulo evento:</label>
            <input placeholder="Digite o título do evento" class="form-control" type="text" name="titulo"  required>
            @error('titulo') <span class="text-danger">{{ $message }}</span> @enderror

        </div>
        <div class="form-group">
            <label class="form-label" for="">Foto:</label>
            <input  class="form-control" type="file" name="foto"  required>
            @error('foto') <span class="text-danger">{{ $message }}</span> @enderror

        </div>

        <div class="form-group">
            <label class="form-label" for="">Descrição:</label>
            <textarea rows="10" class="form-control" name="descricao" ></textarea>
             @error('descricao') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="">Data do evento:</label>
            <input class="form-control" type="date" name="data_evento" required>
            @error('data_evento') <span class="text-danger">{{ $message }}</span> @enderror
       </div>


    </div>

</div>

<!-- Botão -->
<div class="d-flex flex-wrap mx-1 p-1">
    <input type="submit" class="btn btn-primary" value="Salvar">
    <a class="mx-1 btn btn-primary" href="{{ route('eventos') }}">Lista de eventos</a>
</div>
<!-- FimBotão -->

</form>



</div>






@endsection
