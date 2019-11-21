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
                            <li class="breadcrumb-item active" style="color: green">Ativos</li>
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
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Cod</th>
                                <th>Nome</th>
                                <th>Documento</th>
                                <th>Sexo</th>
                                <th>Nascimento</th>
                                <th>Contato</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pacientes as $paciente)
                            <tr>
                                <td>{{$paciente->id}}</td>
                                <td>{{$paciente->nome}}</td>
                                @if($paciente->pais_natal == 'estrangeiro')
                                <td>RNE: {{$paciente->rne}}</td>
                                @endif
                                @if($paciente->pais_natal != 'estrangeiro')
                                <td>CPF: {{$paciente->cpf}}</td>
                                @endif
                                <td>{{$paciente->sexo}}</td>
                                <td>{{date('d-m-Y', strtotime($paciente->data_nascimento))}}</td>
                                <td>{{$paciente->telefone2}}</td>
                                <td><span class="badge bg-success">{{$paciente->situacao}}</span></td>
                                <td>
                                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                <i class="fa fa-ellipsis-v"></i>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="{{route('paciente.edit', $paciente->id)}}" class="nav-link">
                                                        <p><i class="fa fa-pencil-alt"></i></p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{route('paciente.show', $paciente->id)}}" class="nav-link">
                                                        <p><i class="fa fa-eye"></i></p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
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
                <a href="{{route('paciente.desativados')}}" class="btn btn-outline-danger">Pacientes Inativos</a>
                <a href="{{route('paciente.todos')}}" class="btn btn-outline-dark">Ver Todos Pacientes</a>
            </div>
        </div>
    <!-- /Content do Dashboard -->
@endsection

