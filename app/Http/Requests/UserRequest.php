<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return app()['auth']->check();
    }

    public function rules()
    {
        return [
            'name' => 'required|unique:users',
            'user_name' => 'required'
        ];
    }
}