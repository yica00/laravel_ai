<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;

class TagRequest extends FormRequest
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
        return [
            'name'=>['required','max:20',Rule::unique('tags')->ignore(Input::segment(2)?Input::segment(2):""),],

        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'标签名必须填写',
            'name.max'=>'标签名最多20字符',
            'name.unique'=>'标签名必须唯一',//
        ];
    }
}
