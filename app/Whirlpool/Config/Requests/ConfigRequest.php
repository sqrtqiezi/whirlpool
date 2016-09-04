<?php

namespace Whirlpool\Config\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigRequest extends FormRequest
{
    public function authorize()
    {
        return app()['auth']->check();
    }

    public function rules()
    {
        return [
            'content.title' => 'required',
            'content.brand'   => 'required',
            'content.icp' => 'required',
        ];
    }
}
