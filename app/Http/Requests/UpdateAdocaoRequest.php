<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAdocaoRequest extends FormRequest
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
            "nome_animal" => 'max:40|regex:/^[A-ZÀ-úa-z\s]+$/',
            "descricao_animal" => 'max:200|regex:/^[A-ZÀ-úa-z,.\s]+$/',
            "data_acolhimento" => 'required',
            "idade_animal" => 'required',
            "especie" => 'max:200|regex:/^[A-ZÀ-úa-z,.\s]+$/',
            "genero" => 'max:200|regex:/^[A-ZÀ-úa-z,.\s]+$/',
            "local_animal" => 'max:200|regex:/^[A-ZÀ-úa-z,.\s]+$/',
            "foto" => 'image|mimes:jpeg,png,jpg,gif',
        ];
    }
}



