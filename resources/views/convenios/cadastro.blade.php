@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Convênios</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Convênios</a></li>
                            <li class="breadcrumb-item active">Cadastro</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->
        <!-- Content do Dashboard -->
        @include('Painel.alerts')
        <div class="login-box">
            <div class="login-logo">
                <a href="#">Cadastro</a>
            </div>
            <div class="card">
                <div class="card-body login-card-body">
                    @if(isset($convenios))
                    <form action="{{route('convenio.update', $convenios->id)}}" method="POST">
                        {!! method_field('PUT') !!}
                    @else
                    <form action="{{route('convenio.insert')}}" method="POST">
                    @endif
                        {{ csrf_field() }}
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Plano" name="nome" id="nome" value="{{$convenios->nome or old('Plano')}}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-medkit"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Desconto" name="desconto" id="desconto" value="{{$convenios->desconto or old('Desconto')}}">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-percentage"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <select class="form-control" name="tipo" id="tipo">
                                <option value="" disabled selected>Tipo</option>
                                <option value="dinheiro">Dinheiro</option>
                                <option value="porcentagem">Porcentagem</option>
                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-money-bill-alt"></span>
                                </div>
                            </div>
                        </div>
                        @if(isset($convenios))
                        <div class="input-group mb-3">
                            <select class="form-control" name="status" id="status">
                                <option value="desativado" selected>Desativar</option>
                                <option value="ativo">Ativar</option>
                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-money-bill-alt"></span>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">{{$botao}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection