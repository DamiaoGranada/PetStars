<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactosRequest extends FormRequest
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
            "nome_comentario" => 'required|min:3|max:40|regex:/^[A-ZÀ-úa-z\s]+$/',
            "email_comentario" => 'required|min:3|max:200|regex:/^[A-ZÀ-úa-z,.\s]+$/',
            "mensagem" => 'required|min:3|max:200|regex:/^[A-ZÀ-úa-z,.\s]+$/'
        ];
    }
}
