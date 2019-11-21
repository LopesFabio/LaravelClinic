@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Relatórios</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><b>Pós-Consulta</b></li>
                            <li class="breadcrumb-item active">Relatórios</li>
                            <li class="breadcrumb-item active">Relatório Final</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->

        <!-- content -->
        <div class="login-box">
            <div class="card">
                <div class="card-body login-card-body">
                    <form action="{{route('pos.imprimir')}}" method="POST">
                        {{csrf_field()}}
                        <div class="input-group mb-3">
                            <select class="form-control" id="paciente" name="paciente">
                                <option value="" selected>Selecione o Paciente</option>
                                @foreach($pacientes as $paciente)
                                    <option value="{{$paciente->id}}">{{$paciente->nome}}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <label>Retorno</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" name="retorno" id="retorno">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-calendar"></span>
                                </div>
                            </div>
                        </div>
                        <label>Código da Consulta</label>
                        <div class="input-group mb-3">
                            <select class="form-control" name="consulta" id="consulta">
                                @foreach($consulta as $consulta)
                                    <option value="{{$consulta->id}}">{{$consulta->id}}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-calendar"></span>
                                </div>
                            </div>
                        </div>
                        <label>Observações</label>
                        <div class="input-group mb-3">
                            <textarea class="form-control" name="observacao" id="observacao"></textarea>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-calendar"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Imprimir</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection