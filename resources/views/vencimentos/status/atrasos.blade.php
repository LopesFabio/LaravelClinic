@extends('Painel.menu.index')

@section('content')

    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Vencimentos Atrasados</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Vencimentos</a></li>
                            <li class="breadcrumb-item active">Prazos Vencidos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->
        {{-- conteudo --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Consulta</th>
                                <th>Data</th>
                                <th>Valor</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($atrasados as $atrasado)
                            <tr>
                                <td>{{$atrasado->id}}</td>
                                <td>{{$atrasado->agendamento_id}}</td>
                                <td>{{{date('d/m/Y', strtotime($atrasado->data_vencimento))}}}</td>
                                <td>R$ {{number_format($atrasado->valor,2,",",".")}}</td>
                                <td><a href="#" class="btn btn-outline-success">Pagar</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <ul class="pagination pagination-sm m-0 float-right">
                            @if ($atrasados->onFirstPage())
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $atrasados->previousPageUrl() }}"><i class="fa fa-arrow-left"></i> </a></li>
                            @endif
                            @if ($atrasados->hasMorePages())
                                <li class="page-item"><a class="page-link" href="{{ $atrasados->nextPageUrl() }}"><i class="fa fa-arrow-right"></i> </a></li>
                            @endif
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        {{-- /conteudo --}}
    </div>
@endsection