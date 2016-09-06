<?php

namespace Whirlpool\News\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'thumbnail' => 'required',
        ];
    }
}
