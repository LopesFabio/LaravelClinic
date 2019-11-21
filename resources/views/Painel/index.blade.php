@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Página Inicial</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Início</a></li>
                            <li class="breadcrumb-item active">Principal</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->
    <!-- content -->
    @if(auth()->user()->acl == 'dentista' or auth()->user()->acl == '3kmaster' or auth()->user()->acl == 'masterclinic')
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-green">
                        <div class="inner">
                            <h3>{{$consultasHoje}}</h3>

                            <p>Atendimentos Hoje</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-stethoscope"></i>
                        </div>
                        <a href="{{route('orcamento.consultas')}}" class="small-box-footer">Atender <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
    @endif

    @if(auth()->user()->acl == 'recepcao' or auth()->user()->acl == '3kmaster' or auth()->user()->acl == 'masterclinic')
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-gradient-red">
                    <div class="inner">
                        <h3>{{$relatoriosHoje}}</h3>
                            <p>Relatórios</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-clipboard-list"></i>
                        </div>
                        <a href="{{route('relatorio.hoje')}}" class="small-box-footer">Atender <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
    @endif
    <!-- /content -->
    </div>
@endsection