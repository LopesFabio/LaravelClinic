@extends('painel.menu.index')
@section('content')
    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">
                            Detalhes do Paciente: <b>{{$paciente->nome}}</b>
                        </h1>
                        <h4>
                            @if($paciente->situacao == 'ativo')
                            Cadastro: <span class="badge bg-success" style="font-size: 15px">Ativo</span>
                            @else
                            Cadastro: <span class="badge bg-danger">Desativado</span>
                            @endif
                        </h4>
                        <h5><b>Código do Paciente: </b>{{$paciente->id}}</h5>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Pacientes</a></li>
                            <li class="breadcrumb-item active">Detalhes</li>
                            <li class="breadcrumb-item active">{{$paciente->nome}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->
    <!-- content -->
        <div class="form-group">
            <table>
                <label>Dados Pessoais</label>
                <tr>
                    <th><span class="input-group-text bg-transparent" style="border: none"><b>Nome:</b></span></th>
                    <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->nome}}</span></td>
                    <th><span class="input-group-text bg-transparent" style="border: none"><b>Data de Nascimento</b></span></th>
                    <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->nascimento}}</span></td>
                </tr>

                <tr>
                    <th><p> <br> </p> </th>
                    <td><p> <br> </p> </td>
                </tr>

                <tr>
                    <th><span class="input-group-text bg-transparent" style="border: none"><b>CPF:</b></span></th>
                    <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->cpf}}</span></td>
                    <th><span class="input-group-text bg-transparent" style="border: none"><b>RG:</b></span></th>
                    <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->rg}}</span></td>
                    <th><span class="input-group-text bg-transparent" style="border: none"><b>RNE</b></span></th>
                    <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->rne}}</span></td>
                </tr>
                <tr>
                    <th><p> <br> </p> </th>
                    <td><p> <br> </p> </td>
                </tr>
                <tr>
                    <th><span class="input-group-text bg-transparent" style="border: none"><b>Estado Civil:</b></span></th>
                    <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->estado_civil}}</span></td>
                    <th><span class="input-group-text bg-transparent" style="border: none"><b>Sexo:</b></span></th>
                    <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->sexo}}</span></td>
                    <th><span class="input-group-text bg-transparent" style="border: none"><b>Nacionalidade</b></span></th>
                    <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->nacionalidade}}</span></td>
                </tr>
                <!-- /Dados Pessoais -->
                <tr>
                    <th><p> <br> </p> </th>
                    <td><p> <br> </p> </td>
                </tr>
                <tr>
                    <th><p> <br> </p> </th>
                    <td><p> <br> </p> </td>
                </tr>
                <!-- Contato -->
                <div class="form-group">
                    <table>
                        <label>Informações de Contato</label>
                        <tr>
                            <th><span class="input-group-text bg-transparent" style="border: none"><b>Endereço:</b></span></th>
                            <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->endereco}}</span></td>
                            <th><span class="input-group-text bg-transparent" style="border: none">Número:</span></th>
                            <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->numero}}</span></td>
                            <th><span class="input-group-text bg-transparent" style="border: none">Bairro:</span></th>
                            <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->bairro}}</span></td>
                        </tr>

                        <tr>
                            <th><p> <br> </p> </th>
                            <td><p> <br> </p> </td>
                        </tr>

                        <tr>
                            <th><span class="input-group-text bg-transparent" style="border: none">Cidade:</span></th>
                            <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->cidade}}</span></td>
                            <th><span class="input-group-text bg-transparent" style="border: none">CEP:</span></th>
                            <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->cep}}</span></td>
                            <th><span class="input-group-text bg-transparent" style="border: none">Estado:</span></th>
                            <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->estado}}</span></td>
                        </tr>

                        <tr>
                            <th><p> <br> </p> </th>
                            <td><p> <br> </p> </td>
                        </tr>

                        <tr>
                            <th><span class="input-group-text bg-transparent" style="border: none">Telefone:<span class="input-group-text bg-transparent" style="border: none"></th>
                            <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->telefone1}}</span></td>
                            <th><span class="input-group-text bg-transparent" style="border: none">Email</span></th>
                            <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->email}}</span></td>
                            <th><span class="input-group-text bg-transparent" style="border: none">Whatsapp/Celular</span></th>
                            <td><span class="input-group-text bg-transparent" style="border: none">{{$paciente->telefone2}}</span></td>
                        </tr>
                        <!-- /Contato -->
                    </table>
                </div>
                <div class="form-group">
                    <a href="#" class="btn btn-outline-dark">Editar</a>
                    <a href="{{route('paciente.index')}}" class="btn btn-outline-dark">Voltar</a>
                </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- \content -->
@endsection