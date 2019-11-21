@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Atestado</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dentista.index')}}">Dentistas</a></li>
                            <li class="breadcrumb-item active">Pós-Consulta</li>
                            <li class="breadcrumb-item active">Atestados</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->
        <!-- content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <tr>
                                <td><b>Clinia:</b> 3K Odonto</td>
                            </tr>
                            <tr>
                                <td><b>CPNJ:</b> 000.000.000/0000-00</td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Rua:</b> nome da rua, Numero<br>
                                    <b>Bairro:</b> Bairro<br>
                                    <b>Cidade:</b> Cidade - Estado <br>
                                    <b>Telefone:</b> Telefone
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Descrição:</b><br>
                                    Atesto para os devidos fins que {{$paciente->nome}} - CPF {{$paciente->cpf}} <br>
                                    {{$descricao}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Profissional:</b> {{$dentista->nome}} <br>
                                    <b>CRO: </b> {{$dentista->cro}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><br></p>
                                    <b>Carimbo</b>
                                    <p><br></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><br></p>
                                    <p><br></p>
                                    <b>Assinatura:</b>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <form>
            <input type="button" value="Imprimir" onClick="window.print()"/>
        </form>
        <!-- /content -->
    </div>
@endsection