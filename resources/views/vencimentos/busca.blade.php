@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Buscar Vencimento</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Vencimentos</a></li>
                            <li class="breadcrumb-item active">Buscar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->

        <!-- content -->
        @include('Painel.alerts')
        <div class="login-box">
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Buscar Vencimento por:</p>
                    <!-- Paciente -->
                    <div class="input-group mb-3">
                        <form action="#" method="POST">
                            {{csrf_field()}}
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <p class="btn btn-outline-dark">
                                            Paciente
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <select class="form-control" name="paciente" id="paciente">
                                                @foreach($pacientes as $paciente)
                                                    <option value="{{$paciente->id}}">{{$paciente->nome}}</option>
                                                @endforeach
                                            </select>
                                            <p></p>
                                            <button type="submit" class="btn btn-outline-dark">Buscar</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <!-- Mês -->
                    <div class="input-group mb-3">
                        <form action="#" method="POST">
                            {{csrf_field()}}
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <p class="btn btn-outline-dark">
                                            Mês
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <select class="form-control" name="mes" id="mes">
                                                <option value="01">Janeiro</option>
                                                <option value="02">Fevereiro</option>
                                                <option value="03">Março</option>
                                                <option value="04">Abril</option>
                                                <option value="05">Maio</option>
                                                <option value="06">Junho</option>
                                                <option value="07">Julho</option>
                                                <option value="08">Agosto</option>
                                                <option value="09">Setembro</option>
                                                <option value="10">Outubro</option>
                                                <option value="11">Novembro</option>
                                                <option value="12">Dezembro</option>
                                            </select>
                                            <p></p>
                                            <input type="number" class="form-control" placeholder="Ano" name="ano" id="ano">
                                            <p></p>
                                            <button type="submit" class="btn btn-outline-dark">Buscar</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <!-- Dia -->
                    <div class="input-group mb-3">
                        <form action="#" method="POST">
                            {{csrf_field()}}
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                        <p class="btn btn-outline-dark">
                                            Dia
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <input type="date" class="form-control" name="data" id="data">
                                            <p></p>
                                            <button type="submit" class="btn btn-outline-dark">Buscar</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /content -->
    </div>
@endsection