<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $rules = [
            'name'=>'required|max:10',
        ];
        return $rules;
    }

    public function messages()
    {
        $messages = [
            'name.required'=>'name khong duoc rong',
            'name.max'=>'name khong duoc qua 10 ki tu',
        ];
        return $messages;
    }
}
