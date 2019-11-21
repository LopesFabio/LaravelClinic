@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Resultado da Busca</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Atendimentos</a></li>
                            <li class="breadcrumb-item active">Consultas</li>
                            <li class="breadcrumb-item active">Buscar</li>
                            <li class="breadcrumb-item active">Resultado</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->

        <!-- content -->

        <!-- Resultado por Código -->
        @if(isset($buscaCodigo))
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Paciente</th>
                                    <th>Data</th>
                                    <th>Hora</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{{$buscaCodigo->id}}</td>
                                    <td>{{$buscaCodigo->paciente_id}}</td>
                                    <td>{{$buscaCodigo->data}}</td>
                                    <td>{{$buscaCodigo->hora}}</td>
                                    <td><a href="{{route('agendamento.show', $buscaCodigo->id)}}"><i class="fa fa-eye" style="color: black"></i> </a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        @endif
        <!-- /Resultado por Código -->

        <!-- Resultado por Dentista -->
        @if(isset($buscaDentista))
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Paciente</th>
                                    <th>Data</th>
                                    <th>Hora</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($buscaDentista as $buscaDentista)
                                <tr>
                                    <td>{{$buscaDentista->id}}</td>
                                    <td>{{$buscaDentista->paciente_id}}</td>
                                    <td>{{$buscaDentista->data}}</td>
                                    <td>{{$buscaDentista->hora}}</td>
                                    <td><a href="{{route('agendamento.show', $buscaDentista->id)}}"><i class="fa fa-eye" style="color: black"></i> </a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        @endif
        <!-- /Resultado por Dentista -->

        <!-- Resultado por paciente -->
        @if(isset($buscaPaciente))
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Paciente</th>
                                    <th>Data</th>
                                    <th>Hora</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($buscaPaciente as $buscaPaciente)
                                    <tr>
                                        <td>{{$buscaPaciente->id}}</td>
                                        <td>{{$buscaPaciente->paciente_id}}</td>
                                        <td>{{$buscaPaciente->data}}</td>
                                        <td>{{$buscaPaciente->hora}}</td>
                                        <td><a href="{{route('agendamento.show', $buscaPaciente->id)}}"><i class="fa fa-eye" style="color: black"></i> </a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        @endif
        <!-- /Resultado por paciente -->

        <!-- Busca por mês -->
        @if(isset($buscaMes))
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Paciente</th>
                                    <th>Data</th>
                                    <th>Hora</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($buscaMes as $buscaMes)
                                    <tr>
                                        <td>{{$buscaMes->id}}</td>
                                        <td>{{$buscaMes->paciente_id}}</td>
                                        <td>{{$buscaMes->data}}</td>
                                        <td>{{$buscaMes->hora}}</td>
                                        <td><a href="{{route('agendamento.show', $buscaMes->id)}}"><i class="fa fa-eye" style="color: black"></i> </a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        @endif
        <!-- /Busca por mês -->

        <!-- Busca por dia -->
        @if(isset($buscaDia))
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Paciente</th>
                                    <th>Data</th>
                                    <th>Hora</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($buscaDia as $buscaDia)
                                    <tr>
                                        <td>{{$buscaDia->id}}</td>
                                        <td>{{$buscaDia->paciente_id}}</td>
                                        <td>{{$buscaDia->data}}</td>
                                        <td>{{$buscaDia->hora}}</td>
                                        <td><a href="{{route('agendamento.show', $buscaDia->id)}}"><i class="fa fa-eye" style="color: black"></i> </a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        @endif
        <!-- /Busca por dia -->
        <!-- /content -->
    </div>
@endsection