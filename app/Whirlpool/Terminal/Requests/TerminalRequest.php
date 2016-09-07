<?php

namespace Whirlpool\Terminal\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TerminalRequest extends FormRequest
{
    public function authorize()
    {
        return app()['auth']->check();
    }

    public function rules()
    {
        return [
            'name'      => 'required',
            'location'  => ['required', 'digits_between:1,34'],
            'address'   => 'required',
            'telephone' => 'required',
            'thumbnail' => ['required'],
        ];
    }
}
