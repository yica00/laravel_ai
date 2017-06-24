<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AreaRequest extends FormRequest
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
            'id'=>'required|integer|digits_between:1,10',
            'name'=>'max:16',
            'pid'=>'required|integer|digits_between:1,10',
        ];
    }

    public function messages()
    {
        return [
            'id.required'=>'id必须填写',
            'id.integer'=>'id必须是整数',
            'id.digits_between'=>'id在1到10位之间',
            'name.max'=>'地区名字最多40字符',
            'pid.required'=>'父级id必须填写',
            'pid.integer'=>'父级id必须是整数',
            'pid.digits_between'=>'父级id在1到10位之间',
        ];
    }
}
