@extends('pages.Admin.vice_admin.index_viceadmin')
@section('conteudo__dinamico')

<div class="card shadow mb-4">
    <div class="card-header py-3 ">
        <span class="m-0 fs-5 text-uppercase">Todos os Testemunhos</span>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-uppercase text-center">
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>Cargo</th>
                        <th>Email</th>
                        <th>Data</th>
                        <th>Testemunho</th>
                     </tr>
                </thead>

                @foreach ($testemunho_limite as $testemunho)
                <tbody class="text-center">
                    <td>{{ $testemunho->id_testemunho }}</td>
                    <td>{{ $testemunho->nome_cliente }}</td>
                    <td>{{ $testemunho->cargo }}</td>
                    <td>{{ $testemunho->email }}</td>
                    <td>{{ $testemunho->created_at->format('d-m-Y H:i').' min' }}</td>

                    <td class="text-start p-2">{{ $testemunho->testemunho }}</td>
                 </tbody>
                @endforeach
            </table>
            {{ $testemunho_limite->links('pagination::simple-bootstrap-4') }}
        </div>
    </div>
</div>



@endsection
