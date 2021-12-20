<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProviderRequest extends FormRequest
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
            //
            'fullName'=>'required|string',
            'dateOfBirth'=>'required|date',
            'phone'=>'required|string',
            'email'=>'required|string',
            'adress'=>'required|string',
            'city'=>'required|string'
        ];
    }
}
