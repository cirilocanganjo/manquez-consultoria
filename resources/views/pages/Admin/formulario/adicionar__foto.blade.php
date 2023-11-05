@extends('pages.Admin.index')
@section("title", "Adicionar foto à galeria")

@section('conteudo__dinamico')
<div class="card">
    <div class="card-header text-uppercase">
        <h5>Informações necessárias</h5>
    </div>

    <!-- Parte da apresentação das mensagens -->
       @if(Session("alert"))
     <div id="alert" class=" text-center container col-md-12 alert alert-warning text-dark mt-2">
        <span class="">{{ Session("alert") }}</span>
  </div>
    @endif

<form action="{{Route("photo.save")}}" method="POST" enctype="multipart/form-data">
@csrf

    <div class="d-flex flex-wrap mt-2">


    <div class="col-10 ">

        <div class="form-group">
            <label class="form-label" for="">Foto:</label>
            <input  class="form-control" type="file" name="photo"  required>
            @error('photo') <span class="text-danger">{{$message}}</span> @enderror
        </div>



    </div>

</div>

<!-- Botão -->
<div class="d-flex flex-wrap mx-1 p-1">
    <input type="submit" class="btn btn-primary" value="Salvar">
    <a class="mx-1 btn btn-primary" href="{{Route('fotos.manquez')}}">Consultar galeria</a>
</div>
<!-- FimBotão -->

</form>



</div>






@endsection
