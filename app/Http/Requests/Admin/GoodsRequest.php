<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;

class GoodsRequest extends FormRequest
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
            'skuid'=>['required','between:3,20',Rule::unique('goodss')->ignore(Input::segment(2)?Input::segment(2):""),],
            'search_key'=>'max:20',
            'shop_id'=>'integer|digits_between:1,10',
            'price'=>array('regex:/^(?:[1-9]\d{0,6}|0)(?:\.\d{1,2})?$/'),
            'full_title'=>'max:50',
            'shot_title'=>'max:20',
            'stock'=>'integer|digits_between:1,8',
        ];
    }

    public function messages()
    {
        return [
            'skuid.required'=>'skuid必须填写',
            'skuid.between'=>'skuid在3到20位之间',
            'skuid.unique'=>'skuid必须唯一',
            'search_key.max'=>'搜索关键词最多20自字符',
            'shop_id.integer'=>'店铺id必须是整数',
            'shop_id.digits_betwen'=>'店铺id是1到10位之间的数字',
            'price.regex'=>'价格必须是金钱格式',
            'full_title'=>'完整标题最多50字符',
            'shot_title'=>'短标题最多20字符',
            'stock.interger'=>'库存必须是整数',
            'stock.digits_between'=>'库存必须是1到8位见得数字',
        ];
    }

}
