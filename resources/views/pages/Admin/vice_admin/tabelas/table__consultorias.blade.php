@extends('pages.Admin.vice_admin.index_viceadmin')
@section('conteudo__dinamico')

<div class="card shadow mb-4">
    <div class="card-header py-3 ">
        <span class="m-0 fs-5 text-uppercase">Consultorias Marcadasvdff</span>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-condensed table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="text-uppercase text-center table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Telefone</th>
                         <th>Serviço</th>
                        <th>Data</th>
                         <th>Opção</th>
                    </tr>
                </thead>

            @foreach ($consultoria_limite as $consultoria)
              <tbody class="text-center">
                @if($consultorias->count() === 0)
                <div class="col-md 12 text-center bg-danger">
                    <span>Não temos agendada nenhhuma consultoria de momento</span>
                </div>
                @else
                    <td class="col-md-5">{{ $consultoria->nome_cliente }}</td>
                    <td>{{ $consultoria->telefone }}</td>
                     <td>{{ $consultoria->servico_consultoria }}</td>
                    <td>{{ $consultoria->created_at->format('d-m-Y H:i').' min' }}</td>


                    <td><a href="/admin/apagar/consultoria/{{ $consultoria->id_consultoria }}" class="btn btn-danger btn-sm mx-2">Apagar</a></td>

                @endif
                </tbody>
            @endforeach
            </table>
            {{ $consultoria_limite->links('pagination::simple-bootstrap-4') }}
        </div>
    </div>
</div>



@endsection
