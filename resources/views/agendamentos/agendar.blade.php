@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Agendar Consulta</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Consultas</a></li>
                            <li class="breadcrumb-item active">Agendar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->
        @include('Painel.alerts')
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>Agendar Consulta</b></a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    @if(isset($agendamento))
                    <form action="{{route('agendamento.update', $agendamento->id)}}" method="POST">
                        {!! method_field('PUT') !!}
                    @else
                    <form action="{{route('agendamento.insert')}}" method="POST">
                    @endif
                        {{csrf_field()}}
                        <label>Paciente</label>
                        <div class="input-group mb-3">
                            <select class="form-control" style="border-left: none; border-top: none" id="paciente" name="paciente">
                                <option value="" selected></option>
                                @foreach($pacientes as $paciente)
                                <option value="{{$paciente->id}}">{{$paciente->id}} - {{$paciente->nome}}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text" style="border-top: none; border-right: none; border-bottom: none">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <label>Data</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" style="border-left: none; border-top: none" id="data" name="data" value="{{$agendamento->data or old('')}}">
                            <div class="input-group-append">
                                <div class="input-group-text" style="border-top: none; border-right: none; border-bottom: none">
                                    <span class="fas fa-calendar"></span>
                                </div>
                            </div>
                        </div>
                        <label>Hora</label>
                        <div class="input-group mb-3">
                            <input type="time" class="form-control" style="border-left: none; border-top: none" id="hora" name="hora" value="{{$agendamento->hora or old('')}}">
                            <div class="input-group-append">
                                <div class="input-group-text" style="border-top: none; border-right: none; border-bottom: none">
                                    <span class="fas fa-clock"></span>
                                </div>
                            </div>
                        </div>
                        <label>Orçamento</label>
                        <div class="input-group mb-3">
                            <select class="form-control" style="border-left: none; border-top: none" id="orcamento" name="orcamento">
                                <option value="" selected>Primeira Consulta</option>
                                @foreach($orcamentos as $orcamento)
                                <option value="{{$orcamento->id}}">Orçamento {{$orcamento->id}}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text" style="border-top: none; border-right: none; border-bottom: none">
                                    <span class="fas fa-file"></span>
                                </div>
                            </div>
                        </div>
                        <label>Convênio</label>
                        <div class="input-group mb-3">
                            <select class="form-control" style="border-left: none; border-top: none" id="convenio" name="convenio">
                                <option value="" selected>Sem Convênio</option>
                                @foreach($convenios as $convenio)
                                <option value="{{$convenio->id}}">{{$convenio->nome}}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text" style="border-top: none; border-right: none; border-bottom: none">
                                    <span class="fas fa-percentage"></span>
                                </div>
                            </div>
                        </div>
                        <label>Profissional</label>
                        <div class="input-group mb-3">
                            <select class="form-control" style="border-left: none; border-top: none" id="dentista" name="dentista">
                                <option value="" selected>Selecione:</option>
                                @foreach($dentistas as $dentista)
                                    <option value="{{$dentista->id}}">{{$dentista->name}}</option>
                                    @endforeach
                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text" style="border-top: none; border-right: none; border-bottom: none">
                                    <span class="fas fa-user-md"></span>
                                </div>
                            </div>
                        </div>
                        <label>Descrição</label>
                        <div class="input-group mb-3">
                            @if(isset($agendamento))
                            <textarea rows="4" cols="37" id="descricao" name="descricao">{{$agendamento->descricao}}</textarea>
                            @else
                            <textarea rows="4" cols="37" id="descricao" name="descricao"></textarea>
                            @endif
                            <div class="input-group-append">
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Salvar</button>
                            <a href="{{route('agendamento.index')}}" class="btn btn-danger btn-block btn-flat">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection