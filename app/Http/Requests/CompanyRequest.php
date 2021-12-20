<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name'=>'required|string',
            'image'=>'mimes:jpeg,png,jpg,gif,svg',
            'specialty'=>'required|string',
            'content'=>'required|string',
            'dateOfBirth'=>'required|date',
            'phone'=>'required|string',
            'email'=>'required|string',
            'adress'=>'required|string',
            'city'=>'required|string',
        ];
    }
}
