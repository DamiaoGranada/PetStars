<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
        "name" => 'required|min:3|max:40|regex:/^[A-ZÀ-úa-z\s]+$/',
        "email" => 'required|email|unique:users,email',
        "role" => 'required|in:N,A',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
        }
        public function messages()
        {
        return [
        'name.regex' => 'Name should contain only letters and spaces'
        ];
    }
       
    
}
