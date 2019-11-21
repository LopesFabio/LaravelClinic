@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Agendamentos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Consultas</a></li>
                            <li class="breadcrumb-item active">Agendamentos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th style="width: 10px">Cód.</th>
                        <th>Paciente</th>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Orçamento</th>
                        <th>Convenio</th>
                        <th>Dentista</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($agendamentos as $agendamento)
                    <tr>
                        <td>{{$agendamento->id}}</td>
                        <td>{{$agendamento->paciente_id}}</td>
                        <td>{{date('d-m-Y', strtotime($agendamento->data))}}</td>
                        <td>{{date('H:i', strtotime($agendamento->hora))}}</td>
                        @if(isset($agendamento->orcamento))
                        <td>{{$agendamento->orcamento_id}}</td>
                        @else
                        <td>Primeira Consulta</td>
                        @endif
                        @if(isset($agendamento->convenio_id))
                        <td>{{$agendamento->convenio_id}}</td>
                        @else
                        <td>Sem Convênio</td>
                        @endif
                        <td>{{$agendamento->dentista_id}}</td>
                        <td>
                            <a href="{{route('agendamento.edit', $agendamento->id)}}"><i class="fa fa-pencil-alt" style="color: black"></i></a>
                        </td>
                        <td>
                            <a href="{{route('agendamento.show', $agendamento->id)}}"><i class="fa fa-eye" style="color: black"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <ul class="pagination pagination-sm m-0 float-right">
                    @if ($agendamentos->onFirstPage())
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $agendamentos->previousPageUrl() }}"><i class="fa fa-arrow-left"></i> </a></li>
                    @endif
                    @if ($agendamentos->hasMorePages())
                        <li class="page-item"><a class="page-link" href="{{ $agendamentos->nextPageUrl() }}"><i class="fa fa-arrow-right"></i> </a></li>
                    @endif
                </ul>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.primeira Linha do Dashboard -->
    </div>
@endsection