<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConvenioRequest extends FormRequest
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
            'nome'     => 'required',
            'desconto' => 'required',
            'tipo'     => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome.required'     => 'Digite o Nome do Plano',
            'desconto.required' => 'Digite o Valor de Desconto do Plano',
            'tipo.required'     => 'Escolha se o Desconto é Porcento ou Dinheiro',
        ];
    }
}
