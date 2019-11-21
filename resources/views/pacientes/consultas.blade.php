@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">
                            Consultas do Paciente: <b>{{$paciente->nome}}</b>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Consultas</a></li>
                            <li class="breadcrumb-item active">Pacientes</li>
                            <li class="breadcrumb-item active">{{$paciente->nome}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->
        <!-- content -->
        <!-- \content -->
    </div>
@endsection