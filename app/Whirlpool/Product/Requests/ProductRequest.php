<?php

namespace Whirlpool\Product\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function authorize()
    {
        return app()['auth']->check();
    }

    public function rules()
    {
        return [
            'type_id' => 'required',
            'main_heading' => 'required',
            'sub_heading' => 'required',
            'background' => 'required',
            'feature' => 'required',
            'spec_img_one' => 'required',
            'spec_img_two' => 'required',
            'core_tech_title' => 'required',
            //'core_tech_detail' => 'required',
            //'detail' => 'required',
        ];
    }
}
