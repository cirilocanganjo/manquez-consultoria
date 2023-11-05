@extends('pages.Admin.index')
@section("title", "Listagem de usuários cadastrados")


@section('conteudo__dinamico')
<div class="card shadow mb-4">
    <div class="card-header py-3 ">
        <span class="m-0 fs-5 text-uppercase">Todos os Usuários</span>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table  table-condensed table-hover" id="dataTable" width="100%" cellspacing="0">

            <div class="mb-2">
                <a class="btn btn-success" href="{{Route('adicionar/admin')}}">
                     Novo usuário
                </a>
            </div>


                <thead class="text-uppercase text-center bg-primary text-white">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Província</th>
                        <th>Nível/Acesso</th>
                        <th>Data cadastro</th>
                        <th>Opção</th>
                    </tr>
                </thead>

                @foreach ($usuario_limite as $usuario)
                <tbody class="text-center">
                    <td class="text-start">{{ $usuario->nome }}</td>
                    <td class="text-start">{{ $usuario->email }}</td>
                    <td>{{ $usuario->telefone  }}</td>
                    <td>{{ $usuario->provincia }}</td>
                    <td>{{ $usuario->nivel_acesso }}</td>
                    <td>{{ $usuario->created_at->format('d/m/Y') }}</td>

                    <td ><a href="/admin/apagar/usuario/{{$usuario->userId}}" class="btn btn-danger btn-sm mx-2">Apagar</a></td>

                 </tbody>
                @endforeach
            </table>
            {{ $usuario_limite->links('pagination::simple-bootstrap-4') }}

        </div>
    </div>
</div>



@endsection
