<?php

namespace Whirlpool\Life\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LifeRequest extends FormRequest
{
    public function authorize()
    {
        return app()['auth']->check();
    }

    public function rules()
    {
        return [
            'type' => 'required',
            'title'   => 'required',
            'content' => 'required',
        ];
    }
}
