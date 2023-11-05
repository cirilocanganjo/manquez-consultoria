@extends('pages.Admin.index')
@section("title", "Listagem de eventos")


@section('conteudo__dinamico')
<div class="card shadow mb-4">
    <div class="card-header py-3 ">
        <span class="m-0 fs-5 text-uppercase">Lista de eventos</span>
    </div>
    <div class="card-body">
        <div class="mb-2">
            <a class="btn btn-primary" href="{{Route('novo/evento') }}">Adicionar evento</a>
        </div>

        <div class="table-responsive">
            <table class="table table-condensed table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-uppercase text-center table-dark">
                    <tr>

                        <th>Titulo</th>
                        <th>Descricao</th>
                         <th>Data</th>
                        <th>Opções</th>

                    </tr>
                </thead>
                @if(count($evento) === 0)
                    <div class="alert alert-warning text-center  mx-auto">Nenhum evento por enquanto
                        <a href="{{ route('novo/evento') }}">clique aqui para adicionar</a>
                    </div>
                @else

                @foreach ($evento_limite as $eventos)
                <tbody>

                    <td>{{$eventos->titulo}}</td>
                    <td class="col-md-6 text-justify">{{$eventos->descricao}}</td>
                    <td>{{$eventos->data_evento}}</td>
                     <td><a href="{{ $eventos->id }}" class="btn btn-danger btn-sm mx-2">Apagar</a></td>
                </tbody>
                @endforeach
                @endif
            </table>

            {{ $evento_limite->links('pagination::simple-bootstrap-4') }}
        </div>
    </div>
</div>



@endsection
