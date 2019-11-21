@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Pacientes</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Pacientes</a></li>
                            <li class="breadcrumb-item active" style="color: red;">Desativados</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->
        <!-- Content do Dashboard -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Cod</th>
                                <th>Nome</th>
                                <th>RG</th>
                                <th>CPF</th>
                                <th>Sexo</th>
                                <th>Nascimento</th>
                                <th>Contato</th>
                                <th>Status</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pacientes as $paciente)
                            <tr>
                                <td>{{$paciente->id}}</td>
                                <td>{{$paciente->nome}}</td>
                                <td>{{$paciente->rg}}</td>
                                <td>{{$paciente->cpf}}</td>
                                <td>{{$paciente->sexo}}</td>
                                <td>{{date('d/m/Y', strtotime($paciente->data_nascimento))}}</td>
                                <td>{{$paciente->telefone2}}</td>
                                <td><span class="badge bg-danger">{{$paciente->situacao}}</span></td>
                                <td><a href="{{route('paciente.edit', $paciente->id)}}" style="color: black"><i class="fa fa-pencil-alt"></i></a></td>
                                <td><td><a href="{{route('paciente.show', $paciente->id)}}" style="color: black"><i class="fa fa-eye"></i></a></td></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <ul class="pagination pagination-sm m-0 float-right">
                        @if ($pacientes->onFirstPage())
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $pacientes->previousPageUrl() }}"><i class="fa fa-arrow-left"></i> </a></li>
                        @endif
                        @if ($pacientes->hasMorePages())
                            <li class="page-item"><a class="page-link" href="{{ $pacientes->nextPageUrl() }}"><i class="fa fa-arrow-right"></i> </a></li>
                            @endif
                            </ul>
                    </div>
                </div>
                <a href="{{route('paciente.todos')}}" class="btn btn-outline-dark">Ver Todos Pacientes</a>
                <a href="{{route('paciente.index')}}" class="btn btn-outline-success">Ver Pacientes Ativos</a>
            </div>
        </div>
        <!-- /Content do Dashboard -->
    </div>
@endsection
