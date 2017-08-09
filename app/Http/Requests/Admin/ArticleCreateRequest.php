<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ArticleCreateRequest extends FormRequest
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
            'title'=>'required|max:80',
            'thumbnail'=>'mimetypes:image/gif,image/png,image/jpeg,image/bmp',
            'introduce'=>'max:200',
            'is_nav'=>'in:0,1',
            'serial_number'=>'integer',
            'link'=>'max:100',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'文章标题必须填写',
            'title.max'=>'标题最多80字符',
            'thumbnail.mimetypes'=>'缩略图必须是图片格式',
            'introduce.max'=>'文章介绍最多200字符',
            'is_nav.in'=>'是否为导航只能是0或者1的数字',
            'serial_number.integer'=>'排序号必须是数字',
            'link.max'=>'链接最多100字符',
        ];
    }
}
