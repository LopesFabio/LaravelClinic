@extends('Painel.menu.index')

@section('content')

    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Vencimentos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Vencimentos</a></li>
                            <li class="breadcrumb-item active">Principal</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->
        {{--conteudo--}}
        <!-- mini widgets -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-primary elevation-1"><a href="{{route('vencimento.pagos')}}"><i class="fa fa-dollar-sign"></i></a></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Contas Pagas</span>
                        <span class="info-box-number">{{$pagos}} pagas</span>
                        <span class="info-box-number">R$ {{number_format($totalPagos), 2}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><a href="{{route('vencimento.avencer')}}"><i class="fas fa-dollar-sign"></i></a></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Contas À Vencer</span>
                        <span class="info-box-number">{{$avencer}} à receber</span>
                        <span class="info-box-number">R$ {{number_format($totalAvencer), 2}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><a href="{{route('vencimento.atrasos')}}"><i class="fas fa-dollar-sign"></i></a></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Contas Vencidas</span>
                        <span class="info-box-number">{{$vencidos}} vencidas</span>
                        <span class="info-box-number">R$ {{number_format($totalPagos), 2}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-dollar-sign"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total À Receber</span>
                        <span class="info-box-number">{{$totalVencimentos}} à receber</span>
                        <span class="info-box-number">R$ {{number_format($totalReceber), 2, ',', '.'}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /mini widgets -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Consulta</th>
                                <th>Vencimento</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($vencimentos as $vencimento)
                            <tr>
                                <td>{{$vencimento->id}}</td>
                                <td>{{$vencimento->agendamento_id}}</td>
                                <td>{{{date('d/m/Y', strtotime($vencimento->data_vencimento))}}}</td>
                                @if($vencimento->status == 'À Vencer')
                                <td><p class="badge bg-warning">{{$vencimento->status}}</p></td>
                                @endif
                                @if($vencimento->status == 'Vencido')
                                    <td><p class="badge bg-danger">{{$vencimento->status}}</p></td>
                                @endif
                                <td><a href="#" class="btn btn-outline-success">Pagar</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <ul class="pagination pagination-sm m-0 float-right">
                            @if ($vencimentos->onFirstPage())
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $vencimentos->previousPageUrl() }}"><i class="fa fa-arrow-left"></i> </a></li>
                            @endif
                            @if ($vencimentos->hasMorePages())
                                <li class="page-item"><a class="page-link" href="{{ $vencimentos->nextPageUrl() }}"><i class="fa fa-arrow-right"></i> </a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{--/conteudo--}}
    </div>
@endsection