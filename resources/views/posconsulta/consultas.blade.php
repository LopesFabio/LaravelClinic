@extends('Painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Consultas Hoje {{date('d/m/Y')}}</h1>
                        <h1 class="m-0 text-dark">{{auth()->user()->name}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><b>Orçamentos</b></li>
                            <li class="breadcrumb-item active">Consultar</li>
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
                            <thead>
                            <tr>
                                <th>Consulta</th>
                                <th>Paciente</th>
                                <th>Hora</th>
                                <th>Descrição</th>
                                <th colspan="2">Atender</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            @foreach($agendamentos as $agendamento)
                                <td>{{$agendamento->id}}</td>
                                <td>{{$agendamento->paciente_id}}</td>
                                <td>{{$agendamento->hora}}</td>
                                <td>{{$agendamento->descricao}}</td>
                                <td><a href="{{route('relatorio.edit', $agendamento->id)}}" class="btn btn-outline-dark" style="color: black"><i class="fa fa-clipboard-list"></i></a></td>
                                <td><a href="{{route('orcamento.create')}}" class="btn btn-outline-dark" style="color: black"><i class="fa fa-dollar-sign"></i></a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /content -->
    </div>
@endsection