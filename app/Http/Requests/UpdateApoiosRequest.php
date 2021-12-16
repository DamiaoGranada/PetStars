<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApoiosRequest extends FormRequest
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
            "nome_apoio" => 'required|min:3|max:40|regex:/^[A-ZÀ-úa-z\s]+$/',
            "descri_apoio" => 'required|min:3|max:200|regex:/^[A-ZÀ-úa-z,.\s]+$/',
            "caminho_apoio" => 'required|image|mimes:jpeg,png,jpg,gif',
        ];
    }
}
