<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class A01110FormRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'name欄位為必填',
            'email.required' => 'email欄位為必填',
            'email.email' => 'email格式有誤',
        ];
    }
}
