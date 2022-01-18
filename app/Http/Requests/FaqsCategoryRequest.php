<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqsCategoryRequest extends FormRequest
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
            "titulo" => 'required|min:3|max:40|regex:/^[A-ZÀ-úa-z\s]+$/',
            "conteudo" => 'required|min:3|max:1000|regex:/^[A-ZÀ-úa-z,.\s]+$/',
            
        ];
    }
}