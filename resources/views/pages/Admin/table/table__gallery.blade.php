@extends('pages.Admin.index')
@section("title", "Listagem de fotos")

@section('conteudo__dinamico')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <span class="m-0 fs-5 text-uppercase">Galeria</span>
    </div>
    <div class="card-body">
        <div class="mb-2">
            <a  class="{{$pictures->count() >=8 ? "disabled btn btn-primary" : "btn btn-primary" }} " href="{{Route('foto.nova')}}">Adicionar foto</a>
        </div>

        <div class="table-responsive">
            <table class="table table-condensed table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-uppercase  table-dark text-light">
                    <tr>
                          <th class="">descrição</th>
                          <th class="">Prévia</th>
                         <th class="text-center">Data de carregamento</th>
                        <th class="d-flex justify-content-center" >Opções</th>
                    </tr>
                </thead>
                @if(count($galleries) === 0)
                    <div class="alert alert-danger text-center  mx-auto">Nenhuma foto encontrada
                        <a href="{{Route('foto.nova')}}">clique aqui para adicionar</a>
                    </div>
                @else
                @foreach ($galleries as $photo)
                <tbody>
                    <td class="d-flex align-items-center justify-content-start">
                         {{$photo->photo}}
                     </td>
                     <td class=""><img class="img-fluid img-rounded" width="35" src="{{asset("images/galeria/".$photo->photo)}}" alt=""></td>
                    <td class="text-center">{{$photo->created_at}}</td>
                    <td class="d-flex align-items-center justify-content-center">
                        <a href="{{asset("images/galeria")}}/{{$photo->photo}}" download="{{$photo->photo}}"  class="btn btn-success btn-sm"><i class="fa fa-download mx-1"></i>baixar</a>
                        <a href="/admin/excluir/foto/{{$photo->id}}" class=" mx-1 btn btn-danger btn-sm">remover<i class="fa fa-trash-alt mx-1"></i></a>
                       </td>
                </tbody>

                @endforeach
                @endif
            </table>

            {{$galleries->links('pagination::simple-bootstrap-4') }}
        </div>
    </div>
</div>



@endsection
