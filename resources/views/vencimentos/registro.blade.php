@extends('Painel.menu.index')

@section('content')

    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Registrar Vencimentos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Vencimentos</a></li>
                            <li class="breadcrumb-item active">Registrar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->
        {{-- conteudo --}}
        <div class="login-box">
            <div class="card">
                <div class="card-body login-card-body">
                    <form action="{{route("vencimento.insert")}}" method="POST">
                        {{ csrf_field() }}
                        <label>Código da Consulta</label>
                        <div class="input-group mb-3">
                            <select class="form-control" id="consulta" name="consulta">
                                <option value="">Selecione:</option>
                                @foreach($consultas as $consulta)
                                    <option value="{{$consulta->id}}">Consulta N. {{$consulta->id}}</option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-clipboard"></span>
                                </div>
                            </div>
                        </div>
                        <label>Data de Vencimento</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" id="data" name="data">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-calendar"></span>
                                </div>
                            </div>
                        </div>
                        <label>Parcelas</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" id="parcelas" name="parcelas">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fa fa-credit-card"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- /conteudo --}}
    </div>
@endsection