@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Todos Convênios</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Convênios</a></li>
                            <li class="breadcrumb-item active" style="color: green">Todos</li>
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
                                <th>Cód.</th>
                                <th>Plano</th>
                                <th>Desconto</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($convenios as $convenio)
                            <tr>
                                <td>{{$convenio->id}}</td>
                                <td>{{$convenio->nome}}</td>
                                @if($convenio->tipo == 'dinheiro')
                                <td>R$ {{number_format($convenio->desconto, 2)}}</td>
                                @else
                                <td>{{$convenio->desconto}}%</td>
                                @endif
                                @if($convenio->status == 'ativo')
                                <td><p class="badge bg-success">{{$convenio->status}}</p></td>
                                @else
                                <td><p class="badge bg-danger">{{$convenio->status}}</p></td>
                                @endif
                                <td><a href="{{route('convenio.edit', $convenio->id)}}"><i class="fa fa-pencil-alt" style="color: black"></i> </a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{route('convenio.index')}}" class="btn btn-outline-dark">Voltar</a>
                        <ul class="pagination pagination-sm m-0 float-right">
                            @if ($convenios->onFirstPage())
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $convenios->previousPageUrl() }}"><i class="fa fa-arrow-left"></i> </a></li>
                            @endif
                            @if ($convenios->hasMorePages())
                                <li class="page-item"><a class="page-link" href="{{ $convenios->nextPageUrl() }}"><i class="fa fa-arrow-right"></i> </a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /Content do Dashboard -->
    </div>
@endsection