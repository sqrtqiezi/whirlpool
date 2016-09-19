<?php
/**
 * I pledge that this program represents my own
 * program code.
 */

namespace Whirlpool\Project\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    public function authorize()
    {
        return app()['auth']->check();
    }

    public function rules()
    {
        return [
            'title'   => 'required',
            'description' => 'required'
        ];
    }
}