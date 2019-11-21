<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome'             => 'required|min:6',
            'nascimento'       => 'required',
            'estadocivil'     => 'required',
            'sexo'             => 'required',
            'nacionalidade'    => 'required',
            'endereco'         => 'required',
            'numero'           => 'required',
            'bairro'           => 'required',
            'cep'              => 'required',
            'cidade'           => 'required',
            'estado'           => 'required',
            'telefone2'        => 'required',
            'situacao'         => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required'             => 'Digite o Nome Completo',
            'nascimento.required'       => 'Digite a Data de Nascimento',
            'estado_civil.required'     => 'Selecione o Estado Civíl',
            'sexo.required'             => 'Selecione o Sexo',
            'nacionalidade.required'    => 'Selecione a Nacionalidade',
            'endereco.required'         => 'Digite o Endereço',
            'numero.required'           => 'Digite o Número do Endereço',
            'bairro.required'           => 'Digite o Bairro',
            'cep.required'              => 'Digite o CEP',
            'cidade.required'           => 'Digite a Cidade',
            'estado.required'           => 'Selecione o Estado',
            'telefone2.required'        => 'Digite o Celular para Contato',
        ];
    }
}
