<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EvaluateRequest extends FormRequest
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
            'detail'=>'required|max:250',
            'goods_id'=>'required|integer|digits_between:1,10',
        ];
    }

    public function messages()
    {
        return [
            'detail.required'=>'评价必须填写',
            'detail.max'=>'评价最多250字',
            'goods_id.required'=>'京东账号id必须填写',
            'goods_id.integer'=>'京东账号id必须是整数',
            'goods_id.digits_between'=>'京东账号id是1-10位',
        ];
    }
}
