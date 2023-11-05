@extends('pages.Admin.index')
@section("title", "Depoimentos de clientes")

@section('conteudo__dinamico')
<div class="card shadow mb-4">
    <div class="card-header py-3 ">
        <span class="m-0 fs-5 text-uppercase">Todos os Depoimentos</span>
    </div>
    <div class="card-body">
         <div class="mb-2">
            <a class="btn btn-success" href="{{Route("depoimento.novo")}}">Adicionar novo</a>
        </div>

        <div class="table-responsive">
            <table class="table table-condensed table-hover " id="dataTable" width="100%" cellspacing="0">
                <thead class="text-uppercase text-center bg-primary text-white">
                    <tr>
                        <th>Nome</th>
                        <th>Cargo</th>
                        <th>Email</th>
                        <th>Texto </th>
                        <th>Opção</th></th>
                    </tr>
                </thead>

                @foreach ($testemunho_limite as $testemunho)
                <tbody class="text-center">
                    <td>{{ $testemunho->nome_cliente }}</td>
                    <td>{{$testemunho->cargo ?" $testemunho->cargo" : "Anônimo"}}</td>
                    <td>{{ $testemunho->email }}</td>
                    <td class="text-justify p-2">{{ $testemunho->depoimento }}</td>
                    <td><a href="/admin/apagar/testemunho/{{$testemunho->id_depoimento}}" class="btn btn-danger btn-sm mx-2">Apagar</a></td>
                </tbody>
                @endforeach
            </table>
            {{ $testemunho_limite->links('pagination::simple-bootstrap-4') }}
        </div>
    </div>
</div>



@endsection
