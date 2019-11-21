@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Detalhes do Agendamento Número: {{$agendamento->id}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Dentistas</a></li>
                            <li class="breadcrumb-item active">Todos</li>
                            <li class="breadcrumb-item active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->
        <!-- content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <tr>
                                <th>Paciente</th>
                                <td>{{$paciente->nome}}</td>
                                <th>Data</th>
                                <td>{{date('d/m/Y', strtotime($agendamento->data))}}</td>
                                <th>Hora</th>
                                <td>{{date('H:i', strtotime($agendamento->hora))}}</td>
                                <th>Profissional</th>
                                <td>{{$dentista->name}}</td>
                            </tr>
                            @if(isset($orcamento))
                            <tr>
                                <th>Orçamento Nº</th>
                                <td>{{$agendamento->orcamento_id}}</td>
                                <th>Valor</th>
                                <td>R$ {{number_format($orcamento->valor, 2)}}</td>
                                <th>Detalhes</th>
                                <td><a href="#">Ver Descrição do Orçamento</a></td>
                                <th></th>
                                <td></td>
                            </tr>
                            @endif
                            @if(isset($convenio))
                            <tr>
                                <th>Convênio Nº</th>
                                <td>{{$agendamento->convenio_id}}</td>
                                <th>Plano</th>
                                <td>{{$convenio->nome}}</td>
                                <th>Desconto</th>
                                @if($convenio->tipo == 'dinheiro')
                                <td>R$ {{number_format($convenio->desconto, 2)}}</td>
                                @else
                                <td>{{$convenio->desconto}}%</td>
                                @endif
                                <th></th>
                                <td></td>
                            </tr>
                            @endif
                            <tr>
                                <th>Valor da Consulta</th>
                                @if(isset($convenio))
                                    @if($valorTotal < 0)
                                    <td>R$ 00,00</td>
                                    @else
                                    <td>R$ {{number_format($valorTotal, 2)}}</td>
                                    @endif
                                @else
                                    @if($valorTotal > 0)
                                    <td>R$ {{number_format($valorTotal, 2)}}</td>
                                    @else
                                   <td>Primeira Consulta</td>
                                   @endif
                                @endif
                                <th></th>
                                <td></td>
                                <th></th>
                                <td></td>
                                <th></th>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <label>Observações para a consulta</label>
                <div class="form-group">
                    <textarea rows="5" cols="100" disabled>{{$agendamento->descricao}}</textarea>
                </div>
                <a href="{{route('agendamento.index')}}" class="btn btn-outline-dark">Voltar</a>
            </div>
        </div>

        <!-- /content -->
    </div>
@endsection