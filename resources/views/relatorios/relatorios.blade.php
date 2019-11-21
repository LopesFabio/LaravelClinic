@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Relatórios Diários</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Relatórios</a></li>
                            <li class="breadcrumb-item active">Hoje</li>
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
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Consulta</th>
                                <th>relatorio</th>
                                <th>Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($relatorios as $relatorio)
                            <tr>
                                <td>{{$relatorio->id}}</td>
                                <td>{{$relatorio->consulta_id}}</td>
                                <td>{{$relatorio->relatorio	}}</td>
                                <td><a href="{{route('relatorio.show', $relatorio->id)}}" style="color: black" class="btn btn-outline-dark"><i class="fa fa-eye"></i> </a></td>
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