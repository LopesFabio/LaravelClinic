@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Relatório de Consulta Nº</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Relatório</a></li>
                            <li class="breadcrumb-item active">Finalizar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->
        <!-- content -->
        <div class="row">
            <div class="col-12">
                    <div class="card-body table-responsive p-0">
                       <p><b>Dados da Consulta:</b></p>
                        <p>Nº: {{$consulta->id}}</p>
                        <p>Paciente: {{$paciente->nome}}</p>
                        <p>Dia: {{$consulta->data}}</p>
                        <p>Hora: {{$consulta->hora}}</p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /content -->
    </div>
@endsection