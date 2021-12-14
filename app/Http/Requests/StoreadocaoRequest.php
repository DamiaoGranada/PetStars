<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreadocaoRequest extends FormRequest
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
            "nome_animal" => 'required|min:3|max:40|regex:/^[A-ZÀ-úa-z\s]+$/',
            "descricao_animal" => 'required|descricao|unique:animais',
            "data_acolhimento" =>'required|data|unique:animais',
            "idade_animal"=>'required|idade|unique:animais',
            "especie" => 'required|in:G,C',
            "genero" => 'required|in:F,M',
            "local_animal" => 'required|in:L,P',
            'caminho' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'name.regex' => 'Name should contain only letters and spaces'
        ];
    }
}
