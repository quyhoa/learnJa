<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //need check author
        // return false;
        // do need check author
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
            'username'=>'required|max:10|min:6',
            'password'=>'required|min:6|max:10',
        ];
        return $rules;
    }

    public function messages()
    {
        $messages = [
            'name.required'=>'name khong duoc rong',
            'name.max'=>'name khong duoc qua 10 ki tu',
            'username.required'=>'username khong duoc rong',
            'username.max'=>'username khong duoc qua 10 ki tu',
            'username.min'=>'username toi thieu phai 6 ki tu',
            'password.required'=>'password khong duoc rong',
            'password.max'=>'password khong duoc qua 10 ki tu',
            'password.min'=>'password toi thieu phai 6 ki tu',
        ];
        return $messages;
    }
}
