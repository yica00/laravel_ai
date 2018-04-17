<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name'=>'required|max:20',
            'type'=>'integer',
            'level'=>'integer',
            'blov'=>'max:255',
            'imgs.*'=>'image|max:1024',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'客户名字必须填写',
            'title.max'=>'客户名字最多20字符',
            'type.integer'=>'类型参数错误',
            'level.integer'=>'等级参数错误',
            'blov.max'=>'特征介绍最多255字符',
            'imgs.*.max'=>'单个图片最大限制1兆',
            'imgs.*.image'=>'图片类型错误',
        ];
    }
}
