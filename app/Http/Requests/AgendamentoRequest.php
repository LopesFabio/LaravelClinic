<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendamentoRequest extends FormRequest
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
            'paciente'  => 'required',
            'data'      => 'required',
            'hora'      => 'required',
            'dentista'  => 'required',
            'descricao' => 'required|min:5',
        ];
    }

    public function messages()
    {
        return [
            'paciente.required'  => 'Informe o Paciente',
            'data.required'      => 'Informe a Data',
            'hora.required'      => 'Informe a Data',
            'dentista.required'  => 'Informe o Profissional que irá Atender',
            'descricao.required' => 'O agendamento necessita de uma descrição de pelo menos 5 caracteres',
        ];
    }
}
