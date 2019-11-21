@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Atendimento {{date('d/m/Y')}}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Atendimentos</a></li>
                            <li class="breadcrumb-item active">Principal</li>
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
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Cód.</th>
                                <th>Paciente</th>
                                <th>Hora</th>
                                <th>Dentista</th>
                                <th>Descrição</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($consultaDiaria as $agendamento)
                            <tr>
                                <td>{{$agendamento->id}}</td>
                                <td>{{$agendamento->paciente_id}}</td>
                                <td>{{date('H:i', strtotime($agendamento->hora))}}</td>
                                <td>{{$agendamento->dentista_id}}</td>
                                <td>{{$agendamento->descricao}}</td>
                                <td><a href="{{route('agendamento.show', $agendamento->id)}}"><i class="fa fa-eye" style="color: black"></i></a></td>
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