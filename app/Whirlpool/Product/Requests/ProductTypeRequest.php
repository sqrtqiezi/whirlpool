<?php

namespace Whirlpool\Product\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductTypeRequest extends FormRequest
{
    public function authorize()
    {
        return app()['auth']->check();
    }

    public function rules()
    {
        return [
            'name' => 'required'
        ];
    }
}
