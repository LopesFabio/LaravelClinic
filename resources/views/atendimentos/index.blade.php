@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Atendimentos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Atendimentos</a></li>
                            <li class="breadcrumb-item active">Principal</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->
        <!-- content -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$totalConsultas}}</h3>

                        <p>Consutas Hoje</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-clipboard"></i>
                    </div>
                    <a href="{{route('atendimento.mensal')}}" class="small-box-footer">Ver Consultas desse mês <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection