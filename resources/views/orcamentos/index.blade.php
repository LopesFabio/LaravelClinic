@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Orçamento</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><b>Orçamentos</b></li>
                            <li class="breadcrumb-item active">Consultar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->

        <!-- content -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">N°</th>
                        <th style="width: 120px">Valor</th>
                        <th>Descrição</th>
                        <th style="width: 40px"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orcamentos as $orcamento)
                    <tr>
                        <td>{{$orcamento->id}}</td>
                        <td>R$ {{number_format($orcamento->valor, 2)}}</td>
                        <td>{{$orcamento->descricao}}</td>
                        <td><a href="{{route('orcamento.edit', $orcamento->id)}}"><i class="fa fa-pencil-alt" style="color:black;"></i> </a> </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <ul class="pagination pagination-sm m-0 float-right">
                    @if ($orcamentos->onFirstPage())
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $orcamentos->previousPageUrl() }}"><i class="fa fa-arrow-left"></i> </a></li>
                    @endif
                    @if ($orcamentos->hasMorePages())
                        <li class="page-item"><a class="page-link" href="{{ $orcamentos->nextPageUrl() }}"><i class="fa fa-arrow-right"></i> </a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection