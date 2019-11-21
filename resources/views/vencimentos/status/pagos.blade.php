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
                                <th>Data do Pagamento</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pagos as $pago)
                                <tr>
                                    <td>{{$pago->id}}</td>
                                    <td>{{$pago->agendamento_id}}</td>
                                    <td>{{{date('d/m/Y', strtotime($pago->data_vencimento))}}}</td>
                                    <td>{{number_format($pago->valor)}}</td>
                                    <td>{{{date('d/m/Y', strtotime($pago->data_pagamento))}}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        {{-- /conteudo --}}
    </div>
@endsection