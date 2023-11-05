@extends('pages.Admin.index')
@section("title", "Solicitações de consultorias")

@section('conteudo__dinamico')
<div class="card shadow mb-4">
    <div class="card-header py-3 ">
        <span class="m-0 fs-5 text-uppercase">Consultorias Marcadas</span>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-condensed table-hover  " id="dataTable" cellspacing="0">
                <thead class=" text-uppercase text-center table-dark">
                    <tr>
                        <th>Nome</th>
                         <th>Serviço marcado</th>
                         <th>Anexo</th>
                        <th>Data</th>
                        <th class="d-flex align-items-center justify-content-end">Status/Opções</th>
                     </tr>
                </thead>


            @if(count($consultorias) === 0)
                <div class="col-md-12 text-center alert alert-info">
                    <span>Não temos agendada nenhuma consultoria de momento</span>
                </div>
            @else
            @foreach ($consultoria_limite as $consultoria)
                <tbody class="text-center ">
                   <td>{{ $consultoria->nome_cliente }}</td>
                   <td>{{ $consultoria->servico_consultoria }}</td>
                   <td class="d-flex align-items-center">{{$consultoria->attachment ? $consultoria->attachment : "Nenhum anexo enviado"}}
                    <a href="{{asset("files/pdfs")}}/{{$consultoria->attachment}}" download="{{$consultoria->attachment ? $consultoria->attachment: ""}}">
                        <i class="{{$consultoria->attachment ? "text-danger fa fa-file-pdf  mx-2" : ""}}"></i>
                    </a>
                    </td>
                  <td>{{ $consultoria->created_at->format("d/m/Y") }}</td>

                  <!-- <td class="messageCLients text-justify">{{ $consultoria->mensagem }}</td> -->

                <td class="d-flex align-items-center justify-content-end">
                      <a  id="clientStatus" href="#/{{ $consultoria->id_consultoria }}" class="btn btn-success btn-sm mx-1">Pendente</a>
                      <a href="/admin/apagar/consultoria/{{ $consultoria->id_consultoria }}" class="btn btn-danger btn-sm ">Apagar</a>
                </td>

                </tbody>
                @endforeach
            @endif

            </table>
            {{ $consultoria_limite->links('pagination::simple-bootstrap-4') }}
        </div>
    </div>
</div>



@endsection

