@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Relatório da Consulta</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><b>Pós-Consulta</b></li>
                            <li class="breadcrumb-item active">Emitir Relatório</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->

        <!-- content -->
        @include('Painel.alerts')
        <div class="card card-primary">
            <form action="{{route('relatorio.insert', $consulta->id)}}" method="POST">
                {{csrf_field()}}
                <div class="card-body">
                    <label>Relatório</label>
                    <div class="form-group">
                        <textarea rows="10" cols="170" id="relatorio" name="relatorio"></textarea>
                    </div>
                    <label>Consulta</label>
                    <div class="form-group">
                        <select class="form-control" id="consulta" name="consulta">
                            <option value="{{$consulta->id}}">Consulta Nº {{$consulta->id}}</option>
                        </select>
                        <p><br><b>Paciente:</b> {{$paciente->nome}}</p>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark">Salvar</button>
                    <a href="{{route('painel.index')}}" class="btn btn-secondary">Voltar</a>
                </div>
            </form>
        </div>
        <!-- /content -->
    </div>
@endsection