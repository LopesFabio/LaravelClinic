@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Agendamentos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Consultas</a></li>
                            <li class="breadcrumb-item active">Agendamentos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Responsive Hover Table</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Paciente</th>
                                <th>Data</th>
                                <th>Hora</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($hoje as $hoje)
                            <tr>
                                <td>{{$hoje->id}}</td>
                                <td>{{$hoje->paciente_id}}</td>
                                <td>{{date('d-m-Y', strtotime($hoje->data))}}</td>
                                <td>{{date('d-m-Y', strtotime($hoje->hora))}}</td>
                                <td><a href="{{route('agendamento.show', $hoje->id)}}" style="color: black;"><i class="fa fa-eye"></i></a></td>
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
        <!-- /.primeira Linha do Dashboard -->
    </div>
@endsection