@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Orçamento Nº
                            @if(isset($codOrcamento->id))
                            {{$codOrcamento->id +1}}
                            @else
                            1
                            @endif </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><b>Orçamentos</b></li>
                            <li class="breadcrumb-item active">Fazer Orçamento</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->

        <!-- content -->
        @include('Painel.alerts')
        <div class="card card-primary">
            @if(isset($orcamento))
            <form action="{{route('orcamento.update', $orcamento->id)}}" method="POST">
                {!! method_field('PUT') !!}
            @else
            <form action="{{route('orcamento.insert')}}" method="POST">
            @endif
            {{csrf_field()}}
                <div class="card-body">
                    <label>Descrição</label>
                    <div class="form-group">
                    @if(isset($orcamento))
                    <textarea rows="10" cols="170" id="descricao" name="descricao">{{$orcamento->descricao}}</textarea>
                    @else
                     <textarea rows="10" cols="170" id="descricao" name="descricao"></textarea>
                    @endif
                    </div>
                    <label>Valor</label>
                    <div class="form-group">
                        <input type="number" placeholder="R$" id="valor" name="valor" value="{{$orcamento->valor or old('R$')}}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
        <!-- /content -->
    </div>
@endsection