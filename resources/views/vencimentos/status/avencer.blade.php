@extends('Painel.menu.index')

@section('content')

    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Vencimentos À Receber</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Vencimentos</a></li>
                            <li class="breadcrumb-item active">À Receber</li>
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
                            @foreach($avencer as $avencer)
                                <tr>
                                    <td>{{$avencer->id}}</td>
                                    <td>{{$avencer->agendamento_id}}</td>
                                    <td>{{{date('d/m/Y', strtotime($avencer->data_vencimento))}}}</td>
                                    <td>{{number_format($avencer->valor, 2, ",",".")}}</td>
                                    <td><a href="#" class="btn btn-outline-success">Pagar</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- /conteudo --}}
    </div>
@endsection