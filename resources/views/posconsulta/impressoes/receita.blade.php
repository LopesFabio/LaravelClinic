@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Receituário</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dentista.index')}}">Dentistas</a></li>
                            <li class="breadcrumb-item active">Todos</li>
                            <li class="breadcrumb-item active">{{$dentista->nome}}</li>
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
                                    De acordo com a Lei Nº 5.081 de 24 de Agosto de  1966.<br>
                                    Artigo 6: Compete ao cirurgião-dentista:<br>
                                    Item I: praticar todos os atos pertinentes a Odontologia, decorrentes de conhecimentos adquiridos em curso regular ou em cursos de pós-graduação. <br>
                                    Item II: prescrever e aplicar especialidades farmacêuticas de uso interno e externo, indicadas em Odontologia.
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    De acordo com o firmado acima, recomenda-se ao <b>Paciente:</b> {{$paciente->nome}} <b>CPF:</b> {{$paciente->cpf}}
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Prescrção</b>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    {{$prescricao}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Profissonal:</b> {{$dentista->nome}}<br>
                                    <b>CRO:</b> {{$dentista->cro}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br>Carimbo<br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br><br><b>Assinatura:</b><u>___________________________________________</u>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Ao persistir os sintomas após o prazo, comunicar a clinica.
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