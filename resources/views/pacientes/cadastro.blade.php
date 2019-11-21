@extends('Painel.menu.index')

@section('content')

    <div class="content-wrapper">
        <!-- Primeira Linha do Dashboard -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Cadastro de Pacientes</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Pacientes</a></li>
                            <li class="breadcrumb-item active">{{$botao}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.primeira Linha do Dashboard -->

       {{--conteudo--}}
        @include('Painel.alerts')
        <div class="card card-info">
            <div class="card-body">
                <div class="form-group">
                {{--teste de table--}}
                @if(isset($paciente))
                <form method="POST" action="{{route('paciente.update', $paciente->id)}}">
                    {!! method_field('PUT') !!}
                @else
                <form action="{{route('paciente.confirm')}}" method="POST"> <!-- Inicio do Formulario de Envio de Dados para o Metodo Store -->
                @endif
                    {{ csrf_field() }}
                    <div class="form-group">
                        <table>
                            <!-- Dados Pessoais -->
                            <label>Dados Pessoais</label>
                            <tr>
                                <th><span class="input-group-text bg-transparent" style="border: none">Nome:</span></th>
                                <td colspan="3"><input type="text" class="form-control" placeholder="" style="border-top: none; border-right: none; border-left: none" id="nome" name="nome" value="{{$paciente->nome or old('')}}"></td>
                                <th><span class="input-group-text bg-transparent" style="border: none">Data de Nascimento</span></th>
                                <td><input type="date" class="form-control" placeholder="" style="border-top: none; border-right: none; border-left: none" id="nascimento" name="nascimento" value="{{$paciente->nascimento or old('')}}"></td>
                            </tr>

                            <tr>
                                <th><p> <br> </p> </th>
                                <td><p> <br> </p> </td>
                            </tr>

                            <tr>
                                <th><span class="input-group-text bg-transparent" style="border: none">CPF:</span></th>
                                <td><input type="text" class="form-control" placeholder="" style="border-top: none; border-right: none; border-left: none" id="cpf" name="cpf" value="{{$paciente->cpf or old('')}}"></td>
                                <th><span class="input-group-text bg-transparent" style="border: none">RG:</span></th>
                                <td><input type="text" class="form-control" placeholder="" style="border-top: none; border-right: none; border-left: none" id="rg" name="rg" value="{{$paciente->rg or old('')}}"></td>
                                <th><span class="input-group-text bg-transparent" style="border: none">RNE</span></th>
                                <td><input type="text" class="form-control" placeholder="" style="border-top: none; border-right: none; border-left: none" id="rne" name="rne" value="{{$paciente->rne or old('')}}"></td>
                            </tr>
                            <tr>
                                <th><p> <br> </p> </th>
                                <td><p> <br> </p> </td>
                            </tr>
                            <tr>
                                <th><span class="input-group-text bg-transparent" style="border: none">Estado Civil:</span></th>
                                <td>
                                    <select class="form-control" style="border-top: none; border-right: none; border-left: none" id="estadocivil" name="estadocivil">
                                        <option value="" selected disabled>Selecione:</option>
                                        <option value="solteiro">Solteiro(a)</option>
                                        <option value="casado">Casado(a)</option>
                                        <option value="divorciado">Divorciado(a)</option>
                                        <option value="viuvo">Viúvo(a)</option>
                                        <option value="separado">Separado(a)</option>
                                    </select>
                                </td>
                                <th><span class="input-group-text bg-transparent" style="border: none">Sexo:</span></th>
                                <td>
                                    <select class="form-control" style="border-top: none; border-right: none; border-left: none" id="sexo" name="sexo">
                                        <option value="" selected disabled>Selecione:</option>
                                        <option value="feminino">Feminino</option>
                                        <option value="masculino">Masculino</option>
                                    </select>
                                </td>
                                <th><span class="input-group-text bg-transparent" style="border: none">Nacionalidade</span></th>
                                <td>
                                    <select class="form-control" style="border-top: none; border-right: none; border-left: none" id="nacionalidade" name="nacionalidade">
                                        <option value="" selected disabled>Selecione:</option>
                                        <option value="brasileiro">Brasileiro</option>
                                        <option value="estrangeiro">Estrangeiro</option>
                                    </select>
                                </td>
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
                                <th><span class="input-group-text bg-transparent" style="border: none">Endereço:</span></th>
                                <td><input type="text" class="form-control" placeholder="" style="border-top: none; border-right: none; border-left: none" id="endereco" name="endereco" value="{{$paciente->endereco or old('')}}"></td>
                                <th><span class="input-group-text bg-transparent" style="border: none">Número:</span></th>
                                <td><input type="text" class="form-control" placeholder="" style="border-top: none; border-right: none; border-left: none" id="numero" name="numero" value="{{$paciente->numero or old('')}}"></td>
                                <th><span class="input-group-text bg-transparent" style="border: none">Bairro:</span></th>
                                <td><input type="text" class="form-control" placeholder="" style="border-top: none; border-right: none; border-left: none"id="bairro" name="bairro" value="{{$paciente->bairro or old('')}}"></td>
                            </tr>

                            <tr>
                                <th><p> <br> </p> </th>
                                <td><p> <br> </p> </td>
                            </tr>

                            <tr>
                                <th><span class="input-group-text bg-transparent" style="border: none">Cidade:</span></th>
                                <td><input type="text" class="form-control" placeholder="" style="border-top: none; border-right: none; border-left: none" id="cidade" name="cidade" value="{{$paciente->cidade or old('')}}"></td>
                                <th><span class="input-group-text bg-transparent" style="border: none">CEP:</span></th>
                                <td><input type="text" class="form-control" placeholder="" style="border-top: none; border-right: none; border-left: none" id="cep" name="cep" value="{{$paciente->cep or old('')}}"></td>
                                <th><span class="input-group-text bg-transparent" style="border: none">Estado:</span></th>
                                <td>
                                    <select class="form-control" style="border-top: none; border-right: none; border-left: none" id="estadoatual" name="estado">
                                        <option value="">Selecione:</option>
                                        <option value="" disabled></option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <th><p> <br> </p> </th>
                                <td><p> <br> </p> </td>
                            </tr>

                            <tr>
                                <th><span class="input-group-text bg-transparent" style="border: none">Telefone:<span class="input-group-text bg-transparent" style="border: none"></th>
                                <td><input type="text" class="form-control" placeholder="" style="border-top: none; border-right: none; border-left: none" id="telefone1" name="telefone1" value="{{$paciente->telefone1 or old('')}}"></td>
                                <th><span class="input-group-text bg-transparent" style="border: none">Email</span></th>
                                <td><input type="email" class="form-control" placeholder="" style="border-top: none; border-right: none; border-left: none" id="email" name="email" value="{{$paciente->email or old('')}}"></td>
                                <th><span class="input-group-text bg-transparent" style="border: none">Whatsapp/Celular</span></th>
                                <td><input type="text" class="form-control" placeholder="" style="border-top: none; border-right: none; border-left: none" id="telefone2" name="telefone2" value="{{$paciente->telefone2 or old('')}}"></td>
                            </tr>
                            <!-- /Contato -->
                        </table>
                    </div>
                    <div class="form-group">
                        <table>
                            <tr>
                                <th><span class="input-group-text bg-transparent" style="border: none">Situação</span></th>
                                <td>
                                    <select class="form-control" style="border-top: none; border-right: none; border-left: none" id="situacao" name="situacao">
                                        <option value="ativo" selected>Cadastro Ativo</option>
                                        <option value="desativado">Cadastro Desativado</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-dark" type="submit">{{$botao}}</button>
                        <a href="{{route('paciente.index')}}" class="btn btn-outline-dark">Voltar</a>
                    </div>
                </form>
                {{--/table teste--}}
                </form>
            </div>
            <!-- /.card-body -->
        </div>
       {{--/conteudo--}}
    </div>
@endsection